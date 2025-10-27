<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Progress Component
 *
 * Progress component for displaying progress indicators
 */
class Progress extends Component
{
    /**
     * Create a new component instance
     *
     * @param float|int   $value         Current progress value (0-100)
     * @param float|int   $max           Maximum value (default: 100)
     * @param string      $size          Size: xs, sm, md, lg, xl
     * @param string      $color         Color: primary, secondary, success, warning, danger, info, gray
     * @param string      $variant       Variant: default, striped, animated
     * @param bool        $showValue     Whether to show the value label
     * @param null|string $label         Custom label text
     * @param bool        $indeterminate Whether the progress is indeterminate
     */
    public function __construct(
        public int|float $value = 0,
        public int|float $max = 100,
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'default',
        public bool $showValue = false,
        public ?string $label = null,
        public bool $indeterminate = false
    ) {
    }

    /**
     * Get the percentage value
     */
    public function getPercentage(): float
    {
        if ($this->max <= 0) {
            return 0;
        }

        $percentage = ($this->value / $this->max) * 100;

        return min(100, max(0, $percentage));
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.progress');
    }
}
