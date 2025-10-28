<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * FloatingTextarea Component
 *
 * Material Design style floating label textarea following Flowbite patterns.
 * Label animates up when textarea is focused or has value.
 */
class FloatingTextarea extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id          Textarea element ID (auto-generated if empty)
     * @param string $name        Textarea name attribute (defaults to ID if empty)
     * @param string $label       Floating label text
     * @param string $value       Textarea value
     * @param string $placeholder Placeholder text (space by default for floating effect)
     * @param int    $rows        Number of visible text rows
     * @param bool   $required    Whether textarea is required
     * @param bool   $disabled    Whether textarea is disabled
     * @param bool   $readonly    Whether textarea is read-only
     * @param string $variant     Textarea variant: 'default', 'outlined', 'filled', 'standard'
     * @param bool   $error       Whether to show error state
     * @param string $helperText  Helper text displayed below textarea
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
