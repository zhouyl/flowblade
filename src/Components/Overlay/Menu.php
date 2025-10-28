<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Menu Component
 *
 * Dropdown menu overlay for displaying a list of menu items.
 * Contains MenuItem, MenuHeader, and MenuDivider components.
 */
class Menu extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $placement Menu position: 'top', 'right', 'bottom', 'left', 'top-start', 'top-end', 'right-start', 'right-end', 'bottom-start', 'bottom-end', 'left-start', 'left-end'
     * @param string      $trigger   Activation trigger: 'click', 'hover'
     * @param null|int    $delay     Delay in milliseconds for hover trigger
     * @param null|string $width     Menu width: 'auto', 'xs' (10rem), 'sm' (11rem), 'md' (14rem), 'lg' (16rem), 'xl' (20rem)
     * @param bool        $divided   Whether to display dividers between menu groups
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
