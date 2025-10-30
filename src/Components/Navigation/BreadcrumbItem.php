<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * BreadcrumbItem Component
 *
 * Individual item within a Breadcrumb navigation component.
 * Represents a single page or section in the navigation hierarchy.
 */
class BreadcrumbItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $href    Link URL (null for current/non-clickable item)
     * @param null|string $icon    Optional Iconify icon name
     * @param bool        $current Whether this represents the current page (affects styling and accessibility)
     */
    public function __construct(
        public ?string $href = null,
        public ?string $icon = null,
        public bool $current = false,
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
            'inline-flex items-center',
        ];

        // Current state
        if ($this->current) {
            $classes[] = 'text-gray-500 dark:text-gray-400';
        } else {
            $classes[] = 'text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300';
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
        return view('flowblade::components.navigation.breadcrumb-item');
    }
}
