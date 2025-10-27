<?php

namespace Flowblade\Components;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class AbsoluteCenter extends Component
{
    public function __construct(
        public string $as = 'div',
        public ?string $axis = null, // both, horizontal, vertical
    ) {}

    public function classes(): string
    {
        $classes = [
            'absolute',
        ];

        // Position based on axis
        if ($this->axis === 'horizontal') {
            $classes[] = 'left-1/2';
            $classes[] = '-translate-x-1/2';
        } elseif ($this->axis === 'vertical') {
            $classes[] = 'top-1/2';
            $classes[] = '-translate-y-1/2';
        } else {
            // both (default)
            $classes[] = 'top-1/2';
            $classes[] = 'left-1/2';
            $classes[] = '-translate-x-1/2';
            $classes[] = '-translate-y-1/2';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.absolute-center');
    }
}

