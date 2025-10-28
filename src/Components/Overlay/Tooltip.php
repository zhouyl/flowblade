<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Tooltip Component
 *
 * Tooltip component for displaying additional information on hover or click
 */
class Tooltip extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $content   Tooltip content text
     * @param string      $placement Placement: top, right, bottom, left
     * @param string      $trigger   Trigger type: hover, click
     * @param string      $style     Style: dark, light
     * @param bool        $arrow     Whether to show arrow
     * @param null|string $animation Animation duration: 100, 150, 200, 300, 500, 700, 1000
     */
    public function __construct(
        public string $content = '',
        public string $placement = 'top',
        public string $trigger = 'hover',
        public string $style = 'dark',
        public bool $arrow = true,
        public ?string $animation = '300'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.tooltip');
    }
}
