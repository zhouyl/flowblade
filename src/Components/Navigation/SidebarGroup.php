<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * SidebarGroup Component
 *
 * Collapsible group container for organizing related SidebarItem components.
 * Supports expand/collapse functionality for hierarchical navigation.
 */
class SidebarGroup extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $title Group title or label
     * @param null|string $icon  Optional Iconify icon name
     * @param bool        $open  Whether group is expanded by default
     */
    public function __construct(
        public ?string $title = null,
        public ?string $icon = null,
        public bool $open = false,
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
            'space-y-2',
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
        return view('flowblade::components.navigation.sidebar-group');
    }
}
