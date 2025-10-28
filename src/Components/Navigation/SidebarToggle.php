<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SidebarToggle Component
 *
 * Toggle button for off-canvas sidebar
 */
class SidebarToggle extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $target Target sidebar element ID
     */
    public function __construct(
        public ?string $target = 'sidebar'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.sidebar-toggle');
    }
}
