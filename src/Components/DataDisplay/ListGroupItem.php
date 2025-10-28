<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ListGroupItem Component
 *
 * Individual item component for list groups
 */
class ListGroupItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $as       Element type (li, a, or button)
     * @param string $href     Link URL (only for 'a' type)
     * @param string $type     Button type (only for 'button' type)
     * @param bool   $active   Whether the item is active
     * @param bool   $disabled Whether the item is disabled
     * @param bool   $first    Whether this is the first item
     * @param bool   $last     Whether this is the last item
     */
    public function __construct(
        public string $as = 'li',
        public string $href = '#',
        public string $type = 'button',
        public bool $active = false,
        public bool $disabled = false,
        public bool $first = false,
        public bool $last = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.list-group-item');
    }
}
