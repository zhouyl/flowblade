<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * DataListItem Component
 *
 * Individual item within a DataList for displaying a single key-value pair.
 * Supports custom content via slots for label and value.
 */
class DataListItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label Label text (key)
     * @param null|string $value Value text (data)
     */
    public function __construct(
        public ?string $label = null,
        public ?string $value = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.data-list-item');
    }
}
