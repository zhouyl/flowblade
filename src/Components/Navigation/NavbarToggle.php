<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarToggle Component
 *
 * Hamburger menu button for toggling mobile navigation.
 * Controls visibility of NavbarCollapse component on small screens.
 */
class NavbarToggle extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $target Target NavbarCollapse element ID to toggle
     */
    public function __construct(
        public ?string $target = 'navbar-collapse'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.navbar-toggle');
    }
}
