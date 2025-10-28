<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SpeedDial Component
 *
 * Floating action button group with expand/collapse animation
 */
class SpeedDial extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $position Position: 'bottom-right', 'bottom-left', 'top-right', 'top-left'
     * @param string $trigger  Trigger mode: 'click', 'hover'
     * @param string $tooltip  Tooltip position: 'left', 'right', 'top', 'bottom'
     * @param string $id       Unique identifier for the speed dial
     */
    public function __construct(
        public string $position = 'bottom-right',
        public string $trigger = 'click',
        public string $tooltip = 'left',
        public string $id = ''
    ) {
        if (empty($this->id)) {
            $this->id = 'speed-dial-'.uniqid();
        }
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.speed-dial');
    }
}
