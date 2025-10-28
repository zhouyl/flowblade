<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Rating Component
 *
 * Rating component for displaying and collecting star ratings
 */
class Rating extends Component
{
    /**
     * Create a new component instance
     *
     * @param float       $value     Current rating value (0-max)
     * @param int         $max       Maximum rating value
     * @param string      $size      Size: xs, sm, md, lg, xl
     * @param string      $color     Color: yellow, red, orange, green, blue, purple, pink, gray
     * @param bool        $readonly  Whether the rating is readonly
     * @param bool        $showValue Whether to show the numeric value
     * @param null|string $name      Form input name (for interactive ratings)
     */
    public function __construct(
        public float $value = 0,
        public int $max = 5,
        public string $size = 'md',
        public string $color = 'yellow',
        public bool $readonly = true,
        public bool $showValue = false,
        public ?string $name = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.rating');
    }
}
