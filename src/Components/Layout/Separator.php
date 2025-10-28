<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Separator Component
 *
 * Visual separator/divider line for organizing content sections.
 * Supports both horizontal and vertical orientations with customizable styling.
 */
class Separator extends Component
{
    public string $color;

    public string $thickness;

    /**
     * Create a new component instance
     *
     * @param string      $orientation Orientation: 'horizontal', 'vertical'
     * @param null|string $color       Border color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param null|string $thickness   Border thickness: '1', '2', '4', '8'
     * @param null|string $length      Length for vertical separators (Tailwind height value)
     */
    public function __construct(
        public string $orientation = 'horizontal',
        ?string $color = null,
        ?string $thickness = null,
        public ?string $length = null,
    ) {
        $this->color = $color ?? 'gray';
        $this->thickness = $thickness ?? '1';
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [];

        if ($this->orientation === 'vertical') {
            $classes[] = 'inline-block';
            $classes[] = "border-l-{$this->thickness}";

            if ($this->length) {
                $classes[] = "h-{$this->length}";
            } else {
                $classes[] = 'h-full';
            }
        } else {
            $classes[] = 'w-full';
            $classes[] = "border-t-{$this->thickness}";
        }

        // Color
        $colorMap = [
            'primary' => 'border-blue-600',
            'secondary' => 'border-gray-600',
            'success' => 'border-green-600',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-600',
            'info' => 'border-cyan-600',
            'gray' => 'border-gray-200',
        ];

        if (isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.separator');
    }
}
