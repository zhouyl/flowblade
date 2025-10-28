<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Divider Component
 *
 * Enhanced separator with text/icon support
 */
class Divider extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $orientation Orientation: 'horizontal', 'vertical'
     * @param string $variant     Variant: 'solid', 'dashed', 'dotted'
     * @param string $align       Text alignment: 'left', 'center', 'right'
     * @param string $icon        Icon name (Iconify format)
     * @param string $text        Divider text
     */
    public function __construct(
        public string $orientation = 'horizontal',
        public string $variant = 'solid',
        public string $align = 'center',
        public string $icon = '',
        public string $text = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.divider');
    }
}
