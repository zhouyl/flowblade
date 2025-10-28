<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Menu Component
 *
 * Dropdown menu component for displaying a list of menu items
 */
class Menu extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $placement Placement: top, right, bottom, left, top-start, top-end, right-start, right-end, bottom-start, bottom-end, left-start, left-end
     * @param string      $trigger   Trigger type: click, hover
     * @param null|int    $delay     Delay in milliseconds for hover trigger
     * @param null|string $width     Width class: auto, xs (10rem), sm (11rem), md (14rem), lg (16rem), xl (20rem)
     * @param bool        $divided   Whether to show dividers between groups
     */
    public function __construct(
        public string $placement = 'bottom',
        public string $trigger = 'click',
        public ?int $delay = 300,
        public ?string $width = 'sm',
        public bool $divided = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.menu');
    }
}
