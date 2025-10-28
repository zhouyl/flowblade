<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Group Component
 *
 * Wrapper component that applies Tailwind's 'group' class for group-hover and group-focus states.
 * Enables child elements to respond to parent hover/focus states.
 */
class Group extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $as HTML element to render (default: 'div')
     */
    public function __construct(
        public string $as = 'div',
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        return 'group';
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.group');
    }
}
