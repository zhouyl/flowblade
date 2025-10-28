<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * MenuHeader Component
 *
 * Header label for menu sections within a Menu.
 * Provides category or group titles for organizing menu items.
 */
class MenuHeader extends Component
{
    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.menu-header');
    }
}
