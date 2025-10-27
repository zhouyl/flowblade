<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * RangeSlider Component
 *
 * Range slider component for selecting a range of values
 */
class RangeSlider extends Component
{
    /**
     * Create a new component instance
     *
     * @param float|int   $minValue    Minimum selected value
     * @param float|int   $maxValue    Maximum selected value
     * @param float|int   $min         Minimum allowed value
     * @param float|int   $max         Maximum allowed value
     * @param float|int   $step        Step increment
     * @param string      $size        Size: xs, sm, md, lg, xl
     * @param string      $color       Color: primary, secondary, success, warning, danger, info, gray
     * @param bool        $disabled    Disabled state
     * @param bool        $showValues  Show current values
     * @param bool        $showMarks   Show min/max marks
     * @param null|string $orientation Orientation: horizontal, vertical
     */
    public function __construct(
        public float|int $minValue = 0,
        public float|int $maxValue = 100,
        public float|int $min = 0,
        public float|int $max = 100,
        public float|int $step = 1,
        public string $size = 'md',
        public string $color = 'primary',
        public bool $disabled = false,
        public bool $showValues = false,
        public bool $showMarks = false,
        public ?string $orientation = 'horizontal'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.range-slider');
    }
}
