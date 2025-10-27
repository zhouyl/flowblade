<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Breadcrumb Component
 *
 * Breadcrumb navigation component for showing page hierarchy
 */
class Breadcrumb extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size      Size: xs, sm, md, lg, xl
     * @param null|string $separator Separator character or icon
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
