<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TreeView Component
 *
 * Tree view component for displaying hierarchical data
 */
class TreeView extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size Size: xs, sm, md, lg, xl
     */
    public function __construct(
        public string $size = 'md'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.tree-view');
    }
}
