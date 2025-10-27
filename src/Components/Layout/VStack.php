<?php

namespace Flowblade\Components\Layout;

/**
 * VStack Component
 * 
 * Vertical stack - a shortcut for Stack with vertical direction.
 */
class VStack extends Stack
{
    /**
     * Create a new component instance.
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
            direction: 'vertical',
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
        return view('flowblade::components.vstack');
    }
}

