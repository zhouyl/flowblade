<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Input Component
 *
 * Versatile text input component with multiple variants and validation states.
 * Supports various input types, sizes, and styling options following Flowbite patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Input extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $type          input type: 'text', 'email', 'password', 'number', 'tel', 'url', etc
     * @param null|string $size          Input size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $variant       Input variant: 'outline', 'filled', 'flushed'
     * @param bool        $disabled      Whether input is disabled
     * @param bool        $readonly      Whether input is read-only
     * @param bool        $required      Whether input is required
     * @param bool        $invalid       Whether input has validation error
     * @param null|string $placeholder   Placeholder text
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $type = 'text',
        public ?string $size = 'md',
        public ?string $variant = 'outline',
        public bool $disabled = false,
        public bool $readonly = false,
        public bool $required = false,
        public bool $invalid = false,
        public ?string $placeholder = null,
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
            'block',
            'w-full',
            'border',
            ComponentHelper::getRoundedClass('md'),
            'transition',
            ComponentHelper::getFocusClasses('input'),
        ];

        // Size
        $sizeClasses = ComponentHelper::config('sizes.input', [
            '2xs' => 'px-1.5 py-0.5 text-xs',
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
            '2xl' => 'px-6 py-3.5 text-lg',
            '3xl' => 'px-7 py-4 text-xl',
            '4xl' => 'px-8 py-5 text-2xl',
        ]);

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Variant
        if ($this->variant === 'outline') {
            if ($this->invalid) {
                $classes[] = 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500';
            } else {
                $classes[] = 'border-gray-300 focus:ring-blue-500 focus:border-blue-500';
            }
        } elseif ($this->variant === 'filled') {
            $classes[] = 'border-transparent bg-gray-100';

            if ($this->invalid) {
                $classes[] = 'bg-red-50 text-red-900 placeholder-red-300 focus:ring-red-500';
            } else {
                $classes[] = 'focus:ring-blue-500 focus:bg-white';
            }
        } elseif ($this->variant === 'flushed') {
            $classes[] = 'border-0 border-b-2 ' . ComponentHelper::getRoundedClass('none') . ' px-0';

            if ($this->invalid) {
                $classes[] = 'border-red-300 focus:ring-0 focus:border-red-500';
            } else {
                $classes[] = 'border-gray-300 focus:ring-0 focus:border-blue-500';
            }
        }

        // Disabled state
        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed bg-gray-50';
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
        return view('flowblade::components.forms.input');
    }
}
