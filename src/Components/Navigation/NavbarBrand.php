<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarBrand Component
 *
 * Logo and brand name for navbar
 */
class NavbarBrand extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href Link URL
     * @param null|string $logo Logo image URL
     * @param null|string $name Brand name
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
