<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * List Component
 *
 * Flexible list component supporting both ordered and unordered lists.
 * Features customizable spacing and list style types.
 */
class ListComponent extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $type      List type: 'ul' (unordered), 'ol' (ordered)
     * @param null|string $spacing   Spacing between items: 'xs', 'sm', 'md', 'lg'
     * @param null|string $styleType List style: 'disc', 'circle', 'square', 'decimal', 'none'
     */
    public function __construct(
        public string $type = 'ul',
        public ?string $spacing = null,
        public ?string $styleType = null,
    ) {
    }

    /**
     * Get the component classes
     */
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

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.list');
    }
}
