<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarCollapse Component
 *
 * Collapsible navigation menu container within a Navbar.
 * Hidden on mobile, toggled by NavbarToggle button.
 */
class NavbarCollapse extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $id Element ID matching NavbarToggle target
     */
    public function __construct(
        public ?string $id = 'navbar-collapse'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.navbar-collapse');
    }
}
