<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Stack Component
 *
 * Flexbox-based layout component that stacks elements vertically or horizontally
 * with consistent spacing. Supports optional dividers between items.
 */
class Stack extends Component
{
    public string $spacing;

    /**
     * Create a new component instance
     *
     * @param string      $as        HTML element to render (default: 'div')
     * @param string      $direction Stack direction: 'vertical', 'horizontal'
     * @param null|string $spacing   Spacing between items: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $align     Align items: 'start', 'center', 'end', 'stretch', 'baseline'
     * @param null|string $justify   Justify content: 'start', 'center', 'end', 'between', 'around', 'evenly'
     * @param bool        $divider   Whether to show dividers between items
     */
    public function __construct(
        public string $as = 'div',
        public string $direction = 'vertical',
        ?string $spacing = null,
        public ?string $align = null,
        public ?string $justify = null,
        public bool $divider = false,
    ) {
        $this->spacing = $spacing ?? 'md';
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = ['flex'];

        // Direction
        if ($this->direction === 'horizontal') {
            $classes[] = 'flex-row';
        } else {
            $classes[] = 'flex-col';
        }

        // Spacing (using gap)
        $spacingMap = ComponentHelper::config('sizes.spacing', []);

        if (isset($spacingMap[$this->spacing])) {
            $classes[] = "gap-{$spacingMap[$this->spacing]}";
        }

        // Align items
        if ($this->align) {
            $alignMap = [
                'start' => 'items-start',
                'center' => 'items-center',
                'end' => 'items-end',
                'stretch' => 'items-stretch',
                'baseline' => 'items-baseline',
            ];

            if (isset($alignMap[$this->align])) {
                $classes[] = $alignMap[$this->align];
            }
        }

        // Justify content
        if ($this->justify) {
            $justifyMap = [
                'start' => 'justify-start',
                'center' => 'justify-center',
                'end' => 'justify-end',
                'between' => 'justify-between',
                'around' => 'justify-around',
                'evenly' => 'justify-evenly',
            ];

            if (isset($justifyMap[$this->justify])) {
                $classes[] = $justifyMap[$this->justify];
            }
        }

        // Divider
        if ($this->divider) {
            if ($this->direction === 'horizontal') {
                $classes[] = 'divide-x';
            } else {
                $classes[] = 'divide-y';
            }
            $classes[] = 'divide-gray-200';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.stack');
    }
}
