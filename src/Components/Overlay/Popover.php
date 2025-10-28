<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Popover Component
 *
 * Popover component for displaying rich content in a popup box
 */
class Popover extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title     Popover title (optional)
     * @param null|string $content   Popover content text (optional, use slot for rich content)
     * @param string      $placement Placement: top, right, bottom, left
     * @param string      $trigger   Trigger type: hover, click
     * @param bool        $arrow     Whether to show arrow
     * @param null|string $animation Animation duration: 100, 150, 200, 300, 500, 700, 1000
     * @param null|int    $offset    Offset distance from trigger element
     * @param null|string $width     Width class: sm (16rem), md (20rem), lg (24rem), xl (28rem), 2xl (32rem)
     */
    public function __construct(
        public ?string $title = null,
        public ?string $content = null,
        public string $placement = 'top',
        public string $trigger = 'hover',
        public bool $arrow = true,
        public ?string $animation = '300',
        public ?int $offset = null,
        public ?string $width = 'md'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.popover');
    }
}
