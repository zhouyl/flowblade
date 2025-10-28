<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarBrand Component
 *
 * Brand logo and name section within a Navbar.
 * Typically positioned on the left side and links to homepage.
 */
class NavbarBrand extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href Link URL (typically homepage)
     * @param null|string $logo Logo image URL
     * @param null|string $name Brand name text
     */
    public function __construct(
        public ?string $href = '#',
        public ?string $logo = null,
        public ?string $name = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.navbar-brand');
    }
}
