<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Drawer Component
 *
 * Off-canvas drawer component for navigation and content
 */
class Drawer extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title         Drawer title (optional)
     * @param string      $placement     Placement: left, right, top, bottom
     * @param null|string $width         Width for left/right drawers: xs (16rem), sm (20rem), md (24rem), lg (28rem), xl (32rem), 2xl (36rem), full
     * @param null|string $height        Height for top/bottom drawers: xs, sm, md, lg, xl, 2xl, full
     * @param bool        $backdrop      Whether to show backdrop
     * @param bool        $bodyScrolling Whether to allow body scrolling when drawer is open
     * @param bool        $showClose     Whether to show close button
     * @param bool        $edge          Whether to enable edge mode (show small part when closed)
     * @param null|string $edgeOffset    Edge offset (e.g., 'bottom-[60px]')
     */
    public function __construct(
        public ?string $title = null,
        public string $placement = 'left',
        public ?string $width = 'md',
        public ?string $height = 'md',
        public bool $backdrop = true,
        public bool $bodyScrolling = false,
        public bool $showClose = true,
        public bool $edge = false,
        public ?string $edgeOffset = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.drawer');
    }
}
