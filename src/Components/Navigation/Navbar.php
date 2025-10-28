<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Navbar Component
 *
 * Responsive navigation bar container with brand, links, and mobile menu support.
 * Contains NavbarBrand, NavbarToggle, NavbarCollapse, and NavbarLink components.
 */
class Navbar extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $variant Visual variant: 'default' (transparent), 'solid' (background color)
     * @param bool        $sticky  Whether navbar sticks to top on scroll
     * @param bool        $border  Whether to display bottom border
     */
    public function __construct(
        public ?string $variant = 'default',
        public bool $sticky = false,
        public bool $border = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.navbar');
    }
}
