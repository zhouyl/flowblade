<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * GalleryItem Component
 *
 * Individual gallery item component for displaying images within a Gallery.
 * Supports lightbox integration and hover effects.
 */
class GalleryItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $src Image source URL
     * @param string $alt Image alt text for accessibility (important for screen readers)
     */
    public function __construct(
        public string $src = '',
        public string $alt = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.gallery-item');
    }
}
