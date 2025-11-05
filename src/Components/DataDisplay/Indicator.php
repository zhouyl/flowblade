<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Indicator Component
 *
 * Status indicator dot for displaying online/offline, notifications, and activity states.
 * Supports positioning relative to parent elements and optional ping animation.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Indicator extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $color         Indicator color: 'gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'
     * @param string $size          Indicator size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $position      Positioning: 'top-left', 'top-right', 'bottom-left', 'bottom-right', 'inline'
     * @param bool   $ping          Whether to enable pulsing ping animation
     * @param bool   $border        Whether to add white border around indicator
     * @param string $label         Accessible label for screen readers
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $color = 'gray',
        public string $size = 'md',
        public string $position = 'inline',
        public bool $ping = false,
        public bool $border = false,
        public string $label = '',
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
            ComponentHelper::getRoundedClass('full'),
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('indicator', $this->size);

        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Color
        $colorClasses = [
            'gray' => 'bg-gray-400 dark:bg-gray-500',
            'red' => 'bg-red-500 dark:bg-red-600',
            'yellow' => 'bg-yellow-400 dark:bg-yellow-500',
            'green' => 'bg-green-500 dark:bg-green-600',
            'blue' => 'bg-blue-500 dark:bg-blue-600',
            'indigo' => 'bg-indigo-500 dark:bg-indigo-600',
            'purple' => 'bg-purple-500 dark:bg-purple-600',
            'pink' => 'bg-pink-500 dark:bg-pink-600',
        ];

        if (isset($colorClasses[$this->color])) {
            $classes[] = $colorClasses[$this->color];
        }

        // Position
        $positionClasses = [
            'top-left' => 'absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2',
            'top-right' => 'absolute top-0 right-0 translate-x-1/2 -translate-y-1/2',
            'bottom-left' => 'absolute bottom-0 left-0 -translate-x-1/2 translate-y-1/2',
            'bottom-right' => 'absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2',
            'inline' => 'inline-flex',
        ];

        if (isset($positionClasses[$this->position])) {
            $classes[] = $positionClasses[$this->position];
        }

        // Border
        if ($this->border) {
            $classes[] = 'ring-2 ring-white dark:ring-gray-900';
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
        return view('flowblade::components.data-display.indicator');
    }
}
