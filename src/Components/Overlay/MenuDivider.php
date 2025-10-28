<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * MenuDivider Component
 *
 * Divider component for separating menu items
 */
class MenuDivider extends Component
{
    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.menu-divider');
    }
}
