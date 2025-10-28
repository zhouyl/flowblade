<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * BreadcrumbItem Component
 *
 * Individual item within a Breadcrumb navigation component.
 * Represents a single page or section in the navigation hierarchy.
 */
class BreadcrumbItem extends Component
{
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
        public bool $current = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.breadcrumb-item');
    }
}
