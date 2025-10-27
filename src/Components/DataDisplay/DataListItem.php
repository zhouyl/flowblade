<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * DataListItem Component
 *
 * Data list item component for displaying a single key-value pair
 */
class DataListItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label Label text
     * @param null|string $value Value text
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
