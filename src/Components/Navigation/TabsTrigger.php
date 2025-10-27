<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * TabsTrigger Component
 *
 * Individual tab trigger button
 */
class TabsTrigger extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $value    Tab value identifier
     * @param null|string $icon     Icon name
     * @param bool        $disabled Whether the tab is disabled
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
