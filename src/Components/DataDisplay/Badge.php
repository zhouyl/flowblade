<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Badge Component
 *
 * Compact badge for displaying status, labels, or counts.
 * Supports multiple colors, sizes, and visual variants.
 */
class Badge extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size    Badge size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color   Badge color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $variant Visual variant: 'solid', 'subtle', 'outline'
     * @param null|string $icon    Optional Iconify icon name to display
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
