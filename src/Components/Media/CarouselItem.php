<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * CarouselItem Component
 *
 * Individual carousel slide item component for use within a Carousel.
 * Supports custom transition animations and active state.
 */
class CarouselItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param bool   $active        Whether this slide is currently active/visible
     * @param string $duration      Transition animation duration in milliseconds (e.g., '700', '200')
     * @param string $easing        Transition easing function: 'ease-in-out', 'ease-linear', 'ease-in', 'ease-out'
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public bool $active = false,
        public string $duration = '700',
        public string $easing = 'ease-in-out',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.carousel-item');
    }
}
