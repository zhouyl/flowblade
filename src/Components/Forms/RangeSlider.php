<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * RangeSlider Component
 *
 * Dual-handle range slider for selecting a numeric range (min-max values).
 * Supports horizontal/vertical orientation and visual customization.
 */
class RangeSlider extends Component
{
    /**
     * Create a new component instance
     *
     * @param float|int   $minValue    Current minimum selected value
     * @param float|int   $maxValue    Current maximum selected value
     * @param float|int   $min         Minimum allowed value for range
     * @param float|int   $max         Maximum allowed value for range
     * @param float|int   $step        Step increment for value changes
     * @param string      $size        Slider size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color       Slider color theme: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param bool        $disabled    Whether slider is disabled
     * @param bool        $showValues  Whether to display current min/max values
     * @param bool        $showMarks   Whether to show min/max value marks
     * @param null|string $orientation Slider orientation: 'horizontal' or 'vertical'
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
