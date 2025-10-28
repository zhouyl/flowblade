<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * TabsContent Component
 *
 * Content panel associated with a tab trigger.
 * Displays when corresponding TabsTrigger is active.
 */
class TabsContent extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $value Unique tab identifier matching TabsTrigger value
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
