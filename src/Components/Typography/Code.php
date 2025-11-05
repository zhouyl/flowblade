<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Code Component
 *
 * Inline code snippet component with monospace font and colored background.
 * Perfect for displaying short code snippets, commands, or technical terms.
 */
class Code extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $color         Code background color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param null|string $size          Text size: 'xs', 'sm', 'md', 'lg'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $color = 'primary',
        public ?string $size = null,
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
            'font-mono',
            'px-1.5',
            'py-0.5',
            'rounded',
        ];

        // Size
        if ($this->size) {
            $sizeClass = ComponentHelper::getSizeClasses('code', $this->size);

            if ($sizeClass) {
                $classes[] = $sizeClass;
            }
        } else {
            $classes[] = 'text-sm';
        }

        // Color - use background color
        if ($this->color) {
            $colorClasses = ComponentHelper::config("component_colors.code.{$this->color}");

            if ($colorClasses) {
                $classes[] = $colorClasses;
            }
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
        return view('flowblade::components.typography.code');
    }
}
