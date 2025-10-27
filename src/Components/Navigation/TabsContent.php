<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * TabsContent Component
 *
 * Content panel for a tab
 */
class TabsContent extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $value Tab value identifier
     */
    public function __construct(
        public string $value
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.tabs-content');
    }
}
