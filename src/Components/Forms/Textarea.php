<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Textarea Component
 *
 * Multi-line text input component with resizing and validation support.
 * Supports multiple variants and sizes following Flowbite design patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Textarea extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $size          Textarea size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $variant       Textarea variant: 'outline', 'filled', 'flushed'
     * @param bool        $disabled      Whether textarea is disabled
     * @param bool        $readonly      Whether textarea is read-only
     * @param bool        $required      Whether textarea is required
     * @param bool        $invalid       Whether textarea has validation error
     * @param null|string $placeholder   Placeholder text
     * @param null|int    $rows          Number of visible text rows
     * @param bool        $resize        Whether to allow manual resizing
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $size = 'md',
        public ?string $variant = 'outline',
        public bool $disabled = false,
        public bool $readonly = false,
        public bool $required = false,
        public bool $invalid = false,
        public ?string $placeholder = null,
        public ?int $rows = 3,
        public bool $resize = true,
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
            'rounded-md',
            'transition',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-0',
        ];

        // Size
        $sizeClasses = [
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
        ];

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
            $classes[] = 'border-0 border-b-2 rounded-none px-0';

            if ($this->invalid) {
                $classes[] = 'border-red-300 focus:ring-0 focus:border-red-500';
            } else {
                $classes[] = 'border-gray-300 focus:ring-0 focus:border-blue-500';
            }
        }

        // Resize
        if (!$this->resize) {
            $classes[] = 'resize-none';
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
        return view('flowblade::components.forms.textarea');
    }
}
