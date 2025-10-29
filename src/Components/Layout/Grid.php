<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Grid Component
 *
 * CSS Grid layout container with comprehensive style props support.
 * Provides full control over grid properties and supports all common styling options.
 *
 * @see HasStyleProps For all available style props
 */
class Grid extends Component
{
    use HasStyleProps;

    /**
     * HTML element to render
     *
     * @var string
     */
    public string $as = 'div';

    /**
     * Grid auto flow property
     *
     * @var null|string
     */
    public ?string $autoFlow = null;

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string      $as            HTML element to render (default: 'div')
     * @param null|string $autoFlow      Grid auto flow: 'row', 'col', 'dense', 'row-dense', 'col-dense'
     * @param mixed       ...$styleProps Style props including:
     *                                   - templateColumns/columns: Number of columns ('1'-'12', 'none', 'subgrid')
     *                                   - templateRows/rows: Number of rows ('1'-'6', 'none', 'subgrid')
     *                                   - gap: Gap between items (0-96)
     *                                   - gapX: Horizontal gap (0-96)
     *                                   - gapY: Vertical gap (0-96)
     *                                   - And all other style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        string $as = 'div',
        ?string $autoFlow = null,
        ...$styleProps
    ) {
        $this->as = $as;
        $this->autoFlow = $autoFlow;

        // Map 'columns' to 'templateColumns' and 'rows' to 'templateRows' if provided
        if (isset($styleProps['columns'])) {
            $styleProps['templateColumns'] = $styleProps['columns'];
            unset($styleProps['columns']);
        }

        if (isset($styleProps['rows'])) {
            $styleProps['templateRows'] = $styleProps['rows'];
            unset($styleProps['rows']);
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     *
     * @return string Generated CSS classes
     */
    public function classes(): string
    {
        $classes = ['grid'];

        // Add auto flow if specified
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

        // Add style props classes
        $styleClasses = $this->parseStyleProps();

        return trim(implode(' ', $classes).' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.grid');
    }
}
