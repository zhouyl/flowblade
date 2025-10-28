<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Heading Component
 *
 * Semantic heading component with automatic sizing based on heading level.
 * Supports custom sizes, weights, and colors for flexible typography.
 */
class Heading extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as     HTML heading element: 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
     * @param null|string $size   Custom size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $weight Font weight: 'normal', 'medium', 'semibold', 'bold', 'extrabold'
     * @param null|string $color  Text color
     */
    public function __construct(
        public string $as = 'h2',
        public ?string $size = null,
        public ?string $weight = null,
        public ?string $color = null,
    ) {
    }

    /**
     * Get the component classes
     */
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

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.heading');
    }
}
