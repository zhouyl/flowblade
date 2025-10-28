<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * MegaMenuItem Component
 *
 * Individual item in mega menu
 */
class MegaMenuItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $href        Link URL
     * @param string $icon        Icon name
     * @param string $title       Item title
     * @param string $description Item description
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
