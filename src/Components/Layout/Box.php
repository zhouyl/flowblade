<?php

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Box extends Component
{
    public ?string $as;
    public ?string $bg;
    public ?string $color;
    public ?string $p;
    public ?string $m;
    public ?string $rounded;
    public ?string $shadow;
    public ?string $border;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?string $as = 'div',
        ?string $bg = null,
        ?string $color = null,
        ?string $p = null,
        ?string $m = null,
        ?string $rounded = null,
        ?string $shadow = null,
        ?string $border = null,
    ) {
        $this->as = $as;
        $this->bg = $bg;
        $this->color = $color;
        $this->p = $p;
        $this->m = $m;
        $this->rounded = $rounded;
        $this->shadow = $shadow;
        $this->border = $border;
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
            $classes[] = 'border ' . ComponentHelper::getColorClasses($this->border, 'border');
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Parse spacing values (padding/margin).
     */
    protected function parseSpacing(string $type, string $value): string
    {
        // Support Tailwind spacing scale: 0, 1, 2, 3, 4, 5, 6, 8, 10, 12, 16, 20, 24, etc.
        return "{$type}-{$value}";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.box');
    }
}

