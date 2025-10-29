<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Stack Component
 *
 * Flexbox-based layout component that stacks elements vertically or horizontally
 * with consistent spacing. Supports optional dividers between items and comprehensive
 * style props support.
 *
 * @see HasStyleProps For all available style props
 */
class Stack extends Component
{
    use HasStyleProps;

    /**
     * HTML element to render
     *
     * @var string
     */
    public string $as = 'div';

    /**
     * Stack direction
     *
     * @var string
     */
    public string $direction = 'vertical';

    /**
     * Spacing between items
     *
     * @var string
     */
    public string $spacing = 'md';

    /**
     * Whether to show dividers between items
     *
     * @var bool
     */
    public bool $divider = false;

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string      $as            HTML element to render (default: 'div')
     * @param string      $direction     Stack direction: 'vertical', 'horizontal'
     * @param null|string $spacing       Spacing between items: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param bool        $divider       Whether to show dividers between items
     * @param mixed       ...$styleProps Style props including:
     *                                   - align: Align items ('start', 'center', 'end', 'stretch', 'baseline')
     *                                   - justify: Justify content ('start', 'center', 'end', 'between', 'around', 'evenly')
     *                                   - And all other style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        string $as = 'div',
        string $direction = 'vertical',
        ?string $spacing = null,
        bool $divider = false,
        ...$styleProps
    ) {
        $this->as = $as;
        $this->direction = $direction;
        $this->spacing = $spacing ?? 'md';
        $this->divider = $divider;

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     *
     * @return string Generated CSS classes
     */
    public function classes(): string
    {
        $classes = ['flex'];

        // Direction
        if ($this->direction === 'horizontal') {
            $classes[] = 'flex-row';
        } else {
            $classes[] = 'flex-col';
        }

        // Spacing (using gap)
        $spacingMap = ComponentHelper::config('sizes.spacing', []);

        if (isset($spacingMap[$this->spacing])) {
            $classes[] = "gap-{$spacingMap[$this->spacing]}";
        }

        // Divider
        if ($this->divider) {
            if ($this->direction === 'horizontal') {
                $classes[] = 'divide-x';
            } else {
                $classes[] = 'divide-y';
            }
            $classes[] = 'divide-gray-200';
        }

        // Add style props classes (includes align and justify)
        $styleClasses = $this->parseStyleProps();

        return trim(implode(' ', $classes).' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.stack');
    }
}
