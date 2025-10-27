<?php

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class PasswordInput extends Component
{
    public function __construct(
        public ?string $size = 'md', // xs, sm, md, lg, xl
        public ?string $variant = 'outline', // outline, filled, flushed
        public bool $disabled = false,
        public bool $required = false,
        public bool $invalid = false,
        public bool $readonly = false,
        public ?string $placeholder = null,
        public bool $showToggle = true
    ) {
    }

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

    public function inputClasses(): string
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

        if ($this->showToggle) {
            $classes[] = 'pr-10'; // Space for toggle button
        }

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
            $classes[] = 'border-0 border-b-2 rounded-none px-0';

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

    public function render()
    {
        return view('flowblade::components.forms.password-input');
    }
}
