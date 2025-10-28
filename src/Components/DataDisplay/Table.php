<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Table Component
 *
 * Responsive table component for displaying structured tabular data.
 * Supports multiple visual variants and interactive features following Flowbite patterns.
 */
class Table extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size    Table size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $variant Visual variant: 'simple' (minimal), 'striped' (alternating rows), 'bordered' (with borders)
     * @param bool   $hover   Whether to enable row hover effect
     */
    public function __construct(
        public string $size = 'md',
        public string $variant = 'simple',
        public bool $hover = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.table');
    }
}
