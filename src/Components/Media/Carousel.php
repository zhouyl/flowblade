<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * Carousel Component
 *
 * Image/content carousel component with Flowbite JS integration
 */
class Carousel extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id             Unique identifier for the carousel
     * @param string $mode           Carousel mode: 'static' or 'slide'
     * @param bool   $showControls   Show prev/next controls
     * @param bool   $showIndicators Show slide indicators
     * @param string $height         Height classes
     */
    public function __construct(
        public string $id = '',
        public string $mode = 'slide',
        public bool $showControls = true,
        public bool $showIndicators = false,
        public string $height = 'h-56 md:h-96'
    ) {
        if (empty($this->id)) {
            $this->id = 'carousel-'.uniqid();
        }
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.carousel');
    }
}
