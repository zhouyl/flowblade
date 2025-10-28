<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Slider Component
 *
 * Range slider for selecting a single numeric value.
 * Supports horizontal/vertical orientation and visual customization.
 */
class Slider extends Component
{
    /**
     * Create a new component instance
     *
     * @param float|int   $value       Current selected value
     * @param float|int   $min         Minimum allowed value
     * @param float|int   $max         Maximum allowed value
     * @param float|int   $step        Step increment for value changes
     * @param string      $size        Slider size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color       Slider color theme: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param bool        $disabled    Whether slider is disabled
     * @param bool        $showValue   Whether to display current value
     * @param bool        $showMarks   Whether to show min/max value marks
     * @param null|string $orientation Slider orientation: 'horizontal' or 'vertical'
     */
    public function __construct(
        public float|int $value = 0,
        public float|int $min = 0,
        public float|int $max = 100,
        public float|int $step = 1,
        public string $size = 'md',
        public string $color = 'primary',
        public bool $disabled = false,
        public bool $showValue = false,
        public bool $showMarks = false,
        public ?string $orientation = 'horizontal'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.slider');
    }
}
