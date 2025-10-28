<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * MegaMenuColumn Component
 *
 * Column container within a MegaMenu component.
 * Groups related MegaMenuItem components under a common heading.
 */
class MegaMenuColumn extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $title Column heading or category title
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
