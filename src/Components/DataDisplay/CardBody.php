<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * CardBody Component
 *
 * Card body section for displaying the main content area.
 * Provides consistent padding and spacing within a Card component.
 */
class CardBody extends Component
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
        return view('flowblade::components.data-display.card-body');
    }
}
