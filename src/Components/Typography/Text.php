<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Text Component
 *
 * Versatile text component with support for sizing, alignment, truncation, and line clamping.
 * Perfect for body text, descriptions, and content paragraphs.
 */
class Text extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as        HTML element: 'p', 'span', 'div', etc
     * @param null|string $size      Text size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $weight    Font weight: 'normal', 'medium', 'semibold', 'bold'
     * @param null|string $color     Text color
     * @param null|string $align     Text alignment: 'left', 'center', 'right', 'justify'
     * @param bool        $truncate  Whether to truncate text with ellipsis
     * @param null|string $lineClamp Number of lines to clamp: '1', '2', '3', '4', '5', '6'
     */
    public function __construct(
        public string $as = 'p',
        public ?string $size = null,
        public ?string $weight = null,
        public ?string $color = null,
        public ?string $align = null,
        public bool $truncate = false,
        public ?string $lineClamp = null,
    ) {
    }

    /**
     * Get the component classes
     */
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

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.text');
    }
}
