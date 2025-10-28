<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Tag Component
 *
 * Removable tag for labels, categories, and filters.
 * Supports icons and optional close button for interactive removal.
 */
class Tag extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size     Tag size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color    Tag color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $variant  Visual variant: 'solid', 'subtle', 'outline'
     * @param null|string $icon     Optional Iconify icon name
     * @param bool        $closable Whether to show close/remove button
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'gray',
        public string $variant = 'subtle',
        public ?string $icon = null,
        public bool $closable = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.tag');
    }
}
