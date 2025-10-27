<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Timeline Component
 *
 * Timeline component for displaying chronological events
 */
class Timeline extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size    Size: xs, sm, md, lg, xl
     * @param string $color   Color: primary, secondary, success, warning, danger, info, gray
     * @param string $variant Variant: solid, outline
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
