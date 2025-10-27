<?php

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public ?string $size = 'md', // sm, md, lg
        public ?string $color = 'primary',
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $value = null,
    ) {
    }

    public function classes(): string
    {
        $classes = [
            'rounded',
            'border-gray-300',
            'transition',
            'focus:ring-2',
            'focus:ring-offset-0',
        ];

        // Size
        $sizeClasses = [
            'sm' => 'h-4 w-4',
            'md' => 'h-5 w-5',
            'lg' => 'h-6 w-6',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
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

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.forms.checkbox');
    }
}
