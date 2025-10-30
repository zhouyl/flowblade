<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * MenuItem Component
 *
 * Individual menu item within a Menu component.
 * Supports icons, active state, disabled state, and danger styling.
 */
class MenuItem extends Component
{
    use HasStyleProps;

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
        public bool $danger = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600',
            $this->disabled ? 'opacity-50 cursor-not-allowed' : '',
            $this->active ? 'bg-gray-100 dark:bg-gray-600' : '',
            $this->danger ? 'text-red-600 dark:text-red-400' : '',
        ];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.menu-item');
    }
}
