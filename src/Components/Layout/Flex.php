<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Flex Component
 *
 * Flexbox layout container with comprehensive style props support.
 * Provides full control over flex properties and supports all common styling options.
 *
 * @see HasStyleProps For all available style props
 */
class Flex extends Component
{
    use HasStyleProps;

    /**
     * HTML element to render
     *
     * @var string
     */
    public string $as = 'div';

    /**
     * Whether to use inline-flex instead of flex
     *
     * @var bool
     */
    public bool $inline = false;

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string $as            HTML element to render (default: 'div')
     * @param bool   $inline        Whether to use inline-flex instead of flex
     * @param mixed  ...$styleProps Style props including:
     *                              - direction: Flex direction ('row', 'col', 'row-reverse', 'col-reverse')
     *                              - align: Align items ('start', 'center', 'end', 'stretch', 'baseline')
     *                              - justify: Justify content ('start', 'center', 'end', 'between', 'around', 'evenly')
     *                              - wrap: Flex wrap ('wrap', 'nowrap', 'wrap-reverse')
     *                              - gap: Gap between items (0-96)
     *                              - And all other style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        string $as = 'div',
        bool $inline = false,
        ...$styleProps
    ) {
        $this->as = $as;
        $this->inline = $inline;
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     *
     * @return string Generated CSS classes
     */
    public function classes(): string
    {
        $baseClass = $this->inline ? 'inline-flex' : 'flex';
        $styleClasses = $this->parseStyleProps();

        return trim($baseClass.' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.flex');
    }
}
