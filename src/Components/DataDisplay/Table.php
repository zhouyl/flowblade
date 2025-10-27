<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Table Component
 *
 * Table component for displaying tabular data
 */
class Table extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size    Size: xs, sm, md, lg, xl
     * @param string $variant Variant: simple, striped, bordered
     * @param bool   $hover   Enable hover effect
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
