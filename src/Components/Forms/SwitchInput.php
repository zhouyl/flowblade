<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * SwitchInput Component
 *
 * Toggle switch for binary on/off states following Flowbite design patterns.
 * Provides an accessible alternative to checkboxes for boolean values.
 */
class SwitchInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size     Switch size: 'sm', 'md', 'lg'
     * @param string $color    Switch color theme: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'purple', 'teal', 'orange'
     * @param bool   $disabled Whether the switch is disabled
     * @param string $label    Label text displayed next to the switch
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
