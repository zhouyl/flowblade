<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * TabsTrigger Component
 *
 * Individual tab trigger button within a TabsList.
 * Clicking activates the corresponding TabsContent panel.
 */
class TabsTrigger extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $value    Unique tab identifier matching TabsContent value
     * @param null|string $icon     Optional Iconify icon name
     * @param bool        $disabled Whether tab is disabled and non-clickable
     */
    public function __construct(
        public string $value,
        public ?string $icon = null,
        public bool $disabled = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.tabs-trigger');
    }
}
