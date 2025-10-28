<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Flex Component
 *
 * Flexbox layout container with full control over flex properties.
 * Ideal for creating flexible, responsive layouts in enterprise applications.
 */
class Flex extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as        HTML element to render (default: 'div')
     * @param null|string $direction Flex direction: 'row', 'col', 'row-reverse', 'col-reverse'
     * @param null|string $align     Align items: 'start', 'center', 'end', 'stretch', 'baseline'
     * @param null|string $justify   Justify content: 'start', 'center', 'end', 'between', 'around', 'evenly'
     * @param null|string $wrap      Flex wrap: 'wrap', 'nowrap', 'wrap-reverse'
     * @param null|string $gap       Gap between items using Tailwind spacing scale (0-96)
     * @param bool        $inline    Whether to use inline-flex instead of flex
     */
    public function __construct(
        public string $as = 'div',
        public ?string $direction = null,
        public ?string $align = null,
        public ?string $justify = null,
        public ?string $wrap = null,
        public ?string $gap = null,
        public bool $inline = false,
    ) {
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [
            $this->inline ? 'inline-flex' : 'flex',
        ];

        // Direction
        if ($this->direction) {
            $directionMap = [
                'row' => 'flex-row',
                'col' => 'flex-col',
                'column' => 'flex-col',
                'row-reverse' => 'flex-row-reverse',
                'col-reverse' => 'flex-col-reverse',
                'column-reverse' => 'flex-col-reverse',
            ];

            if (isset($directionMap[$this->direction])) {
                $classes[] = $directionMap[$this->direction];
            }
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

        // Wrap
        if ($this->wrap) {
            $wrapMap = [
                'wrap' => 'flex-wrap',
                'nowrap' => 'flex-nowrap',
                'wrap-reverse' => 'flex-wrap-reverse',
            ];

            if (isset($wrapMap[$this->wrap])) {
                $classes[] = $wrapMap[$this->wrap];
            }
        }

        // Gap
        if ($this->gap) {
            $classes[] = "gap-{$this->gap}";
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.flex');
    }
}
