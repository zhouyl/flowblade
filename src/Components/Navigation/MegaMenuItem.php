<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * MegaMenuItem Component
 *
 * Individual navigation link within a MegaMenuColumn.
 * Supports icon, title, and description for rich navigation items.
 */
class MegaMenuItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $href        Link URL
     * @param string $icon        Optional Iconify icon name
     * @param string $title       Item title or label
     * @param string $description Optional item description or subtitle
     */
    public function __construct(
        public string $href = '#',
        public string $icon = '',
        public string $title = '',
        public string $description = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.mega-menu-item');
    }
}
