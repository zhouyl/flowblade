<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Indicator Component
 *
 * Status indicator dot for displaying online/offline, notifications, and activity states.
 * Supports positioning relative to parent elements and optional ping animation.
 */
class Indicator extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $color    Indicator color: 'gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'
     * @param string $size     Indicator size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $position Positioning: 'top-left', 'top-right', 'bottom-left', 'bottom-right', 'inline'
     * @param bool   $ping     Whether to enable pulsing ping animation
     * @param bool   $border   Whether to add white border around indicator
     * @param string $label    Accessible label for screen readers
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
