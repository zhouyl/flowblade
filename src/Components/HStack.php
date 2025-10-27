<?php

namespace Flowblade\Components;

/**
 * HStack Component
 * 
 * Horizontal stack - a shortcut for Stack with horizontal direction.
 */
class HStack extends Stack
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

