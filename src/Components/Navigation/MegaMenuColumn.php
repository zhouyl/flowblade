<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * MegaMenuColumn Component
 *
 * Column in mega menu
 */
class MegaMenuColumn extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $title Column title
     */
    public function __construct(
        public string $title = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.mega-menu-column');
    }
}
