<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TreeViewItem Component
 *
 * Tree view item component for displaying a single node
 */
class TreeViewItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label       Label text
     * @param null|string $icon        Icon name
     * @param bool        $expanded    Is expanded by default
     * @param bool        $hasChildren Has children nodes
     */
    public function __construct(
        public ?string $label = null,
        public ?string $icon = null,
        public bool $expanded = false,
        public bool $hasChildren = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.tree-view-item');
    }
}
