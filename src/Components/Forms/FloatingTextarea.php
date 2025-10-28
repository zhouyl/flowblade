<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * FloatingTextarea Component
 *
 * Material Design style floating label textarea component
 */
class FloatingTextarea extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id          Textarea ID
     * @param string $name        Textarea name
     * @param string $label       Label text
     * @param string $value       Textarea value
     * @param string $placeholder Placeholder text
     * @param int    $rows        Number of rows
     * @param bool   $required    Whether the textarea is required
     * @param bool   $disabled    Whether the textarea is disabled
     * @param bool   $readonly    Whether the textarea is readonly
     * @param string $variant     Variant: default, outlined, filled, standard
     * @param bool   $error       Whether to show error state
     * @param string $helperText  Helper text below textarea
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $label = '',
        public string $value = '',
        public string $placeholder = ' ',
        public int $rows = 4,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public string $variant = 'default',
        public bool $error = false,
        public string $helperText = ''
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'floating-textarea-'.uniqid();
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
        return view('flowblade::components.forms.floating-textarea');
    }
}
