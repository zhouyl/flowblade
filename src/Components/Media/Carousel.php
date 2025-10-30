<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Carousel Component
 *
 * Image and content carousel component with Flowbite JavaScript integration.
 * Supports slide transitions, navigation controls, and indicator dots.
 */
class Carousel extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $id             Unique identifier for the carousel (auto-generated if empty)
     * @param string $mode           Carousel mode: 'static' (fade transition), 'slide' (sliding transition)
     * @param bool   $showControls   Whether to display previous/next navigation controls
     * @param bool   $showIndicators Whether to display slide indicator dots
     * @param string $height         Height Tailwind classes (e.g., 'h-56 md:h-96')
     * @param mixed  ...$styleProps  All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $id = '',
        public string $mode = 'slide',
        public bool $showControls = true,
        public bool $showIndicators = false,
        public string $height = 'h-56 md:h-96',
        ...$styleProps
    ) {
        if (empty($this->id)) {
            $this->id = 'carousel-'.uniqid();
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'relative',
            'w-full',
            $this->height,
        ];

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
        return view('flowblade::components.media.carousel');
    }
}
