<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TreeView Component
 *
 * Hierarchical tree structure container for displaying nested data.
 * Contains TreeViewItem components with expand/collapse functionality.
 */
class TreeView extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size Tree view size: 'xs', 'sm', 'md', 'lg', 'xl'
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
