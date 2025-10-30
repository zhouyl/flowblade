<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * MenuHeader Component
 *
 * Header label for menu sections within a Menu.
 * Provides category or group titles for organizing menu items.
 */
class MenuHeader extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     */
    public function __construct(...$styleProps)
    {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'block px-4 py-2 text-sm font-semibold text-gray-900 dark:text-white',
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
        return view('flowblade::components.overlay.menu-header');
    }
}
