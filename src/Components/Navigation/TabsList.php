<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * TabsList Component
 *
 * Container for tab trigger buttons within a Tabs component.
 * Holds TabsTrigger components that control which content panel is visible.
 */
class TabsList extends Component
{
    /**
     * Create a new component instance
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.tabs-list');
    }
}
