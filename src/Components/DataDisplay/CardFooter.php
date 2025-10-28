<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * CardFooter Component
 *
 * Card footer section for displaying actions, links, or additional information.
 * Typically used as the last child of a Card component.
 */
class CardFooter extends Component
{
    /**
     * Create a new component instance
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.card-footer');
    }
}
