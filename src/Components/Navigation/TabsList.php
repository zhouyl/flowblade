<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TabsList Component
 *
 * Container for tab trigger buttons within a Tabs component.
 * Holds TabsTrigger components that control which content panel is visible.
 */
class TabsList extends Component
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
            'flex border-b border-gray-200 dark:border-gray-700',
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
        return view('flowblade::components.navigation.tabs-list');
    }
}
