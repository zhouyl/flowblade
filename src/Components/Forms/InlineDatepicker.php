<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InlineDatepicker Component
 *
 * Inline date picker component with Flowbite JS integration
 */
class InlineDatepicker extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id   Container ID
     * @param string $date Default date value
     */
    public function __construct(
        public string $id = '',
        public string $date = ''
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'inline-datepicker-'.uniqid();
        }
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.inline-datepicker');
    }
}
