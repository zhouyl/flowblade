<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Navbar Component
 *
 * Responsive navigation bar component with logo, links, and mobile menu
 */
class Navbar extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $variant Variant: default, solid
     * @param bool        $sticky  Whether navbar is sticky
     * @param bool        $border  Whether to show border
     */
    public function __construct(
        public ?string $variant = 'default',
        public bool $sticky = false,
        public bool $border = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.navbar');
    }
}
