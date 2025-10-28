<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ColorSwatch Component
 *
 * Color swatch component for displaying color samples
 */
class ColorSwatch extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $color      Color value (hex, rgb, hsl, or named color)
     * @param string      $size       Size: xs, sm, md, lg, xl
     * @param string      $variant    Variant: square, circle
     * @param bool        $withBorder Whether to show border
     * @param bool        $withShadow Whether to show shadow
     * @param null|string $label      Optional label text
     * @param bool        $showValue  Whether to show color value
     * @param bool        $copyable   Whether the color value is copyable
     */
    public function __construct(
        public string $color = '#000000',
        public string $size = 'md',
        public string $variant = 'square',
        public bool $withBorder = true,
        public bool $withShadow = false,
        public ?string $label = null,
        public bool $showValue = false,
        public bool $copyable = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.color-swatch');
    }
}
