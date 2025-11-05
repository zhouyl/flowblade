<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * NativeSelect Component
 *
 * Native HTML select dropdown with styled variants and validation support.
 * Lightweight alternative to enhanced Select component.
 */
class NativeSelect extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $size          Select size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $variant       Select variant: 'outline', 'filled', 'flushed'
     * @param bool        $disabled      Whether select is disabled
     * @param bool        $required      Whether select is required
     * @param bool        $invalid       Whether select has validation error
     * @param null|string $placeholder   Placeholder option text
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $size = 'md',
        public ?string $variant = 'outline',
        public bool $disabled = false,
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
            'pr-10', // Space for dropdown icon
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('native_select', $this->size);

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
        return view('flowblade::components.forms.native-select');
    }
}
