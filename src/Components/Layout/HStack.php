<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

/**
 * HStack Component
 *
 * Horizontal stack layout - a convenient shortcut for Stack with horizontal direction.
 * Ideal for creating horizontal layouts like navigation bars, button groups, and toolbars.
 */
class HStack extends Stack
{
    /**
     * Create a new component instance
     *
     * @param string      $as      HTML element to render (default: 'div')
     * @param null|string $spacing Spacing between items: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $align   Align items: 'start', 'center', 'end', 'stretch', 'baseline'
     * @param null|string $justify Justify content: 'start', 'center', 'end', 'between', 'around', 'evenly'
     * @param bool        $divider Whether to show vertical dividers between items
     */
    public function __construct(
        string $as = 'div',
        ?string $spacing = null,
        ?string $align = null,
        ?string $justify = null,
        bool $divider = false,
    ) {
        parent::__construct(
            as: $as,
            direction: 'horizontal',
            spacing: $spacing,
            align: $align,
            justify: $justify,
            divider: $divider,
        );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.hstack');
    }
}
