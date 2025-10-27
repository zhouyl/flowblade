<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Card Component
 *
 * Card component for grouping related content
 */
class Card extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size    Size: xs, sm, md, lg, xl
     * @param string $variant Variant: elevated, outline, filled, ghost
     */
    public function __construct(
        public string $size = 'md',
        public string $variant = 'elevated'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.card');
    }
}
