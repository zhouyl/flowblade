<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

/**
 * HStack Component
 *
 * Horizontal stack layout - a convenient shortcut for Stack with horizontal direction.
 * Ideal for creating horizontal layouts like navigation bars, button groups, and toolbars.
 *
 * @see \Flowblade\Traits\HasStyleProps For all available style props
 */
class HStack extends Stack
{
    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string      $as            HTML element to render (default: 'div')
     * @param null|string $spacing       Spacing between items: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param bool        $divider       Whether to show vertical dividers between items
     * @param mixed       ...$styleProps Style props including:
     *                                   - align: Align items ('start', 'center', 'end', 'stretch', 'baseline')
     *                                   - justify: Justify content ('start', 'center', 'end', 'between', 'around', 'evenly')
     *                                   - And all other style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        string $as = 'div',
        ?string $spacing = null,
        bool $divider = false,
        ...$styleProps
    ) {
        parent::__construct(
            $as,
            'horizontal',
            $spacing,
            $divider,
            ...$styleProps
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
