<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Timeline Component
 *
 * Vertical timeline container for displaying chronological events or activities.
 * Contains TimelineItem components connected by a visual line.
 */
class Timeline extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size    Timeline size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $color   Timeline color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string $variant Visual variant: 'solid' (filled markers), 'outline' (hollow markers)
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'solid'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.timeline');
    }
}
