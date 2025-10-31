<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Progress Component
 *
 * Linear progress bar component for displaying task completion progress.
 * Supports determinate and indeterminate states with multiple visual variants.
 */
class Progress extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param float|int   $value         Current progress value (0-100 by default)
     * @param float|int   $max           Maximum value (default: 100)
     * @param string      $size          Progress bar height: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color         Progress bar color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $variant       Visual variant: 'default' (solid), 'striped' (diagonal stripes), 'animated' (moving stripes)
     * @param bool        $showValue     Whether to display percentage value label
     * @param null|string $label         Optional custom label text (overrides percentage)
     * @param bool        $indeterminate Whether progress is indeterminate (unknown duration)
     */
    public function __construct(
        public int|float $value = 0,
        public int|float $max = 100,
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'default',
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
            'w-full bg-gray-200',
            ComponentHelper::getRoundedClass('full'),
            'dark:bg-gray-700',
            match ($this->size) {
                'xs' => 'h-1',
                'sm' => 'h-2',
                'lg' => 'h-4',
                'xl' => 'h-6',
                default => 'h-3',
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
        return view('flowblade::components.feedback.progress');
    }
}
