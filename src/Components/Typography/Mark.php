<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Mark extends Component
{
    public function __construct(
        public ?string $color = 'warning',
    ) {}

    public function classes(): string
    {
        $classes = ['px-1'];

        // Color
        $colorMap = [
            'primary' => 'bg-blue-200',
            'secondary' => 'bg-gray-200',
            'success' => 'bg-green-200',
            'warning' => 'bg-yellow-200',
            'danger' => 'bg-red-200',
            'info' => 'bg-cyan-200',
            'gray' => 'bg-gray-200',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.mark');
    }
}

