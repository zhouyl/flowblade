<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ColorSwatch Component
 *
 * Color sample display component for design systems and color pickers.
 * Supports various color formats and optional copy-to-clipboard functionality.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ColorSwatch extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $color         Color value (hex: '#FF0000', rgb: 'rgb(255,0,0)', hsl, or CSS named color)
     * @param string      $size          Swatch size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $variant       Swatch shape: 'square', 'circle'
     * @param bool        $withBorder    Whether to display border around swatch
     * @param bool        $withShadow    Whether to display shadow effect
     * @param null|string $label         Optional descriptive label text
     * @param bool        $showValue     Whether to display color value text
     * @param bool        $copyable      Whether to enable click-to-copy color value
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $color = '#000000',
        public string $size = 'md',
        public string $variant = 'square',
        public bool $withBorder = true,
        public bool $withShadow = false,
        public ?string $label = null,
        public bool $showValue = false,
        public bool $copyable = false,
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
            'flex-col',
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
        return view('flowblade::components.data-display.color-swatch');
    }
}
