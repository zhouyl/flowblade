<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * NavbarLink Component
 *
 * Individual navigation link within a Navbar or NavbarCollapse.
 * Supports active state highlighting for current page.
 */
class NavbarLink extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $href   Link URL
     * @param bool        $active Whether link represents current page (affects styling)
     */
    public function __construct(
        public ?string $href = '#',
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
            'block py-2 px-3 rounded',
        ];

        // Active state
        if ($this->active) {
            $classes[] = 'md:p-0 text-white bg-blue-700 md:bg-transparent md:text-blue-700 dark:text-white md:dark:text-blue-500';
        } else {
            $classes[] = 'md:p-0 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700';
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
        return view('flowblade::components.navigation.navbar-link');
    }
}
