<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Tooltip Component
 *
 * Tooltip overlay for displaying brief additional information on hover or click.
 * Uses Flowbite's tooltip JavaScript for positioning and animation.
 */
class Tooltip extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $content   Tooltip text content
     * @param string      $placement Tooltip position: 'top', 'right', 'bottom', 'left'
     * @param string      $trigger   Activation trigger: 'hover', 'click'
     * @param string      $style     Visual style: 'dark', 'light'
     * @param bool        $arrow     Whether to display arrow pointer
     * @param null|string $animation Animation duration in milliseconds: '100', '150', '200', '300', '500', '700', '1000'
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
