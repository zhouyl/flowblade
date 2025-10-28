<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Sidebar Component
 *
 * Side navigation container for dashboard and admin layouts.
 * Contains SidebarItem and SidebarGroup components for hierarchical navigation.
 */
class Sidebar extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $id        Element ID for targeting
     * @param null|string $position  Sidebar position: 'left', 'right'
     * @param bool        $fixed     Whether sidebar is fixed to viewport
     * @param bool        $offCanvas Whether sidebar is off-canvas drawer style (hidden by default, toggleable)
     */
    public function __construct(
        public ?string $id = 'sidebar',
        public ?string $position = 'left',
        public bool $fixed = true,
        public bool $offCanvas = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.sidebar');
    }
}
