<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Spacer Component
 *
 * Flexible space component that automatically fills available space in flex layouts.
 * Useful for pushing elements to opposite ends of a container.
 */
class Spacer extends Component
{
    /**
     * Create a new component instance
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        return 'flex-1';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.spacer');
    }
}
