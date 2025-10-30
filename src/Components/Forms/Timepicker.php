<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Timepicker Component
 *
 * Time picker based on HTML5 time input with optional clock icon.
 * Supports time constraints and step intervals.
 */
class Timepicker extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $id            Input element ID (auto-generated if empty)
     * @param string $name          Input name attribute (defaults to ID if empty)
     * @param string $value         Selected time value in HH:MM format (24-hour)
     * @param string $placeholder   Placeholder text when no time selected
     * @param string $min           Minimum selectable time in HH:MM format
     * @param string $max           Maximum selectable time in HH:MM format
     * @param string $step          Step interval in seconds (e.g., '60' for 1-minute steps)
     * @param bool   $showIcon      Whether to display clock icon
     * @param bool   $required      Whether time selection is required
     * @param bool   $disabled      Whether picker is disabled
     * @param bool   $readonly      Whether input is read-only
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
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
        public bool $readonly = false,
        ...$styleProps
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'timepicker-'.uniqid();
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
        return view('flowblade::components.forms.timepicker');
    }
}
