<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SidebarGroup Component
 *
 * Collapsible group container for organizing related SidebarItem components.
 * Supports expand/collapse functionality for hierarchical navigation.
 */
class SidebarGroup extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title Group title or label
     * @param null|string $icon  Optional Iconify icon name
     * @param bool        $open  Whether group is expanded by default
     */
    public function __construct(
        public ?string $title = null,
        public ?string $icon = null,
        public bool $open = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.sidebar-group');
    }
}
