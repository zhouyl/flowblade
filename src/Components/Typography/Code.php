<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Code extends Component
{
    public function __construct(
        public ?string $color = 'primary',
        public ?string $size = null, // xs, sm, md, lg
    ) {
    }

    public function classes(): string
    {
        $classes = [
            'font-mono',
            'px-1.5',
            'py-0.5',
            'rounded',
        ];

        // Size
        if ($this->size) {
            $sizeMap = [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
            ];

            if (isset($sizeMap[$this->size])) {
                $classes[] = $sizeMap[$this->size];
            }
        } else {
            $classes[] = 'text-sm';
        }

        // Color - use background color
        if ($this->color) {
            $colorMap = [
                'primary' => 'bg-blue-100 text-blue-800',
                'secondary' => 'bg-gray-100 text-gray-800',
                'success' => 'bg-green-100 text-green-800',
                'warning' => 'bg-yellow-100 text-yellow-800',
                'danger' => 'bg-red-100 text-red-800',
                'info' => 'bg-cyan-100 text-cyan-800',
                'gray' => 'bg-gray-100 text-gray-800',
            ];

            if (isset($colorMap[$this->color])) {
                $classes[] = $colorMap[$this->color];
            }
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.code');
    }
}
