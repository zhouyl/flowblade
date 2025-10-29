<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Icon Component
 *
 * Iconify icon component for displaying icons from various icon sets.
 * Supports size and color customization with Tailwind CSS classes.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Icon extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $name          Iconify icon name (e.g., 'mdi:home', 'heroicons:user')
     * @param null|string $size          Icon size (CSS value like '1.2em', '24px', or null for default)
     * @param null|string $color         Icon color (Tailwind color name like 'blue', 'red', or null)
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $name,
        public ?string $size = null,
        public ?string $color = null,
        ...$styleProps
    ) {
        $this->size = $size ?? ComponentHelper::config('iconify.default_size', '1.2em');
        $this->setStyleProps($styleProps);
    }

    /**
     * Get icon CSS classes
     *
     * @return string CSS classes for the icon element
     */
    public function classes(): string
    {
        $classes = [
            'inline-block',
        ];

        if ($this->color) {
            $classes[] = ComponentHelper::getColorClasses($this->color, 'text');
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
        return view('flowblade::components.data-display.icon');
    }
}
