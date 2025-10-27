<?php

namespace Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Spacer Component
 *
 * A flexible space component that fills available space in flex layouts.
 */
class Spacer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the component classes.
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
