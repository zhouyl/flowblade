<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * GalleryItem Component
 *
 * Individual item component for galleries
 */
class GalleryItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $src Image source URL
     * @param string $alt Image alt text
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
