<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Table Component
 *
 * Responsive table component for displaying structured tabular data.
 * Supports multiple visual variants and interactive features following Flowbite patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Table extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $size          Table size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $variant       Visual variant: 'simple' (minimal), 'striped' (alternating rows), 'bordered' (with borders)
     * @param bool   $hover         Whether to enable row hover effect
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $variant = 'simple',
        public bool $hover = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'min-w-full',
            'divide-y',
            'divide-gray-200',
        ];

        // Size
        $sizeClasses = [
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
        ];

        if (isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Variant
        if ($this->variant === 'bordered') {
            $classes[] = 'border border-gray-200';
        }

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
        return view('flowblade::components.data-display.table');
    }
}
