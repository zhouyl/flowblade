<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Badge Component
 *
 * Compact badge for displaying status, labels, or counts.
 * Supports multiple colors, sizes, and visual variants.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Badge extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size          Badge size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color         Badge color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $variant       Visual variant: 'solid', 'subtle', 'outline'
     * @param null|string $icon          Optional Iconify icon name to display
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'solid',
        public ?string $icon = null,
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
            'gap-1',
            'font-medium',
            ComponentHelper::getRoundedClass('full'),
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('badge', $this->size);
        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Color based on variant
        $colorClasses = $this->getColorClasses();

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
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.badge');
    }

    /**
     * Get color classes based on variant
     */
    private function getColorClasses(): string
    {
        $componentColors = ComponentHelper::config('component_colors.badge', []);
        $variantColors = $componentColors[$this->variant] ?? $componentColors['solid'] ?? [];

        return $variantColors[$this->color] ?? $variantColors['primary'] ?? '';
    }
}
