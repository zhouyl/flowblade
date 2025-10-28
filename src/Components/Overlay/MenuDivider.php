<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * MenuDivider Component
 *
 * Horizontal divider for separating groups of menu items within a Menu.
 * Provides visual separation between related menu sections.
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
