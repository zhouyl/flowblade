<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * PinInput Component
 *
 * PIN code or OTP input component with individual character boxes.
 * Supports masking for secure input and customizable length.
 */
class PinInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param int         $length      Number of PIN digits/characters
     * @param null|string $size        Input size: 'sm', 'md', 'lg'
     * @param bool        $mask        Whether to mask input (password-style)
     * @param bool        $disabled    Whether inputs are disabled
     * @param bool        $invalid     Whether inputs have validation error
     * @param null|string $placeholder Placeholder character for empty inputs
     */
    public function __construct(
        public int $length = 4,
        public ?string $size = 'md',
        public bool $mask = false,
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $placeholder = '○'
    ) {
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
            'rounded-md',
            'transition',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-0',
        ];

        // Size
        $sizeClasses = [
            'sm' => 'w-8 h-8 text-sm',
            'md' => 'w-10 h-10 text-base',
            'lg' => 'w-12 h-12 text-lg',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
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
