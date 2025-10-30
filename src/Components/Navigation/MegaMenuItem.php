<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * MegaMenuItem Component
 *
 * Individual navigation link within a MegaMenuColumn.
 * Supports icon, title, and description for rich navigation items.
 */
class MegaMenuItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $href        Link URL
     * @param string $icon        Optional Iconify icon name
     * @param string $title       Item title or label
     * @param string $description Optional item description or subtitle
     */
    public function __construct(
        public string $href = '#',
        public string $icon = '',
        public string $title = '',
        public string $description = '',
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
            'flex items-start p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700',
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
        return view('flowblade::components.navigation.mega-menu-item');
    }
}
