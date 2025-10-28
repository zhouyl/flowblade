<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Breadcrumb Component
 *
 * Breadcrumb navigation container for displaying page hierarchy and navigation path.
 * Contains BreadcrumbItem components with customizable separators.
 */
class Breadcrumb extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size      Breadcrumb size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $separator Custom separator character or Iconify icon name (null for default '/')
     */
    public function __construct(
        public string $size = 'md',
        public ?string $separator = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.breadcrumb');
    }
}
