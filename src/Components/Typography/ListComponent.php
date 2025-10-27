<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class ListComponent extends Component
{
    public function __construct(
        public string $type = 'ul', // ul, ol
        public ?string $spacing = null, // xs, sm, md, lg
        public ?string $styleType = null, // disc, circle, square, decimal, etc.
    ) {
    }

    public function classes(): string
    {
        $classes = [];

        // List style position
        $classes[] = 'list-inside';

        // Spacing
        if ($this->spacing) {
            $spacingMap = [
                'xs' => 'space-y-1',
                'sm' => 'space-y-2',
                'md' => 'space-y-3',
                'lg' => 'space-y-4',
            ];

            if (isset($spacingMap[$this->spacing])) {
                $classes[] = $spacingMap[$this->spacing];
            }
        }

        // Style type
        if ($this->styleType) {
            $styleMap = [
                'disc' => 'list-disc',
                'circle' => 'list-none', // Custom styling needed
                'square' => 'list-none', // Custom styling needed
                'decimal' => 'list-decimal',
                'none' => 'list-none',
            ];

            if (isset($styleMap[$this->styleType])) {
                $classes[] = $styleMap[$this->styleType];
            }
        } else {
            // Default styles
            if ($this->type === 'ul') {
                $classes[] = 'list-disc';
            } else {
                $classes[] = 'list-decimal';
            }
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.list');
    }
}
