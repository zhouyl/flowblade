<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Sidebar Component
 *
 * Side navigation container for dashboard and admin layouts.
 * Contains SidebarItem and SidebarGroup components for hierarchical navigation.
 */
class Sidebar extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $id        Element ID for targeting
     * @param null|string $position  Sidebar position: 'left', 'right'
     * @param bool        $fixed     Whether sidebar is fixed to viewport
     * @param bool        $offCanvas Whether sidebar is off-canvas drawer style (hidden by default, toggleable)
     */
    public function __construct(
        public ?string $id = 'sidebar',
        public ?string $position = 'left',
        public bool $fixed = true,
        public bool $offCanvas = false,
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
            'bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700',
        ];

        // Position classes
        if ($this->fixed) {
            $classes[] = 'fixed top-0 h-screen overflow-y-auto';
            $classes[] = $this->position === 'right' ? 'right-0' : 'left-0';
        }

        // Off-canvas classes
        if ($this->offCanvas) {
            $classes[] = 'transform transition-transform duration-300 -translate-x-full';
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
        return view('flowblade::components.navigation.sidebar');
    }
}
