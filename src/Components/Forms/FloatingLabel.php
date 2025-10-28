<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * FloatingLabel Component
 *
 * Material Design style floating label input component
 */
class FloatingLabel extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $type        Input type: text, email, password, number, tel, url, search, date, time, datetime-local, month, week, color
     * @param string $id          Input ID
     * @param string $name        Input name
     * @param string $label       Label text
     * @param string $value       Input value
     * @param string $placeholder Placeholder text
     * @param bool   $required    Whether the input is required
     * @param bool   $disabled    Whether the input is disabled
     * @param bool   $readonly    Whether the input is readonly
     * @param string $variant     Variant: default, outlined, filled, standard
     * @param string $size        Size: sm, md, lg
     * @param bool   $error       Whether to show error state
     * @param string $helperText  Helper text below input
     */
    public function __construct(
        public string $type = 'text',
        public string $id = '',
        public string $name = '',
        public string $label = '',
        public string $value = '',
        public string $placeholder = ' ',
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public string $variant = 'default',
        public string $size = 'md',
        public bool $error = false,
        public string $helperText = ''
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'floating-'.uniqid();
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
        return view('flowblade::components.forms.floating-label');
    }
}
