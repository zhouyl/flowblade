<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * MegaMenu Component
 *
 * Large dropdown menu with multi-column layout
 */
class MegaMenu extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $trigger Trigger mode: 'click', 'hover'
     * @param string $width   Width: 'sm', 'md', 'lg', 'xl', 'full'
     * @param int    $columns Number of columns: 1-4
     * @param string $id      Unique identifier
     */
    public function __construct(
        public string $trigger = 'hover',
        public string $width = 'full',
        public int $columns = 3,
        public string $id = ''
    ) {
        if (empty($this->id)) {
            $this->id = 'mega-menu-'.uniqid();
        }
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.mega-menu');
    }
}
