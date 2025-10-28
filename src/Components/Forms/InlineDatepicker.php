<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InlineDatepicker Component
 *
 * Always-visible inline calendar picker powered by Flowbite JavaScript.
 * Displays calendar directly in the page without popup.
 */
class InlineDatepicker extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id   Container element ID (auto-generated if empty)
     * @param string $date Default selected date value
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
