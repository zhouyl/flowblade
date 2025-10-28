<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * SpeedDial Component
 *
 * Floating action button group with expand/collapse animation.
 * Contains SpeedDialItem components for quick access to common actions.
 */
class SpeedDial extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $position Screen position: 'bottom-right', 'bottom-left', 'top-right', 'top-left'
     * @param string $trigger  Activation trigger: 'click', 'hover'
     * @param string $tooltip  Tooltip position for items: 'left', 'right', 'top', 'bottom'
     * @param string $id       Unique identifier (auto-generated if empty)
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
