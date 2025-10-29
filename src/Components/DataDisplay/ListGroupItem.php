<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ListGroupItem Component
 *
 * Individual item within a ListGroup component.
 * Can be rendered as list item, link, or button with active/disabled states.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ListGroupItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $as            HTML element type: 'li' (list item), 'a' (link), or 'button'
     * @param string $href          Link URL (only used when as='a')
     * @param string $type          Button type attribute (only used when as='button')
     * @param bool   $active        Whether item is in active/selected state
     * @param bool   $disabled      Whether item is disabled
     * @param bool   $first         Whether this is the first item (affects border radius)
     * @param bool   $last          Whether this is the last item (affects border radius)
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $as = 'li',
        public string $href = '#',
        public string $type = 'button',
        public bool $active = false,
        public bool $disabled = false,
        public bool $first = false,
        public bool $last = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $baseClasses = [
            'w-full',
            'px-4',
            'py-2',
        ];

        // Border classes
        $borderClasses = [];

        if (!$this->last) {
            $borderClasses[] = 'border-b';
            $borderClasses[] = 'border-gray-200';
            $borderClasses[] = 'dark:border-gray-600';
        }

        // Rounding classes
        $roundingClasses = [];

        if ($this->first) {
            $roundingClasses[] = 'rounded-t-lg';
        } elseif ($this->last) {
            $roundingClasses[] = 'rounded-b-lg';
        }

        // Element-specific classes
        $elementClasses = [];

        if ($this->as === 'li') {
            // List item styling
            $elementClasses = array_merge($baseClasses, $borderClasses, $roundingClasses);
        } elseif ($this->as === 'a') {
            // Link styling
            $elementClasses[] = 'block';
            $elementClasses = array_merge($elementClasses, $baseClasses, $borderClasses, $roundingClasses);

            if ($this->active) {
                $elementClasses[] = 'text-white';
                $elementClasses[] = 'bg-blue-700';
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = 'dark:bg-gray-800';
                $elementClasses[] = 'dark:border-gray-600';
            } else {
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = 'hover:bg-gray-100';
                $elementClasses[] = 'hover:text-blue-700';
                $elementClasses[] = 'focus:outline-none';
                $elementClasses[] = 'focus:ring-2';
                $elementClasses[] = 'focus:ring-blue-700';
                $elementClasses[] = 'focus:text-blue-700';
                $elementClasses[] = 'dark:hover:bg-gray-600';
                $elementClasses[] = 'dark:hover:text-white';
                $elementClasses[] = 'dark:focus:ring-gray-500';
                $elementClasses[] = 'dark:focus:text-white';
            }
        } else {
            // Button styling
            $elementClasses[] = 'font-medium';
            $elementClasses[] = 'text-left';
            $elementClasses[] = 'rtl:text-right';
            $elementClasses = array_merge($elementClasses, $baseClasses, $borderClasses, $roundingClasses);

            if ($this->active) {
                $elementClasses[] = 'text-white';
                $elementClasses[] = 'bg-blue-700';
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = 'focus:outline-none';
                $elementClasses[] = 'dark:bg-gray-800';
                $elementClasses[] = 'dark:border-gray-600';
            } elseif ($this->disabled) {
                $elementClasses[] = 'bg-gray-100';
                $elementClasses[] = 'cursor-not-allowed';
                $elementClasses[] = 'dark:bg-gray-600';
                $elementClasses[] = 'dark:text-gray-400';
            } else {
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = 'hover:bg-gray-100';
                $elementClasses[] = 'hover:text-blue-700';
                $elementClasses[] = 'focus:outline-none';
                $elementClasses[] = 'focus:ring-2';
                $elementClasses[] = 'focus:ring-blue-700';
                $elementClasses[] = 'focus:text-blue-700';
                $elementClasses[] = 'dark:hover:bg-gray-600';
                $elementClasses[] = 'dark:hover:text-white';
                $elementClasses[] = 'dark:focus:ring-gray-500';
                $elementClasses[] = 'dark:focus:text-white';
            }
        }

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $elementClasses[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$elementClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.list-group-item');
    }
}
