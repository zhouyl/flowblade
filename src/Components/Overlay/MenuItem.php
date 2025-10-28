<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * MenuItem Component
 *
 * Menu item component for dropdown menus
 */
class MenuItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href     Link URL (optional)
     * @param null|string $icon     Icon name (optional)
     * @param bool        $disabled Whether the item is disabled
     * @param bool        $active   Whether the item is active
     * @param bool        $danger   Whether to use danger styling
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
