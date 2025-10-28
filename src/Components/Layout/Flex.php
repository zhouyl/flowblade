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
     * @param string      $as            HTML element to render (default: 'div')
     * @param null|string $direction     Flex direction: 'row', 'col', 'row-reverse', 'col-reverse'
     * @param null|string $align         Align items: 'start', 'center', 'end', 'stretch', 'baseline'
     * @param null|string $justify       Justify content: 'start', 'center', 'end', 'between', 'around', 'evenly'
     * @param null|string $wrap          Flex wrap: 'wrap', 'nowrap', 'wrap-reverse'
     * @param null|string $gap           Gap between items using Tailwind spacing scale (0-96)
     * @param bool        $inline        Whether to use inline-flex instead of flex
     * @param mixed       ...$styleProps Additional style props (p, m, bg, color, etc.)
     */
    public function __construct(
        string $as = 'div',
        ?string $direction = null,
        ?string $align = null,
        ?string $justify = null,
        ?string $wrap = null,
        ?string $gap = null,
        bool $inline = false,
        ...$styleProps
    ) {
        $this->as = $as;
        $this->inline = $inline;

        // Merge flex-specific props with style props
        $allProps = array_merge(
            compact('direction', 'align', 'justify', 'wrap', 'gap'),
            $styleProps
        );

        $this->setStyleProps($allProps);
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
