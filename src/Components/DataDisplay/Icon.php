<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Icon Component
 *
 * Iconify icon component for displaying icons from various icon sets.
 * Supports size and color customization with Tailwind CSS classes.
 */
class Icon extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $name  Iconify icon name (e.g., 'mdi:home', 'heroicons:user')
     * @param null|string $size  Icon size (CSS value like '1.2em', '24px', or null for default)
     * @param null|string $color Icon color (Tailwind color name like 'blue', 'red', or null)
     */
    public function __construct(
        public string $name,
        public ?string $size = null,
        public ?string $color = null,
    ) {
        $this->size = $size ?? ComponentHelper::config('iconify.default_size', '1.2em');
    }

    /**
     * Get icon CSS classes
     *
     * @return string CSS classes for the icon element
     */
    public function classes(): string
    {
        $classes = 'inline-block';

        if ($this->color) {
            $classes .= ' '.ComponentHelper::getColorClasses($this->color, 'text');
        }

        return $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.data-display.icon');
    }
}
