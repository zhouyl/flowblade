<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Heading extends Component
{
    public function __construct(
        public string $as = 'h2',
        public ?string $size = null, // 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
        public ?string $weight = null, // normal, medium, semibold, bold, extrabold
        public ?string $color = null,
    ) {}

    public function classes(): string
    {
        $classes = [];

        // Size mapping
        if ($this->size) {
            $sizeMap = [
                '2xs' => 'text-xs',
                'xs' => 'text-sm',
                'sm' => 'text-base',
                'md' => 'text-lg',
                'lg' => 'text-xl',
                'xl' => 'text-2xl',
                '2xl' => 'text-3xl',
                '3xl' => 'text-4xl',
                '4xl' => 'text-5xl',
            ];

            if (isset($sizeMap[$this->size])) {
                $classes[] = $sizeMap[$this->size];
            }
        } else {
            // Default sizes based on heading level
            $defaultSizes = [
                'h1' => 'text-4xl',
                'h2' => 'text-3xl',
                'h3' => 'text-2xl',
                'h4' => 'text-xl',
                'h5' => 'text-lg',
                'h6' => 'text-base',
            ];

            if (isset($defaultSizes[$this->as])) {
                $classes[] = $defaultSizes[$this->as];
            }
        }

        // Weight
        if ($this->weight) {
            $weightMap = [
                'normal' => 'font-normal',
                'medium' => 'font-medium',
                'semibold' => 'font-semibold',
                'bold' => 'font-bold',
                'extrabold' => 'font-extrabold',
            ];

            if (isset($weightMap[$this->weight])) {
                $classes[] = $weightMap[$this->weight];
            }
        } else {
            // Default weight
            $classes[] = 'font-bold';
        }

        // Color
        if ($this->color) {
            $colorClasses = ComponentHelper::getColorClasses($this->color, 'text');
            if ($colorClasses) {
                $classes[] = $colorClasses;
            }
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.heading');
    }
}

