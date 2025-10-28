<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Center Component
 *
 * Centers child elements both horizontally and vertically using flexbox.
 * Useful for centering content within a container or creating centered layouts.
 */
class Center extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $as     HTML element to render (default: 'div')
     * @param bool   $inline Whether to use inline-flex instead of flex
     */
    public function __construct(
        public string $as = 'div',
        public bool $inline = false,
    ) {
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [
            $this->inline ? 'inline-flex' : 'flex',
            'items-center',
            'justify-center',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.center');
    }
}
