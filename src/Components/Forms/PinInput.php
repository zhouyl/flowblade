<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * PinInput Component
 *
 * PIN code or OTP input component with individual character boxes.
 * Supports masking for secure input and customizable length.
 */
class PinInput extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param int         $length        Number of PIN digits/characters
     * @param null|string $size          Input size: 'sm', 'md', 'lg'
     * @param bool        $mask          Whether to mask input (password-style)
     * @param bool        $disabled      Whether inputs are disabled
     * @param bool        $invalid       Whether inputs have validation error
     * @param null|string $placeholder   Placeholder character for empty inputs
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public int $length = 4,
        public ?string $size = 'md',
        public bool $mask = false,
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $placeholder = '○',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the container classes
     */
    public function containerClasses(): string
    {
        $classes = [
            'inline-flex',
            'gap-2',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the individual input classes
     */
    public function inputClasses(): string
    {
        $classes = [
            'block',
            'text-center',
            'border',
            ComponentHelper::getRoundedClass('md'),
            'transition',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-0',
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('pin_input', $this->size);
        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Border and focus
        if ($this->invalid) {
            $classes[] = 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500';
        } else {
            $classes[] = 'border-gray-300 focus:ring-blue-500 focus:border-blue-500';
        }

        // Disabled state
        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed bg-gray-50';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.pin-input');
    }
}
