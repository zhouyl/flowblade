<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * BreadcrumbItem Component
 *
 * Individual item in breadcrumb navigation
 */
class BreadcrumbItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href    Link URL
     * @param null|string $icon    Icon name
     * @param bool        $current Whether this is the current page
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
