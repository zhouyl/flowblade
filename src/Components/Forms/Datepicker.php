<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Datepicker Component
 *
 * Date picker component with Flowbite JS integration
 */
class Datepicker extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id          Input ID
     * @param string $name        Input name
     * @param string $value       Input value
     * @param string $placeholder Placeholder text
     * @param bool   $autohide    Whether to autohide after selection
     * @param bool   $buttons     Whether to show action buttons
     * @param string $format      Date format (mm/dd/yyyy, dd/mm/yyyy, yyyy-mm-dd, etc.)
     * @param string $minDate     Minimum selectable date
     * @param string $maxDate     Maximum selectable date
     * @param string $orientation Orientation: top, bottom, left, right
     * @param string $title       Datepicker title
     * @param bool   $showIcon    Whether to show calendar icon
     * @param bool   $required    Whether the input is required
     * @param bool   $disabled    Whether the input is disabled
     * @param bool   $readonly    Whether the input is readonly
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $value = '',
        public string $placeholder = 'Select date',
        public bool $autohide = false,
        public bool $buttons = false,
        public string $format = 'mm/dd/yyyy',
        public string $minDate = '',
        public string $maxDate = '',
        public string $orientation = 'bottom',
        public string $title = '',
        public bool $showIcon = true,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'datepicker-'.uniqid();
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
        return view('flowblade::components.forms.datepicker');
    }
}
