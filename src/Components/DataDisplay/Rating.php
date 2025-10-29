<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Rating Component
 *
 * Star rating component for displaying or collecting user ratings.
 * Supports read-only display and interactive input modes.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Rating extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param float       $value         Current rating value (0 to max)
     * @param int         $max           Maximum rating value (typically 5)
     * @param string      $size          Star size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color         Star color: 'yellow', 'red', 'orange', 'green', 'blue', 'purple', 'pink', 'gray'
     * @param bool        $readonly      Whether rating is read-only (display) or interactive (input)
     * @param bool        $showValue     Whether to display numeric value alongside stars
     * @param null|string $name          Form input name for interactive ratings
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public float $value = 0,
        public int $max = 5,
        public string $size = 'md',
        public string $color = 'yellow',
        public bool $readonly = true,
        public bool $showValue = false,
        public ?string $name = null,
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
            'inline-flex',
            'items-center',
            'gap-2',
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
        return view('flowblade::components.data-display.rating');
    }
}
