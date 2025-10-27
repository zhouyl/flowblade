<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Kbd extends Component
{
    public function __construct(
        public ?string $size = null, // xs, sm, md, lg
    ) {
    }

    public function classes(): string
    {
        $classes = [
            'font-mono',
            'px-2',
            'py-1',
            'bg-gray-100',
            'border',
            'border-gray-300',
            'rounded',
            'shadow-sm',
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

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.kbd');
    }
}
