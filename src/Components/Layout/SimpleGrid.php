<?php

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class SimpleGrid extends Component
{
    public function __construct(
        public string $as = 'div',
        public ?string $columns = null, // 1-12
        public ?string $minChildWidth = null, // e.g., '200px', '16rem'
        public ?string $spacing = null, // 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
        public ?string $spacingX = null,
        public ?string $spacingY = null,
    ) {}

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

    public function styles(): ?string
    {
        if ($this->minChildWidth) {
            return "grid-template-columns: repeat(auto-fit, minmax({$this->minChildWidth}, 1fr));";
        }

        return null;
    }

    public function render()
    {
        return view('flowblade::components.layout.simple-grid');
    }
}

