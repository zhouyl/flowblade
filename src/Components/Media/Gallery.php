<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Gallery Component
 *
 * Image gallery container component with responsive grid or masonry layout.
 * Works with GalleryItem components to display image collections.
 */
class Gallery extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $cols          Number of grid columns: '2', '3', '4', '5', '6' (responsive breakpoints supported)
     * @param string $gap           Gap spacing between items: '1', '2', '3', '4', '5', '6', '8' (Tailwind spacing scale)
     * @param string $layout        Layout type: 'grid' (uniform grid), 'masonry' (Pinterest-style layout)
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $cols = '3',
        public string $gap = '4',
        public string $layout = 'grid',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $colsClass = 'grid-cols-'.$this->cols;
        $gapClass = 'gap-'.$this->gap;

        $classes = [
            'grid',
            $colsClass,
            $gapClass,
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
        return view('flowblade::components.media.gallery');
    }
}
