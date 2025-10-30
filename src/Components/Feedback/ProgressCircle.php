<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ProgressCircle Component
 *
 * Circular progress indicator component for displaying progress in a radial format.
 * Ideal for compact spaces and dashboard widgets with customizable stroke thickness.
 */
class ProgressCircle extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param float|int   $value         Current progress value (0-100 by default)
     * @param float|int   $max           Maximum value (default: 100)
     * @param string      $size          Circle diameter: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color         Progress stroke color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param int         $thickness     Stroke thickness in pixels (1-10)
     * @param bool        $showValue     Whether to display percentage value in center
     * @param null|string $label         Optional custom label text (overrides percentage)
     * @param bool        $indeterminate Whether progress is indeterminate (spinning animation)
     */
    public function __construct(
        public float|int $value = 0,
        public float|int $max = 100,
        public string $size = 'md',
        public string $color = 'primary',
        public int $thickness = 4,
        public bool $showValue = false,
        public ?string $label = null,
        public bool $indeterminate = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the percentage value
     *
     * @return float Percentage value clamped between 0 and 100
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
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'flex items-center justify-center',
            match ($this->size) {
                'xs' => 'w-12 h-12',
                'sm' => 'w-16 h-16',
                'lg' => 'w-32 h-32',
                'xl' => 'w-40 h-40',
                default => 'w-24 h-24',
            },
        ];

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
        return view('flowblade::components.feedback.progress-circle');
    }
}
