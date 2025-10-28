<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Indicator Component
 *
 * Status indicator for online/offline, notifications, and activity states
 */
class Indicator extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $color    Color: 'gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'
     * @param string $size     Size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $position Position: 'top-left', 'top-right', 'bottom-left', 'bottom-right', 'inline'
     * @param bool   $ping     Enable ping animation
     * @param bool   $border   Add white border
     * @param string $label    Accessible label
     */
    public function __construct(
        public string $color = 'gray',
        public string $size = 'md',
        public string $position = 'inline',
        public bool $ping = false,
        public bool $border = false,
        public string $label = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.indicator');
    }
}
