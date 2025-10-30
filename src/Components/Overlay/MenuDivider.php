<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * MenuDivider Component
 *
 * Horizontal divider for separating groups of menu items within a Menu.
 * Provides visual separation between related menu sections.
 */
class MenuDivider extends Component
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
            'my-1 h-px bg-gray-100 dark:bg-gray-600',
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
        return view('flowblade::components.overlay.menu-divider');
    }
}
