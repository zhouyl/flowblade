<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TimelineItem Component
 *
 * Timeline item component for displaying a single event
 */
class TimelineItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title       Title text
     * @param null|string $description Description text
     * @param null|string $time        Time text
     * @param null|string $icon        Icon name
     * @param null|string $color       Color: primary, secondary, success, warning, danger, info, gray
     * @param bool        $isLast      Is last item (no connector line)
     */
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?string $time = null,
        public ?string $icon = null,
        public ?string $color = null,
        public bool $isLast = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.timeline-item');
    }
}
