<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Grid Component
 *
 * CSS Grid layout container with full control over grid properties.
 * Perfect for complex, two-dimensional layouts in enterprise applications.
 */
class Grid extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as       HTML element to render (default: 'div')
     * @param null|string $columns  Number of columns: '1'-'12', 'none', 'subgrid'
     * @param null|string $rows     Number of rows: '1'-'6', 'none', 'subgrid'
     * @param null|string $gap      Gap between items using Tailwind spacing scale (0-96)
     * @param null|string $gapX     Horizontal gap using Tailwind spacing scale (0-96)
     * @param null|string $gapY     Vertical gap using Tailwind spacing scale (0-96)
     * @param null|string $autoFlow Grid auto flow: 'row', 'col', 'dense', 'row-dense', 'col-dense'
     */
    public function __construct(
        public string $as = 'div',
        public ?string $columns = null,
        public ?string $rows = null,
        public ?string $gap = null,
        public ?string $gapX = null,
        public ?string $gapY = null,
        public ?string $autoFlow = null,
    ) {
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = ['grid'];

        // Columns
        if ($this->columns) {
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
                'none' => 'grid-cols-none',
                'subgrid' => 'grid-cols-subgrid',
            ];

            if (isset($columnsMap[$this->columns])) {
                $classes[] = $columnsMap[$this->columns];
            }
        }

        // Rows
        if ($this->rows) {
            $rowsMap = [
                '1' => 'grid-rows-1',
                '2' => 'grid-rows-2',
                '3' => 'grid-rows-3',
                '4' => 'grid-rows-4',
                '5' => 'grid-rows-5',
                '6' => 'grid-rows-6',
                'none' => 'grid-rows-none',
                'subgrid' => 'grid-rows-subgrid',
            ];

            if (isset($rowsMap[$this->rows])) {
                $classes[] = $rowsMap[$this->rows];
            }
        }

        // Gap
        if ($this->gap) {
            $classes[] = "gap-{$this->gap}";
        }

        if ($this->gapX) {
            $classes[] = "gap-x-{$this->gapX}";
        }

        if ($this->gapY) {
            $classes[] = "gap-y-{$this->gapY}";
        }

        // Auto flow
        if ($this->autoFlow) {
            $flowMap = [
                'row' => 'grid-flow-row',
                'col' => 'grid-flow-col',
                'column' => 'grid-flow-col',
                'dense' => 'grid-flow-dense',
                'row-dense' => 'grid-flow-row-dense',
                'col-dense' => 'grid-flow-col-dense',
            ];

            if (isset($flowMap[$this->autoFlow])) {
                $classes[] = $flowMap[$this->autoFlow];
            }
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.grid');
    }
}
