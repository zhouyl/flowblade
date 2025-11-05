<?php

namespace Flowblade\View\Components;

use Illuminate\View\Component;

/**
 * Preview Component
 *
 * Displays both a live demo and the original code from a separate file.
 *
 * Usage:
 * <x-preview file="flowblade::preview.codes.checkbox.simple-checkbox" />
 */
class Preview extends Component
{
    /**
     * View name using Blade namespace notation
     *
     * @var string
     */
    public string $file;

    /**
     * Create a new component instance.
     *
     * @param string $file
     */
    public function __construct(string $file = '')
    {
        $this->file = $file;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        // Check if file is provided
        if (empty($this->file)) {
            return view('flowblade::components.preview.error', [
                'message' => 'File attribute is required',
            ]);
        }

        // Resolve the file path
        $filePath = $this->resolveFilePath($this->file);

        if ($filePath === null) {
            return view('flowblade::components.preview.error', [
                'message' => "File not found: {$this->file}",
            ]);
        }

        // Check if it's a file (not a directory)
        if (!is_file($filePath)) {
            return view('flowblade::components.preview.error', [
                'message' => "Path is not a file: {$this->file}",
            ]);
        }

        // Validate file path to prevent directory traversal
        // Only validate if it's not a Blade view file (views are already validated by Laravel)
        if (!str_contains($this->file, '::') && !$this->isValidPath($filePath)) {
            return view('flowblade::components.preview.error', [
                'message' => 'Invalid file path: access denied',
            ]);
        }

        // Read the file content
        $code = file_get_contents($filePath);

        if ($code === false) {
            return view('flowblade::components.preview.error', [
                'message' => "Failed to read file: {$this->file}",
            ]);
        }

        // Format the code for display
        $formattedCode = $this->formatCode($code);

        return view('flowblade::components.preview.display', [
            'file' => $this->file,
            'code' => $formattedCode,
        ]);
    }

    /**
     * Resolve view name to file path
     *
     * Supports Blade namespace notation like "flowblade::preview.codes.checkbox.simple-checkbox"
     *
     * @param string $viewName
     *
     * @return null|string
     */
    private function resolveFilePath(string $viewName): ?string
    {
        // Get the view factory
        $viewFactory = app('view');
        $finder = $viewFactory->getFinder();

        try {
            // Use the finder to find the view path
            $viewPath = $finder->find($viewName);

            if ($viewPath && file_exists($viewPath)) {
                return $viewPath;
            }
        } catch (\Exception $e) {
            // View not found, return null
        }

        return null;
    }

    /**
     * Validate file path to prevent directory traversal attacks
     *
     * @param string $filePath
     *
     * @return bool
     */
    private function isValidPath(string $filePath): bool
    {
        // Get all valid view paths
        $validPaths = [
            realpath(resource_path('views')),
            realpath(__DIR__.'/../../resources/views'), // Flowblade package views
            base_path('resources/views'),
            base_path('vendor/flowblade/flowblade/resources/views'),
        ];

        // Filter out false values and normalize paths
        $validPaths = array_filter(array_map(function ($path) {
            return $path ? realpath($path) : null;
        }, $validPaths));

        if (empty($validPaths)) {
            return false;
        }

        // For existing files, use realpath
        if (file_exists($filePath)) {
            $realPath = realpath($filePath);

            if ($realPath === false) {
                return false;
            }

            // Check if the file is within any of the valid paths
            foreach ($validPaths as $validPath) {
                if ($validPath && strpos($realPath, $validPath) === 0) {
                    return true;
                }
            }

            return false;
        }

        // For non-existing files, check the directory path
        $dirPath = dirname($filePath);
        $realDirPath = realpath($dirPath);

        if ($realDirPath === false) {
            return false;
        }

        // Check if the directory is within any of the valid paths
        foreach ($validPaths as $validPath) {
            if ($validPath && strpos($realDirPath, $validPath) === 0) {
                return true;
            }
        }

        return false;
    }

    /**
     * Format code for display
     *
     * @param string $code
     *
     * @return string
     */
    private function formatCode(string $code): string
    {
        // Escape HTML entities
        $code = e($code);

        // Remove common leading whitespace
        $lines = explode("\n", $code);
        $minIndent = PHP_INT_MAX;

        foreach ($lines as $line) {
            if (trim($line) === '') {
                continue;
            }
            $indent = strlen($line) - strlen(ltrim($line));
            $minIndent = min($minIndent, $indent);
        }

        if ($minIndent === PHP_INT_MAX) {
            $minIndent = 0;
        }

        // Remove common indentation
        $result = [];

        foreach ($lines as $line) {
            if (trim($line) === '') {
                $result[] = '';
            } else {
                $result[] = substr($line, $minIndent);
            }
        }

        return trim(implode("\n", $result));
    }
}
