<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * AbsoluteCenter Component
 *
 * Centers child elements using absolute positioning and CSS transforms.
 * Requires parent element to have position: relative.
 */
class AbsoluteCenter extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as   HTML element to render (default: 'div')
     * @param null|string $axis Centering axis: 'both', 'horizontal', 'vertical' (default: 'both')
     */
    public function __construct(
        public string $as = 'div',
        public ?string $axis = null,
    ) {
    }

    /**
     * Get the component classes
     */
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

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.absolute-center');
    }
}
