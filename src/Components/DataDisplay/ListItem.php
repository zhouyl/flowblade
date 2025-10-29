<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ListItem Component
 *
 * Flexible list item component for displaying content in lists.
 * Supports icons, badges, and custom content with consistent styling.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ListItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $icon          Optional icon name (Iconify format)
     * @param null|string $badge         Optional badge text or component
     * @param null|string $badgeColor    Badge color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info'
     * @param bool        $active        Whether the list item is active
     * @param bool        $disabled      Whether the list item is disabled
     * @param null|string $href          Optional link URL
     * @param bool        $divider       Whether to show a divider below the item
     * @param null|string $size          Item size: 'sm', 'md', 'lg'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $icon = null,
        public ?string $badge = null,
        public ?string $badgeColor = 'primary',
        public bool $active = false,
        public bool $disabled = false,
        public ?string $href = null,
        public bool $divider = true,
        public ?string $size = 'md',
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
            'items-center',
            'gap-3',
            'transition-colors',
            'duration-200',
        ];

        // Size
        $sizeClasses = [
            'sm' => 'px-3 py-2 text-sm',
            'md' => 'px-4 py-3 text-base',
            'lg' => 'px-4 py-4 text-lg',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Active state
        if ($this->active) {
            $classes[] = 'bg-blue-50 text-blue-700 font-medium';
        } else {
            $classes[] = 'hover:bg-gray-50';
        }

        // Disabled state
        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed';
        } else {
            $classes[] = 'cursor-pointer';
        }

        // Divider
        if ($this->divider) {
            $classes[] = 'border-b border-gray-200';
        }

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
        return view('flowblade::components.data-display.list-item');
    }
}
