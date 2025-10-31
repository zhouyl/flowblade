<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Card Component
 *
 * Container card for grouping related content with optional header, body, and footer.
 * Supports multiple visual variants and sizes following Flowbite patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Card extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $size          Card size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $variant       Visual variant: 'elevated' (shadow), 'outline' (border), 'filled' (background), 'ghost' (minimal)
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $variant = 'elevated',
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
            'rounded-lg',
            'overflow-hidden',
        ];

        // Size (padding) - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('card', $this->size);
        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Variant
        $variantClasses = [
            'elevated' => 'bg-white shadow-md border border-gray-200',
            'outline' => 'bg-white border border-gray-300',
            'filled' => 'bg-gray-50 border border-gray-200',
            'ghost' => 'bg-transparent',
        ];

        if (isset($variantClasses[$this->variant])) {
            $classes[] = $variantClasses[$this->variant];
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
        return view('flowblade::components.data-display.card');
    }
}
