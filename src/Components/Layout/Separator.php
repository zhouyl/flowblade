<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Separator Component
 *
 * Visual separator/divider line for organizing content sections.
 * Supports both horizontal and vertical orientations with customizable styling.
 */
class Separator extends Component
{
    use HasStyleProps;

    public string $color;

    public string $thickness;

    /**
     * Create a new component instance
     *
     * @param string      $orientation   Orientation: 'horizontal', 'vertical'
     * @param null|string $color         Border color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param null|string $thickness     Border thickness: '1', '2', '4', '8'
     * @param null|string $length        Length for vertical separators (Tailwind height value)
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $orientation = 'horizontal',
        ?string $color = null,
        ?string $thickness = null,
        public ?string $length = null,
        ...$styleProps
    ) {
        $this->color = $color ?? 'gray';
        $this->thickness = $thickness ?? '1';
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [];

        if ($this->orientation === 'vertical') {
            $classes[] = 'inline-block';
            $classes[] = "border-l-{$this->thickness}";

            if ($this->length) {
                $classes[] = "h-{$this->length}";
            } else {
                $classes[] = 'h-full';
            }
        } else {
            $classes[] = 'w-full';
            $classes[] = "border-t-{$this->thickness}";
        }

        // Color
        $colorClasses = ComponentHelper::config("component_colors.separator.{$this->color}");

        if ($colorClasses) {
            $classes[] = $colorClasses;
        }

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.separator');
    }
}
