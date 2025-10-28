<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SpeedDialItem Component
 *
 * Individual action button in speed dial
 */
class SpeedDialItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $icon    Icon name
     * @param string $tooltip Tooltip text
     * @param string $href    Link URL
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
