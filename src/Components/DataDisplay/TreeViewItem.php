<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TreeViewItem Component
 *
 * Individual node within a TreeView component.
 * Supports nesting, icons, and expand/collapse states.
 */
class TreeViewItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label       Node label text
     * @param null|string $icon        Optional Iconify icon name
     * @param bool        $expanded    Whether node is expanded by default
     * @param bool        $hasChildren Whether node has child items (shows expand/collapse icon)
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
