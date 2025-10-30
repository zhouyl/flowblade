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
            $sizeMap = [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
            ];

            if (isset($sizeMap[$this->size])) {
                $classes[] = $sizeMap[$this->size];
            }
        } else {
            $classes[] = 'text-sm';
        }

        // Color - use background color
        if ($this->color) {
            $colorMap = [
                'primary' => 'bg-blue-100 text-blue-800',
                'secondary' => 'bg-gray-100 text-gray-800',
                'success' => 'bg-green-100 text-green-800',
                'warning' => 'bg-yellow-100 text-yellow-800',
                'danger' => 'bg-red-100 text-red-800',
                'info' => 'bg-cyan-100 text-cyan-800',
                'gray' => 'bg-gray-100 text-gray-800',
            ];

            if (isset($colorMap[$this->color])) {
                $classes[] = $colorMap[$this->color];
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
