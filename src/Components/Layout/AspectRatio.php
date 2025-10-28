<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * AspectRatio Component
 *
 * Container that maintains a specific aspect ratio for its content.
 * Perfect for responsive images, videos, and embedded content.
 */
class AspectRatio extends Component
{
    /**
     * Create a new component instance
     *
     * @param float|string $ratio Aspect ratio: '16/9', '4/3', '1/1', 'square', 'video', or numeric (e.g., 1.5)
     */
    public function __construct(
        public string|float $ratio = '16/9',
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = ['relative', 'w-full'];

        // Map common ratios to Tailwind classes
        $ratioMap = [
            '1/1' => 'aspect-square',
            'square' => 'aspect-square',
            '16/9' => 'aspect-video',
            'video' => 'aspect-video',
            '4/3' => 'aspect-4/3',
            '21/9' => 'aspect-21/9',
        ];

        $ratioKey = is_string($this->ratio) ? $this->ratio : null;

        if ($ratioKey && isset($ratioMap[$ratioKey])) {
            $classes[] = $ratioMap[$ratioKey];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get inline styles for custom aspect ratios
     */
    public function styles(): ?string
    {
        // If ratio is not a predefined Tailwind class, use custom padding-bottom
        $ratioMap = [
            '1/1' => null,
            'square' => null,
            '16/9' => null,
            'video' => null,
            '4/3' => null,
            '21/9' => null,
        ];

        $ratioKey = is_string($this->ratio) ? $this->ratio : null;

        if ($ratioKey && isset($ratioMap[$ratioKey])) {
            return null;
        }

        // Calculate padding-bottom percentage for custom ratios
        if (is_numeric($this->ratio)) {
            $percentage = (1 / (float) ($this->ratio)) * 100;

            return "padding-bottom: {$percentage}%;";
        }

        // Handle ratio strings like "3/2"
        if (is_string($this->ratio) && str_contains($this->ratio, '/')) {
            [$width, $height] = explode('/', $this->ratio);
            $percentage = ((float) $height / (float) $width) * 100;

            return "padding-bottom: {$percentage}%;";
        }

        return null;
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.aspect-ratio');
    }
}
