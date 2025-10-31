<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * NavbarToggle Component
 *
 * Hamburger menu button for toggling mobile navigation.
 * Controls visibility of NavbarCollapse component on small screens.
 */
class NavbarToggle extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $target Target NavbarCollapse element ID to toggle
     */
    public function __construct(
        public ?string $target = 'navbar-collapse',
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
            'inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500',
            ComponentHelper::getRoundedClass('lg'),
            'md:hidden hover:bg-gray-100',
            ComponentHelper::getFocusClasses('input'),
            'focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600',
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
        return view('flowblade::components.navigation.navbar-toggle');
    }
}
