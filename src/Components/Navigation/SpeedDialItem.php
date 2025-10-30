<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * SpeedDialItem Component
 *
 * Individual action button within a SpeedDial component.
 * Displays with icon and tooltip when speed dial is expanded.
 */
class SpeedDialItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $icon    Iconify icon name
     * @param string $tooltip Tooltip text describing the action
     * @param string $href    Link URL or action target
     */
    public function __construct(
        public string $icon = '',
        public string $tooltip = '',
        public string $href = '#',
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
            'flex items-center justify-center text-white bg-blue-700 rounded-full w-12 h-12 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800',
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
        return view('flowblade::components.navigation.speed-dial-item');
    }
}
