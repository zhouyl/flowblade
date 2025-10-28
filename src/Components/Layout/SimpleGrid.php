<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * SimpleGrid Component
 *
 * Simplified grid layout with responsive columns and automatic child sizing.
 * Ideal for card grids, image galleries, and responsive layouts.
 */
class SimpleGrid extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as            HTML element to render (default: 'div')
     * @param null|string $columns       Number of columns: '1'-'12'
     * @param null|string $minChildWidth Minimum child width (e.g., '200px', '16rem') for auto-fit layout
     * @param null|string $spacing       Gap between items: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $spacingX      Horizontal gap
     * @param null|string $spacingY      Vertical gap
     */
    public function __construct(
        public string $as = 'div',
        public ?string $columns = null,
        public ?string $minChildWidth = null,
        public ?string $spacing = null,
        public ?string $spacingX = null,
        public ?string $spacingY = null,
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = ['grid'];

        // If minChildWidth is set, use auto-fit with minmax
        if ($this->minChildWidth) {
            // This will be handled in the style attribute
        } elseif ($this->columns) {
            // Use fixed columns
            $columnsMap = [
                '1' => 'grid-cols-1',
                '2' => 'grid-cols-2',
                '3' => 'grid-cols-3',
                '4' => 'grid-cols-4',
                '5' => 'grid-cols-5',
                '6' => 'grid-cols-6',
                '7' => 'grid-cols-7',
                '8' => 'grid-cols-8',
                '9' => 'grid-cols-9',
                '10' => 'grid-cols-10',
                '11' => 'grid-cols-11',
                '12' => 'grid-cols-12',
            ];

            if (isset($columnsMap[$this->columns])) {
                $classes[] = $columnsMap[$this->columns];
            }
        }

        // Handle spacing
        $spacingMap = ComponentHelper::config('sizes.spacing', []);

        if ($this->spacingX && isset($spacingMap[$this->spacingX])) {
            $classes[] = "gap-x-{$spacingMap[$this->spacingX]}";
        }

        if ($this->spacingY && isset($spacingMap[$this->spacingY])) {
            $classes[] = "gap-y-{$spacingMap[$this->spacingY]}";
        }

        if ($this->spacing && !$this->spacingX && !$this->spacingY && isset($spacingMap[$this->spacing])) {
            $classes[] = "gap-{$spacingMap[$this->spacing]}";
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get inline styles for auto-fit layout
     */
    public function styles(): ?string
    {
        if ($this->minChildWidth) {
            return "grid-template-columns: repeat(auto-fit, minmax({$this->minChildWidth}, 1fr));";
        }

        return null;
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.simple-grid');
    }
}
