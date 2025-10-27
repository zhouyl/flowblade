<?php

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class SwitchInput extends Component
{
    public function __construct(
        public ?string $size = 'md', // sm, md, lg
        public ?string $color = 'primary',
        public bool $disabled = false,
        public bool $invalid = false
    ) {
    }

    public function containerClasses(): string
    {
        $classes = [
            'relative',
            'inline-flex',
            'items-center',
            'cursor-pointer',
        ];

        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function inputClasses(): string
    {
        return 'sr-only peer';
    }

    public function trackClasses(): string
    {
        $classes = [
            'relative',
            'rounded-full',
            'transition-colors',
            'duration-200',
            'ease-in-out',
        ];

        // Size
        $sizeClasses = [
            'sm' => 'w-9 h-5',
            'md' => 'w-11 h-6',
            'lg' => 'w-14 h-7',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Color - unchecked state
        $classes[] = 'bg-gray-200';

        // Color - checked state
        $colorMap = [
            'primary' => 'peer-checked:bg-blue-600',
            'secondary' => 'peer-checked:bg-gray-600',
            'success' => 'peer-checked:bg-green-600',
            'warning' => 'peer-checked:bg-yellow-600',
            'danger' => 'peer-checked:bg-red-600',
            'info' => 'peer-checked:bg-cyan-600',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        // Focus ring
        $classes[] = 'peer-focus:ring-2 peer-focus:ring-offset-2';

        $focusRingMap = [
            'primary' => 'peer-focus:ring-blue-500',
            'secondary' => 'peer-focus:ring-gray-500',
            'success' => 'peer-focus:ring-green-500',
            'warning' => 'peer-focus:ring-yellow-500',
            'danger' => 'peer-focus:ring-red-500',
            'info' => 'peer-focus:ring-cyan-500',
        ];

        if ($this->color && isset($focusRingMap[$this->color])) {
            $classes[] = $focusRingMap[$this->color];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function thumbClasses(): string
    {
        $classes = [
            'absolute',
            'top-0.5',
            'left-0.5',
            'bg-white',
            'rounded-full',
            'transition-transform',
            'duration-200',
            'ease-in-out',
        ];

        // Size
        $sizeClasses = [
            'sm' => 'w-4 h-4 peer-checked:translate-x-4',
            'md' => 'w-5 h-5 peer-checked:translate-x-5',
            'lg' => 'w-6 h-6 peer-checked:translate-x-7',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.forms.switch');
    }
}
