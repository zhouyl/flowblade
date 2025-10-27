<?php

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class PinInput extends Component
{
    public function __construct(
        public int $length = 4,
        public ?string $size = 'md', // sm, md, lg
        public bool $mask = false,
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $placeholder = '○'
    ) {
    }

    public function containerClasses(): string
    {
        $classes = [
            'inline-flex',
            'gap-2',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

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

    public function render()
    {
        return view('flowblade::components.forms.pin-input');
    }
}
