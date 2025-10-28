<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * DataList Component
 *
 * Structured list for displaying key-value pairs or labeled data.
 * Supports horizontal and vertical layouts with optional dividers.
 */
class DataList extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $orientation Layout orientation: 'horizontal' (label-value side by side), 'vertical' (stacked)
     * @param string      $size        List size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param bool        $divider     Whether to show dividers between items
     * @param null|string $labelWidth  Label column width for horizontal layout (e.g., '1/3', '1/4', 'auto')
     */
    public function __construct(
        public string $orientation = 'horizontal',
        public string $size = 'md',
        public bool $divider = false,
        public ?string $labelWidth = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.data-list');
    }
}
