<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SidebarItem Component
 *
 * Navigation item for sidebar
 */
class SidebarItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href   Link URL
     * @param null|string $icon   Icon name
     * @param null|string $badge  Badge text
     * @param bool        $active Whether item is active
     */
    public function __construct(
        public ?string $href = '#',
        public ?string $icon = null,
        public ?string $badge = null,
        public bool $active = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.sidebar-item');
    }
}
