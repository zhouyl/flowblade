<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarLink Component
 *
 * Individual navigation link within a Navbar or NavbarCollapse.
 * Supports active state highlighting for current page.
 */
class NavbarLink extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href   Link URL
     * @param bool        $active Whether link represents current page (affects styling)
     */
    public function __construct(
        public ?string $href = '#',
        public bool $active = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.navbar-link');
    }
}
