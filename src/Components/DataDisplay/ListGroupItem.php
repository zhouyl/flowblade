<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ListGroupItem Component
 *
 * Individual item within a ListGroup component.
 * Can be rendered as list item, link, or button with active/disabled states.
 */
class ListGroupItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $as       HTML element type: 'li' (list item), 'a' (link), or 'button'
     * @param string $href     Link URL (only used when as='a')
     * @param string $type     Button type attribute (only used when as='button')
     * @param bool   $active   Whether item is in active/selected state
     * @param bool   $disabled Whether item is disabled
     * @param bool   $first    Whether this is the first item (affects border radius)
     * @param bool   $last     Whether this is the last item (affects border radius)
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
