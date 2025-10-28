<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Card Component
 *
 * Container card for grouping related content with optional header, body, and footer.
 * Supports multiple visual variants and sizes following Flowbite patterns.
 */
class Card extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size    Card size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $variant Visual variant: 'elevated' (shadow), 'outline' (border), 'filled' (background), 'ghost' (minimal)
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
