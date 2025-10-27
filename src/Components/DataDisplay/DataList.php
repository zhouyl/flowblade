<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * DataList Component
 *
 * Data list component for displaying key-value pairs
 */
class DataList extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $orientation Orientation: horizontal, vertical
     * @param string      $size        Size: xs, sm, md, lg, xl
     * @param bool        $divider     Show divider between items
     * @param null|string $labelWidth  Label width (e.g., '1/3', '1/4', 'auto')
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
