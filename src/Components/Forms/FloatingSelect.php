<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * FloatingSelect Component
 *
 * Material Design style floating label select component
 */
class FloatingSelect extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id         Select ID
     * @param string $name       Select name
     * @param string $label      Label text
     * @param string $value      Selected value
     * @param bool   $required   Whether the select is required
     * @param bool   $disabled   Whether the select is disabled
     * @param string $variant    Variant: default, outlined, filled, standard
     * @param bool   $error      Whether to show error state
     * @param string $helperText Helper text below select
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $label = '',
        public string $value = '',
        public bool $required = false,
        public bool $disabled = false,
        public string $variant = 'default',
        public bool $error = false,
        public string $helperText = ''
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'floating-select-'.uniqid();
        }

        // Use ID as name if name not provided
        if (empty($this->name)) {
            $this->name = $this->id;
        }
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.floating-select');
    }
}
