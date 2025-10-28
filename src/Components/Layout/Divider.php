<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Divider Component
 *
 * Enhanced separator component with support for text labels and icons.
 * More feature-rich than Separator, ideal for section breaks with descriptive labels.
 */
class Divider extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $orientation Orientation: 'horizontal', 'vertical'
     * @param string $variant     Border style: 'solid', 'dashed', 'dotted'
     * @param string $align       Text/icon alignment: 'left', 'center', 'right'
     * @param string $icon        Icon name in Iconify format (e.g., 'mdi:star')
     * @param string $text        Divider label text
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
