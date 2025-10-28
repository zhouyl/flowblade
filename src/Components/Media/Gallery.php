<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * Gallery Component
 *
 * Image gallery component with grid layout
 */
class Gallery extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $cols   Number of columns (2, 3, 4, 5, 6)
     * @param string $gap    Gap size (1, 2, 3, 4, 5, 6, 8)
     * @param string $layout Layout type (grid or masonry)
     */
    public function __construct(
        public string $cols = '3',
        public string $gap = '4',
        public string $layout = 'grid'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.gallery');
    }
}
