<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ListGroup Component
 *
 * Container component for displaying a series of items, buttons or links
 */
class ListGroup extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $as Element type (ul or div)
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
