<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Stat Component
 *
 * Statistics display component for showcasing metrics, KPIs, and data insights.
 * Supports trend indicators, icons, and helper text.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Stat extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $label         Metric label or description
     * @param null|string $value         Primary metric value (number or text)
     * @param null|string $helpText      Additional context or explanation text
     * @param null|string $icon          Optional Iconify icon name
     * @param null|string $trend         Trend direction: 'up' (positive), 'down' (negative), 'neutral'
     * @param null|string $trendValue    Trend percentage or change value (e.g., '+12%', '-5')
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $label = null,
        public ?string $value = null,
        public ?string $helpText = null,
        public ?string $icon = null,
        public ?string $trend = null,
        public ?string $trendValue = null,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'flex',
            'flex-col',
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
        return view('flowblade::components.data-display.stat');
    }
}
