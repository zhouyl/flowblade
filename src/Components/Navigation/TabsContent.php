<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TabsContent Component
 *
 * Content panel associated with a tab trigger.
 * Displays when corresponding TabsTrigger is active.
 */
class TabsContent extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $value Unique tab identifier matching TabsTrigger value
     */
    public function __construct(
        public string $value,
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
            'p-4 text-gray-700 dark:text-gray-300',
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
        return view('flowblade::components.navigation.tabs-content');
    }
}
