<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * MegaMenu Component
 *
 * Large dropdown menu with multi-column layout for complex navigation.
 * Contains MegaMenuColumn components organizing MegaMenuItem components.
 */
class MegaMenu extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $trigger Activation trigger: 'click', 'hover'
     * @param string $width   Menu width: 'sm', 'md', 'lg', 'xl', 'full'
     * @param int    $columns Number of columns in grid layout (1-4)
     * @param string $id      Unique identifier (auto-generated if empty)
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
