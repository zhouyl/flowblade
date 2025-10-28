<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * MenuHeader Component
 *
 * Header component for menu sections
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
