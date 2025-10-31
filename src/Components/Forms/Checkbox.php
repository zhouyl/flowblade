<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Checkbox Component
 *
 * Styled checkbox input with customizable colors and sizes.
 * Supports validation states and disabled state following Flowbite patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Checkbox extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $size          Checkbox size: 'sm', 'md', 'lg'
     * @param null|string $color         Checkbox color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info'
     * @param bool        $disabled      Whether checkbox is disabled
     * @param bool        $invalid       Whether checkbox has validation error
     * @param null|string $value         Checkbox value attribute
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $size = 'md',
        public ?string $color = 'primary',
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $value = null,
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
            'rounded',
            'border-gray-300',
            'transition',
            'focus:ring-2',
            'focus:ring-offset-0',
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('checkbox', $this->size);
        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Color
        $colorMap = [
            'primary' => 'text-blue-600 focus:ring-blue-500',
            'secondary' => 'text-gray-600 focus:ring-gray-500',
            'success' => 'text-green-600 focus:ring-green-500',
            'warning' => 'text-yellow-600 focus:ring-yellow-500',
            'danger' => 'text-red-600 focus:ring-red-500',
            'info' => 'text-cyan-600 focus:ring-cyan-500',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        // Invalid state
        if ($this->invalid) {
            $classes[] = 'border-red-300';
        }

        // Disabled state
        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed';
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
        return view('flowblade::components.forms.checkbox');
    }
}
