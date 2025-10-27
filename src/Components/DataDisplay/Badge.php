<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Badge Component
 *
 * Badge component for displaying status or labels
 */
class Badge extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size    Size: xs, sm, md, lg, xl
     * @param string      $color   Color: primary, secondary, success, warning, danger, info, gray
     * @param string      $variant Variant: solid, subtle, outline
     * @param null|string $icon    Icon name
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'solid',
        public ?string $icon = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.badge');
    }
}
