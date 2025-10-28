<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Switch Component
 *
 * Toggle switch for binary on/off states (Flowbite style)
 */
class SwitchInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size     Size: 'sm', 'md', 'lg'
     * @param string $color    Color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'purple', 'teal', 'orange'
     * @param bool   $disabled Whether the switch is disabled
     * @param string $label    Label text
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public bool $disabled = false,
        public string $label = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.switch');
    }
}
