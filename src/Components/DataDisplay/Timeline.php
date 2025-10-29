<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Timeline Component
 *
 * Vertical timeline container for displaying chronological events or activities.
 * Contains TimelineItem components connected by a visual line.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Timeline extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $size          Timeline size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $color         Timeline color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string $variant       Visual variant: 'solid' (filled markers), 'outline' (hollow markers)
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'solid',
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
            'relative',
        ];

        // Size
        $sizeClasses = [
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
        ];

        if (isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
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
        return view('flowblade::components.data-display.timeline');
    }
}
