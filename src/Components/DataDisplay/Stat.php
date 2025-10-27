<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Stat Component
 *
 * Stat component for displaying statistics and metrics
 */
class Stat extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label      Label text
     * @param null|string $value      Value text
     * @param null|string $helpText   Help text
     * @param null|string $icon       Icon name
     * @param null|string $trend      Trend: up, down, neutral
     * @param null|string $trendValue Trend value text
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
