<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Text extends Component
{
    public function __construct(
        public string $as = 'p',
        public ?string $size = null, // 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
        public ?string $weight = null, // normal, medium, semibold, bold
        public ?string $color = null,
        public ?string $align = null, // left, center, right, justify
        public bool $truncate = false,
        public ?string $lineClamp = null, // 1, 2, 3, 4, 5, 6
    ) {}

    public function classes(): string
    {
        $classes = [];

        // Size
        if ($this->size) {
            $sizeMap = ComponentHelper::config('sizes.text', [
                '2xs' => 'text-xs',
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
                '2xl' => 'text-2xl',
                '3xl' => 'text-3xl',
                '4xl' => 'text-4xl',
            ]);

            if (isset($sizeMap[$this->size])) {
                $classes[] = $sizeMap[$this->size];
            }
        }

        // Weight
        if ($this->weight) {
            $weightMap = [
                'normal' => 'font-normal',
                'medium' => 'font-medium',
                'semibold' => 'font-semibold',
                'bold' => 'font-bold',
            ];

            if (isset($weightMap[$this->weight])) {
                $classes[] = $weightMap[$this->weight];
            }
        }

        // Color
        if ($this->color) {
            $colorClasses = ComponentHelper::getColorClasses($this->color, 'text');
            if ($colorClasses) {
                $classes[] = $colorClasses;
            }
        }

        // Alignment
        if ($this->align) {
            $alignMap = [
                'left' => 'text-left',
                'center' => 'text-center',
                'right' => 'text-right',
                'justify' => 'text-justify',
            ];

            if (isset($alignMap[$this->align])) {
                $classes[] = $alignMap[$this->align];
            }
        }

        // Truncate
        if ($this->truncate) {
            $classes[] = 'truncate';
        }

        // Line clamp
        if ($this->lineClamp) {
            $clampMap = [
                '1' => 'line-clamp-1',
                '2' => 'line-clamp-2',
                '3' => 'line-clamp-3',
                '4' => 'line-clamp-4',
                '5' => 'line-clamp-5',
                '6' => 'line-clamp-6',
            ];

            if (isset($clampMap[$this->lineClamp])) {
                $classes[] = $clampMap[$this->lineClamp];
            }
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.text');
    }
}

