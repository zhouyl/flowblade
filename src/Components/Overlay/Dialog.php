<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Dialog Component
 *
 * Pre-styled dialog component with different types (info, warning, error, success, confirm).
 * Built on top of Modal component with simplified API and consistent styling.
 */
class Dialog extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $type        Dialog type: 'info', 'warning', 'error', 'success', 'confirm'
     * @param null|string $title       Dialog title (optional)
     * @param null|string $message     Dialog message content
     * @param null|string $size        Dialog width: 'sm', 'md', 'lg', 'xl'
     * @param bool        $closable    Whether dialog can be closed with ESC key or backdrop click
     * @param null|string $confirmText Text for confirm button (default: 'OK' or 'Confirm')
     * @param null|string $cancelText  Text for cancel button (only for confirm type, default: 'Cancel')
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $type = 'info',
        public ?string $title = null,
        public ?string $message = null,
        public ?string $size = 'md',
        public bool $closable = true,
        public ?string $confirmText = null,
        public ?string $cancelText = null,
        ...$styleProps
    ) {
        // Validate type
        if (!in_array($type, ['info', 'warning', 'error', 'success', 'confirm'])) {
            $this->type = 'info';
        }

        // Set default button texts
        if ($this->confirmText === null) {
            $this->confirmText = $this->type === 'confirm' ? 'Confirm' : 'OK';
        }

        if ($this->cancelText === null) {
            $this->cancelText = 'Cancel';
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get icon configuration for dialog type
     *
     * @return array{icon: string, color: string, bgColor: string}
     */
    public function getIconConfig(): array
    {
        return match ($this->type) {
            'info' => [
                'icon' => '<svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>',
                'color' => 'text-blue-600 dark:text-blue-500',
                'bgColor' => 'bg-blue-100 dark:bg-blue-900',
            ],
            'warning' => [
                'icon' => '<svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>',
                'color' => 'text-yellow-600 dark:text-yellow-500',
                'bgColor' => 'bg-yellow-100 dark:bg-yellow-900',
            ],
            'error' => [
                'icon' => '<svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>',
                'color' => 'text-red-600 dark:text-red-500',
                'bgColor' => 'bg-red-100 dark:bg-red-900',
            ],
            'success' => [
                'icon' => '<svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>',
                'color' => 'text-green-600 dark:text-green-500',
                'bgColor' => 'bg-green-100 dark:bg-green-900',
            ],
            'confirm' => [
                'icon' => '<svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>',
                'color' => 'text-gray-600 dark:text-gray-400',
                'bgColor' => 'bg-gray-100 dark:bg-gray-800',
            ],
        };
    }

    /**
     * Get button color classes for dialog type
     *
     * @return string
     */
    public function getButtonColor(): string
    {
        return match ($this->type) {
            'info' => 'text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
            'warning' => 'text-white bg-yellow-600 hover:bg-yellow-700 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800',
            'error' => 'text-white bg-red-600 hover:bg-red-700 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800',
            'success' => 'text-white bg-green-600 hover:bg-green-700 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800',
            'confirm' => 'text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
        };
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.dialog');
    }
}

