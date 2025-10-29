<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Badge Component
 *
 * Compact badge for displaying status, labels, or counts.
 * Supports multiple colors, sizes, and visual variants.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Badge extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size          Badge size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color         Badge color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $variant       Visual variant: 'solid', 'subtle', 'outline'
     * @param null|string $icon          Optional Iconify icon name to display
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'solid',
        public ?string $icon = null,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'inline-flex',
            'items-center',
            'gap-1',
            'font-medium',
            'rounded-full',
        ];

        // Size
        $sizeClasses = [
            'xs' => 'text-xs px-2 py-0.5',
            'sm' => 'text-xs px-2.5 py-0.5',
            'md' => 'text-sm px-3 py-1',
            'lg' => 'text-base px-3.5 py-1',
            'xl' => 'text-lg px-4 py-1.5',
        ];

        if (isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Color based on variant
        $colorClasses = $this->getColorClasses();

        if ($colorClasses) {
            $classes[] = $colorClasses;
        }

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.badge');
    }

    /**
     * Get color classes based on variant
     */
    private function getColorClasses(): string
    {
        $solidColors = [
            'primary' => 'bg-blue-600 text-white',
            'secondary' => 'bg-gray-600 text-white',
            'success' => 'bg-green-600 text-white',
            'warning' => 'bg-yellow-600 text-white',
            'danger' => 'bg-red-600 text-white',
            'info' => 'bg-cyan-600 text-white',
            'gray' => 'bg-gray-600 text-white',
        ];

        $subtleColors = [
            'primary' => 'bg-blue-100 text-blue-800',
            'secondary' => 'bg-gray-100 text-gray-800',
            'success' => 'bg-green-100 text-green-800',
            'warning' => 'bg-yellow-100 text-yellow-800',
            'danger' => 'bg-red-100 text-red-800',
            'info' => 'bg-cyan-100 text-cyan-800',
            'gray' => 'bg-gray-100 text-gray-800',
        ];

        $outlineColors = [
            'primary' => 'border border-blue-600 text-blue-600',
            'secondary' => 'border border-gray-600 text-gray-600',
            'success' => 'border border-green-600 text-green-600',
            'warning' => 'border border-yellow-600 text-yellow-600',
            'danger' => 'border border-red-600 text-red-600',
            'info' => 'border border-cyan-600 text-cyan-600',
            'gray' => 'border border-gray-600 text-gray-600',
        ];

        $colorMap = match ($this->variant) {
            'subtle' => $subtleColors,
            'outline' => $outlineColors,
            default => $solidColors,
        };

        return $colorMap[$this->color] ?? $colorMap['primary'];
    }
}
