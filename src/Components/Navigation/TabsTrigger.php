<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TabsTrigger Component
 *
 * Individual tab trigger button within a TabsList.
 * Clicking activates the corresponding TabsContent panel.
 */
class TabsTrigger extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $value    Unique tab identifier matching TabsContent value
     * @param null|string $icon     Optional Iconify icon name
     * @param bool        $disabled Whether tab is disabled and non-clickable
     */
    public function __construct(
        public string $value,
        public ?string $icon = null,
        public bool $disabled = false,
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
            'px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:border-gray-300 border-b-2 border-transparent dark:text-gray-400 dark:hover:text-white',
        ];

        // Disabled state
        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed';
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
        return view('flowblade::components.navigation.tabs-trigger');
    }
}
