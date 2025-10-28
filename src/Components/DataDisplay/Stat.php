<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Stat Component
 *
 * Statistics display component for showcasing metrics, KPIs, and data insights.
 * Supports trend indicators, icons, and helper text.
 */
class Stat extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label      Metric label or description
     * @param null|string $value      Primary metric value (number or text)
     * @param null|string $helpText   Additional context or explanation text
     * @param null|string $icon       Optional Iconify icon name
     * @param null|string $trend      Trend direction: 'up' (positive), 'down' (negative), 'neutral'
     * @param null|string $trendValue Trend percentage or change value (e.g., '+12%', '-5')
     */
    public function __construct(
        public ?string $label = null,
        public ?string $value = null,
        public ?string $helpText = null,
        public ?string $icon = null,
        public ?string $trend = null,
        public ?string $trendValue = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.stat');
    }
}
