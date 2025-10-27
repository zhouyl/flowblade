<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Blockquote extends Component
{
    public function __construct(
        public ?string $color = 'gray',
    ) {
    }

    public function classes(): string
    {
        $classes = [
            'border-l-4',
            'pl-4',
            'py-2',
            'italic',
        ];

        // Border color
        $colorMap = [
            'primary' => 'border-blue-500',
            'secondary' => 'border-gray-500',
            'success' => 'border-green-500',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-500',
            'info' => 'border-cyan-500',
            'gray' => 'border-gray-400',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.blockquote');
    }
}
