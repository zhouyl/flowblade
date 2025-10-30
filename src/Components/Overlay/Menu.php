<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Menu Component
 *
 * Dropdown menu overlay for displaying a list of menu items.
 * Contains MenuItem, MenuHeader, and MenuDivider components.
 */
class Menu extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $placement Menu position: 'top', 'right', 'bottom', 'left', 'top-start', 'top-end', 'right-start', 'right-end', 'bottom-start', 'bottom-end', 'left-start', 'left-end'
     * @param string      $trigger   Activation trigger: 'click', 'hover'
     * @param null|int    $delay     Delay in milliseconds for hover trigger
     * @param null|string $width     Menu width: 'auto', 'xs' (10rem), 'sm' (11rem), 'md' (14rem), 'lg' (16rem), 'xl' (20rem)
     * @param bool        $divided   Whether to display dividers between menu groups
     */
    public function __construct(
        public string $placement = 'bottom',
        public string $trigger = 'click',
        public ?int $delay = 300,
        public ?string $width = 'sm',
        public bool $divided = false,
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
            'absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600',
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
        return view('flowblade::components.overlay.menu');
    }
}
