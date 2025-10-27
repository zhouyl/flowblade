<?php

namespace Flowblade\Components\Buttons;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class CloseButton extends Component
{
    public function __construct(
        public ?string $size = 'md', // xs, sm, md, lg, xl
        public bool $disabled = false,
        public ?string $ariaLabel = 'Close',
    ) {
    }

    public function classes(): string
    {
        $classes = [
            'inline-flex',
            'items-center',
            'justify-center',
            'rounded-md',
            'text-gray-400',
            'hover:text-gray-500',
            'hover:bg-gray-100',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-2',
            'focus:ring-gray-500',
            'transition',
        ];

        // Size
        $sizeClasses = [
            'xs' => 'p-0.5',
            'sm' => 'p-1',
            'md' => 'p-1.5',
            'lg' => 'p-2',
            'xl' => 'p-2.5',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Disabled state
        if ($this->disabled) {
            $classes[] = 'opacity-50 cursor-not-allowed';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function iconSize(): string
    {
        $sizeMap = [
            'xs' => 'w-3 h-3',
            'sm' => 'w-4 h-4',
            'md' => 'w-5 h-5',
            'lg' => 'w-6 h-6',
            'xl' => 'w-7 h-7',
        ];

        return $sizeMap[$this->size] ?? 'w-5 h-5';
    }

    public function render()
    {
        return view('flowblade::components.buttons.close-button');
    }
}
