<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * NavbarCollapse Component
 *
 * Collapsible navigation menu container
 */
class NavbarCollapse extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $id Element ID for collapse target
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
