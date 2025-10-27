<?php

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Flex Component
 *
 * A flexible box layout component.
 */
class Flex extends Component
{
    public string $as;

    public ?string $direction;

    public ?string $align;

    public ?string $justify;

    public ?string $wrap;

    public ?string $gap;

    public bool $inline;

    /**
     * Create a new component instance.
     *
     * @param string      $as        HTML element to render
     * @param null|string $direction Flex direction (row, col, row-reverse, col-reverse)
     * @param null|string $align     Align items (start, center, end, stretch, baseline)
     * @param null|string $justify   Justify content (start, center, end, between, around, evenly)
     * @param null|string $wrap      Flex wrap (wrap, nowrap, wrap-reverse)
     * @param null|string $gap       Gap between items (0-16)
     * @param bool        $inline    Whether to use inline-flex
     */
    public function __construct(
        string $as = 'div',
        ?string $direction = null,
        ?string $align = null,
        ?string $justify = null,
        ?string $wrap = null,
        ?string $gap = null,
        bool $inline = false,
    ) {
        $this->as = $as;
        $this->direction = $direction;
        $this->align = $align;
        $this->justify = $justify;
        $this->wrap = $wrap;
        $this->gap = $gap;
        $this->inline = $inline;
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
