<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Sidebar Component
 *
 * Side navigation component for dashboard and admin layouts
 */
class Sidebar extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $id        Element ID
     * @param null|string $position  Position: left, right
     * @param bool        $fixed     Whether sidebar is fixed
     * @param bool        $offCanvas Whether sidebar is off-canvas (drawer style)
     */
    public function __construct(
        public ?string $id = 'sidebar',
        public ?string $position = 'left',
        public bool $fixed = true,
        public bool $offCanvas = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.sidebar');
    }
}
