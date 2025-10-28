<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ListGroup Component
 *
 * Container for displaying a series of items, buttons, or links following Flowbite patterns.
 * Contains ListGroupItem components with consistent styling.
 */
class ListGroup extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $as HTML element type: 'ul' (unordered list) or 'div' (generic container)
     */
    public function __construct(
        public string $as = 'ul'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.list-group');
    }
}
