<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SidebarToggle Component
 *
 * Toggle button for showing/hiding off-canvas Sidebar.
 * Typically used for mobile navigation or collapsible sidebars.
 */
class SidebarToggle extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $target Target Sidebar element ID to toggle
     */
    public function __construct(
        public ?string $target = 'sidebar'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.sidebar-toggle');
    }
}
