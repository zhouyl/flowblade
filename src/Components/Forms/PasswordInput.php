<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * PasswordInput Component
 *
 * Password input with optional show/hide toggle button.
 * Supports multiple variants and validation states.
 */
class PasswordInput extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $size          Input size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $variant       Input variant: 'outline', 'filled', 'flushed'
     * @param bool        $disabled      Whether input is disabled
     * @param bool        $required      Whether input is required
     * @param bool        $invalid       Whether input has validation error
     * @param bool        $readonly      Whether input is read-only
     * @param null|string $placeholder   Placeholder text
     * @param bool        $showToggle    Whether to show visibility toggle button
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $size = 'md',
        public ?string $variant = 'outline',
        public bool $disabled = false,
        public bool $required = false,
        public bool $invalid = false,
        public bool $readonly = false,
        public ?string $placeholder = null,
        public bool $showToggle = true,
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
            'relative',
            'inline-flex',
            'items-center',
            'w-full',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the input field classes
     */
    public function inputClasses(): string
    {
        $classes = [
            'block',
            'w-full',
            'border',
            ComponentHelper::getRoundedClass('md'),
            'transition',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-0',
        ];

        if ($this->showToggle) {
            $classes[] = 'pr-10'; // Space for toggle button
        }

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('password_input', $this->size);

        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Variant
        if ($this->variant === 'outline') {
            if ($this->invalid) {
                $classes[] = 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500';
            } else {
                $classes[] = 'border-gray-300 focus:ring-blue-500 focus:border-blue-500';
            }
        } elseif ($this->variant === 'filled') {
            $classes[] = 'border-transparent bg-gray-100';

            if ($this->invalid) {
                $classes[] = 'bg-red-50 text-red-900 focus:ring-red-500';
            } else {
                $classes[] = 'focus:ring-blue-500 focus:bg-white';
            }
        } elseif ($this->variant === 'flushed') {
            $classes[] = 'border-0 border-b-2 '.ComponentHelper::getRoundedClass('none').' px-0';

            if ($this->invalid) {
                $classes[] = 'border-red-300 focus:ring-0 focus:border-red-500';
            } else {
                $classes[] = 'border-gray-300 focus:ring-0 focus:border-blue-500';
            }
        }

        // Disabled/readonly state
        if ($this->disabled || $this->readonly) {
            $classes[] = 'opacity-50 cursor-not-allowed bg-gray-50';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the toggle button classes
     */
    public function toggleButtonClasses(): string
    {
        $classes = [
            'absolute',
            'right-2',
            'top-1/2',
            '-translate-y-1/2',
            'text-gray-500',
            'hover:text-gray-700',
            'focus:outline-none',
            'cursor-pointer',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.password-input');
    }
}
