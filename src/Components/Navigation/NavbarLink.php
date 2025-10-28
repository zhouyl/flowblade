<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarLink Component
 *
 * Navigation link item for navbar
 */
class NavbarLink extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href   Link URL
     * @param bool        $active Whether link is active
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
