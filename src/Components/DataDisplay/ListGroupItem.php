<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ListItem Component
 *
 * Individual item within a List_ component.
 * Can be rendered as list item, link, or button with active/disabled states.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ListItem extends Component
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
        $itemConfig = ComponentHelper::config('component_colors.list_item', []);

        $baseClasses = [
            'w-full',
            'px-4',
            'py-2',
        ];

        // Border classes
        $borderClasses = [];

        if (!$this->last) {
            $borderClasses[] = 'border-b';
            $borderClasses[] = $itemConfig['border'] ?? 'border-gray-200';
            $borderClasses[] = $itemConfig['dark_border'] ?? 'dark:border-gray-600';
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
                $elementClasses[] = $itemConfig['active_text'] ?? 'text-white';
                $elementClasses[] = $itemConfig['active_bg'] ?? 'bg-blue-700';
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = $itemConfig['active_dark_bg'] ?? 'dark:bg-gray-800';
                $elementClasses[] = $itemConfig['dark_border'] ?? 'dark:border-gray-600';
            } else {
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = $itemConfig['hover_bg'] ?? 'hover:bg-gray-100';
                $elementClasses[] = $itemConfig['hover_text'] ?? 'hover:text-blue-700';
                $elementClasses[] = 'focus:outline-none';
                $elementClasses[] = 'focus:ring-2';
                $elementClasses[] = $itemConfig['focus_ring'] ?? 'focus:ring-blue-700';
                $elementClasses[] = $itemConfig['focus_text'] ?? 'focus:text-blue-700';
                $elementClasses[] = $itemConfig['dark_hover_bg'] ?? 'dark:hover:bg-gray-600';
                $elementClasses[] = $itemConfig['dark_hover_text'] ?? 'dark:hover:text-white';
                $elementClasses[] = $itemConfig['dark_focus_ring'] ?? 'dark:focus:ring-gray-500';
                $elementClasses[] = $itemConfig['dark_focus_text'] ?? 'dark:focus:text-white';
            }
        } else {
            // Button styling
            $elementClasses[] = 'font-medium';
            $elementClasses[] = 'text-left';
            $elementClasses[] = 'rtl:text-right';
            $elementClasses = array_merge($elementClasses, $baseClasses, $borderClasses, $roundingClasses);

            if ($this->active) {
                $elementClasses[] = $itemConfig['active_text'] ?? 'text-white';
                $elementClasses[] = $itemConfig['active_bg'] ?? 'bg-blue-700';
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = 'focus:outline-none';
                $elementClasses[] = $itemConfig['active_dark_bg'] ?? 'dark:bg-gray-800';
                $elementClasses[] = $itemConfig['dark_border'] ?? 'dark:border-gray-600';
            } elseif ($this->disabled) {
                $elementClasses[] = $itemConfig['disabled_bg'] ?? 'bg-gray-100';
                $elementClasses[] = 'cursor-not-allowed';
                $elementClasses[] = $itemConfig['dark_disabled_bg'] ?? 'dark:bg-gray-600';
                $elementClasses[] = $itemConfig['dark_disabled_text'] ?? 'dark:text-gray-400';
            } else {
                $elementClasses[] = 'cursor-pointer';
                $elementClasses[] = $itemConfig['hover_bg'] ?? 'hover:bg-gray-100';
                $elementClasses[] = $itemConfig['hover_text'] ?? 'hover:text-blue-700';
                $elementClasses[] = 'focus:outline-none';
                $elementClasses[] = 'focus:ring-2';
                $elementClasses[] = $itemConfig['focus_ring'] ?? 'focus:ring-blue-700';
                $elementClasses[] = $itemConfig['focus_text'] ?? 'focus:text-blue-700';
                $elementClasses[] = $itemConfig['dark_hover_bg'] ?? 'dark:hover:bg-gray-600';
                $elementClasses[] = $itemConfig['dark_hover_text'] ?? 'dark:hover:text-white';
                $elementClasses[] = $itemConfig['dark_focus_ring'] ?? 'dark:focus:ring-gray-500';
                $elementClasses[] = $itemConfig['dark_focus_text'] ?? 'dark:focus:text-white';
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
