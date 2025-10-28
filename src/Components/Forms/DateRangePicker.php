<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * DateRangePicker Component
 *
 * Date range picker with start and end date inputs powered by Flowbite JavaScript.
 * Ideal for filtering data by date ranges or booking systems.
 */
class DateRangePicker extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id               Container element ID (auto-generated if empty)
     * @param string $startId          Start date input ID (auto-generated if empty)
     * @param string $endId            End date input ID (auto-generated if empty)
     * @param string $startName        Start date input name attribute
     * @param string $endName          End date input name attribute
     * @param string $startValue       Selected start date value
     * @param string $endValue         Selected end date value
     * @param string $startPlaceholder Placeholder for start date input
     * @param string $endPlaceholder   Placeholder for end date input
     * @param bool   $showIcon         Whether to display calendar icons
     * @param bool   $required         Whether both dates are required
     * @param bool   $disabled         Whether both inputs are disabled
     * @param bool   $readonly         Whether both inputs are read-only
     */
    public function __construct(
        public string $id = '',
        public string $startId = '',
        public string $endId = '',
        public string $startName = 'start',
        public string $endName = 'end',
        public string $startValue = '',
        public string $endValue = '',
        public string $startPlaceholder = 'Select date start',
        public string $endPlaceholder = 'Select date end',
        public bool $showIcon = true,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false
    ) {
        // Generate IDs if not provided
        if (empty($this->id)) {
            $this->id = 'date-range-picker-'.uniqid();
        }

        if (empty($this->startId)) {
            $this->startId = $this->id.'-start';
        }

        if (empty($this->endId)) {
            $this->endId = $this->id.'-end';
        }
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.date-range-picker');
    }
}
