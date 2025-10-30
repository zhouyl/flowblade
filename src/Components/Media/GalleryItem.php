<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * GalleryItem Component
 *
 * Individual gallery item component for displaying images within a Gallery.
 * Supports lightbox integration and hover effects.
 */
class GalleryItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $src           Image source URL
     * @param string $alt           Image alt text for accessibility (important for screen readers)
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $src = '',
        public string $alt = '',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'overflow-hidden',
            'rounded-lg',
            'transition-transform',
            'duration-300',
            'hover:scale-105',
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
        return view('flowblade::components.media.gallery-item');
    }
}
