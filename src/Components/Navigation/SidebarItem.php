<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * SidebarItem Component
 *
 * Individual navigation link within a Sidebar.
 * Supports icons, badges, and active state highlighting.
 */
class SidebarItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $href   Link URL
     * @param null|string $icon   Optional Iconify icon name
     * @param null|string $badge  Optional badge text (e.g., notification count)
     * @param bool        $active Whether item represents current page (affects styling)
     */
    public function __construct(
        public ?string $href = '#',
        public ?string $icon = null,
        public ?string $badge = null,
        public bool $active = false,
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
            'flex items-center p-2 text-base font-normal rounded-lg',
        ];

        // Active state
        if ($this->active) {
            $classes[] = 'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white';
        } else {
            $classes[] = 'text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700';
        }

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
        return view('flowblade::components.navigation.sidebar-item');
    }
}
