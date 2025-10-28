<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarToggle Component
 *
 * Hamburger menu button for mobile navigation
 */
class NavbarToggle extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $target Target collapse element ID
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
