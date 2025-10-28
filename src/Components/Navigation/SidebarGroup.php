<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SidebarGroup Component
 *
 * Collapsible group for sidebar items
 */
class SidebarGroup extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title Title for the group
     * @param null|string $icon  Icon name
     * @param bool        $open  Whether group is open by default
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
