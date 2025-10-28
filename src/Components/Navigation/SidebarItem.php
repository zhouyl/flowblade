<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SidebarItem Component
 *
 * Individual navigation link within a Sidebar.
 * Supports icons, badges, and active state highlighting.
 */
class SidebarItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href   Link URL
     * @param null|string $icon   Optional Iconify icon name
     * @param null|string $badge  Optional badge text (e.g., notification count)
     * @param bool        $active Whether item represents current page (affects styling)
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
