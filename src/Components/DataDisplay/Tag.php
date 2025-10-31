<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Tag Component
 *
 * Removable tag for labels, categories, and filters.
 * Supports icons and optional close button for interactive removal.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Tag extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size          Tag size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color         Tag color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $variant       Visual variant: 'solid', 'subtle', 'outline'
     * @param null|string $icon          Optional Iconify icon name
     * @param bool        $closable      Whether to show close/remove button
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'gray',
        public string $variant = 'subtle',
        public ?string $icon = null,
        public bool $closable = false,
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
            'font-medium',
            'rounded-md',
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('tag', $this->size);
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
        return view('flowblade::components.data-display.tag');
    }

    /**
     * Get color classes based on variant
     */
    private function getColorClasses(): string
    {
        $componentColors = ComponentHelper::config('component_colors.tag', []);
        $variantColors = $componentColors[$this->variant] ?? $componentColors['subtle'] ?? [];

        return $variantColors[$this->color] ?? $variantColors['gray'] ?? '';
    }
}
