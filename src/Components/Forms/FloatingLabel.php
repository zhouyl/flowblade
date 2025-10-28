<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * FloatingLabel Component
 *
 * Material Design style floating label input following Flowbite patterns.
 * Label animates up when input is focused or has value.
 */
class FloatingLabel extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $type        Input type: 'text', 'email', 'password', 'number', 'tel', 'url', 'search', 'date', 'time', 'datetime-local', 'month', 'week', 'color'
     * @param string $id          Input element ID (auto-generated if empty)
     * @param string $name        Input name attribute (defaults to ID if empty)
     * @param string $label       Floating label text
     * @param string $value       Input value
     * @param string $placeholder Placeholder text (space by default for floating effect)
     * @param bool   $required    Whether input is required
     * @param bool   $disabled    Whether input is disabled
     * @param bool   $readonly    Whether input is read-only
     * @param string $variant     Input variant: 'default', 'outlined', 'filled', 'standard'
     * @param string $size        Input size: 'sm', 'md', 'lg'
     * @param bool   $error       Whether to show error state
     * @param string $helperText  Helper text displayed below input
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
