<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Datepicker Component
 *
 * Date picker with calendar popup powered by Flowbite JavaScript.
 * Supports date constraints, custom formats, and flexible positioning.
 */
class Datepicker extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $id            Input element ID (auto-generated if empty)
     * @param string $name          Input name attribute (defaults to ID if empty)
     * @param string $value         Selected date value
     * @param string $placeholder   Placeholder text when no date selected
     * @param bool   $autohide      Whether to auto-hide picker after date selection
     * @param bool   $buttons       Whether to show action buttons (Today, Clear)
     * @param string $format        date format: 'mm/dd/yyyy', 'dd/mm/yyyy', 'yyyy-mm-dd', etc
     * @param string $minDate       Minimum selectable date (format: yyyy-mm-dd)
     * @param string $maxDate       Maximum selectable date (format: yyyy-mm-dd)
     * @param string $orientation   Picker popup orientation: 'top', 'bottom', 'left', 'right'
     * @param string $title         Optional title displayed in picker header
     * @param bool   $showIcon      Whether to display calendar icon
     * @param bool   $required      Whether date selection is required
     * @param bool   $disabled      Whether picker is disabled
     * @param bool   $readonly      Whether input is read-only
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
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
        public bool $readonly = false,
        ...$styleProps
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'datepicker-'.uniqid();
        }

        // Use ID as name if name not provided
        if (empty($this->name)) {
            $this->name = $this->id;
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.datepicker');
    }
}
