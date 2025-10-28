<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * CarouselItem Component
 *
 * Individual carousel slide item component for use within a Carousel.
 * Supports custom transition animations and active state.
 */
class CarouselItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param bool   $active   Whether this slide is currently active/visible
     * @param string $duration Transition animation duration in milliseconds (e.g., '700', '200')
     * @param string $easing   Transition easing function: 'ease-in-out', 'ease-linear', 'ease-in', 'ease-out'
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
