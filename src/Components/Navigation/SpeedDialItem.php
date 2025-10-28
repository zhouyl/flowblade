<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SpeedDialItem Component
 *
 * Individual action button within a SpeedDial component.
 * Displays with icon and tooltip when speed dial is expanded.
 */
class SpeedDialItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $icon    Iconify icon name
     * @param string $tooltip Tooltip text describing the action
     * @param string $href    Link URL or action target
     */
    public function __construct(
        public string $icon = '',
        public string $tooltip = '',
        public string $href = '#'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.speed-dial-item');
    }
}
