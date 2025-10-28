<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * MenuItem Component
 *
 * Individual menu item within a Menu component.
 * Supports icons, active state, disabled state, and danger styling.
 */
class MenuItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href     Optional link URL
     * @param null|string $icon     Optional Iconify icon name
     * @param bool        $disabled Whether item is disabled and non-clickable
     * @param bool        $active   Whether item represents current selection (affects styling)
     * @param bool        $danger   Whether to use danger/destructive styling (e.g., delete actions)
     */
    public function __construct(
        public ?string $href = null,
        public ?string $icon = null,
        public bool $disabled = false,
        public bool $active = false,
        public bool $danger = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.menu-item');
    }
}
