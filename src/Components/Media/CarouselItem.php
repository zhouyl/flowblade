<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * CarouselItem Component
 *
 * Individual carousel slide item
 */
class CarouselItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param bool   $active   Whether this item is active
     * @param string $duration Animation duration (e.g., '700', '200')
     * @param string $easing   Animation easing (e.g., 'ease-in-out', 'ease-linear')
     */
    public function __construct(
        public bool $active = false,
        public string $duration = '700',
        public string $easing = 'ease-in-out'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.carousel-item');
    }
}
