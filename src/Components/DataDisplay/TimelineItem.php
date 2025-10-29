<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TimelineItem Component
 *
 * Individual event item within a Timeline component.
 * Displays event details with optional icon, timestamp, and custom content.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class TimelineItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $title         Event title or heading
     * @param null|string $description   Event description or details
     * @param null|string $time          Timestamp or date text
     * @param null|string $icon          Optional Iconify icon name for marker
     * @param null|string $color         Item color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param bool        $isLast        Whether this is the last item (hides connector line)
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?string $time = null,
        public ?string $icon = null,
        public ?string $color = null,
        public bool $isLast = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'relative',
            'flex',
            'gap-4',
            'pb-8',
        ];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.timeline-item');
    }
}
