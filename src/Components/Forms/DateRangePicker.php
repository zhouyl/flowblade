<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * DateRangePicker Component
 *
 * Date range picker component with Flowbite JS integration
 */
class DateRangePicker extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id               Container ID
     * @param string $startId          Start date input ID
     * @param string $endId            End date input ID
     * @param string $startName        Start date input name
     * @param string $endName          End date input name
     * @param string $startValue       Start date value
     * @param string $endValue         End date value
     * @param string $startPlaceholder Start date placeholder
     * @param string $endPlaceholder   End date placeholder
     * @param bool   $showIcon         Whether to show calendar icon
     * @param bool   $required         Whether the inputs are required
     * @param bool   $disabled         Whether the inputs are disabled
     * @param bool   $readonly         Whether the inputs are readonly
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
