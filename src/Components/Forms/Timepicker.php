<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Timepicker Component
 *
 * Time picker component based on HTML5 time input
 */
class Timepicker extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id          Input ID
     * @param string $name        Input name
     * @param string $value       Input value (HH:MM format)
     * @param string $placeholder Placeholder text
     * @param string $min         Minimum time (HH:MM format)
     * @param string $max         Maximum time (HH:MM format)
     * @param string $step        Step interval in seconds
     * @param bool   $showIcon    Whether to show clock icon
     * @param bool   $required    Whether the input is required
     * @param bool   $disabled    Whether the input is disabled
     * @param bool   $readonly    Whether the input is readonly
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $value = '',
        public string $placeholder = '',
        public string $min = '',
        public string $max = '',
        public string $step = '',
        public bool $showIcon = true,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'timepicker-'.uniqid();
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
        return view('flowblade::components.forms.timepicker');
    }
}
