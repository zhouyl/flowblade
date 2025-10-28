<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Box Component
 *
 * Flexible layout container with styling options for background, padding, margin,
 * border radius, shadow, and border. Can render as any HTML element.
 */
class Box extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $as      HTML element to render (default: 'div')
     * @param null|string $bg      Background color (primary, secondary, success, warning, danger, info, gray)
     * @param null|string $color   Text color
     * @param null|string $p       Padding using Tailwind spacing scale (0-96)
     * @param null|string $m       Margin using Tailwind spacing scale (0-96)
     * @param null|string $rounded Border radius (none, sm, md, lg, xl, 2xl, 3xl, full)
     * @param null|string $shadow  Shadow size (none, sm, md, lg, xl, 2xl)
     * @param null|string $border  Border color
     */
    public function __construct(
        public ?string $as = 'div',
        public ?string $bg = null,
        public ?string $color = null,
        public ?string $p = null,
        public ?string $m = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $border = null,
    ) {
    }

    /**
     * Get box classes.
     */
    public function classes(): string
    {
        $classes = [];

        if ($this->bg) {
            $classes[] = ComponentHelper::getColorClasses($this->bg, 'bg');
        }

        if ($this->color) {
            $classes[] = ComponentHelper::getColorClasses($this->color, 'text');
        }

        if ($this->p) {
            $classes[] = $this->parseSpacing('p', $this->p);
        }

        if ($this->m) {
            $classes[] = $this->parseSpacing('m', $this->m);
        }

        if ($this->rounded) {
            $classes[] = ComponentHelper::getRoundedClass($this->rounded);
        }

        if ($this->shadow) {
            $classes[] = ComponentHelper::getShadowClass($this->shadow);
        }

        if ($this->border) {
            $classes[] = 'border '.ComponentHelper::getColorClasses($this->border, 'border');
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.box');
    }

    /**
     * Parse spacing values (padding/margin).
     */
    protected function parseSpacing(string $type, string $value): string
    {
        // Support Tailwind spacing scale: 0, 1, 2, 3, 4, 5, 6, 8, 10, 12, 16, 20, 24, etc.
        return "{$type}-{$value}";
    }
}
