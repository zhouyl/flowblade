<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Box Component
 *
 * Flexible layout container with comprehensive style props support.
 * Supports all common styling options including spacing, colors, borders,
 * layout, typography, flexbox, and grid properties.
 *
 * Can render as any HTML element via the 'as' prop.
 *
 * @see HasStyleProps For all available style props
 */
class Box extends Component
{
    use HasStyleProps;

    /**
     * HTML element to render
     *
     * @var string
     */
    public string $as = 'div';

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string $as            HTML element to render (default: 'div')
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        string $as = 'div',
        ...$styleProps
    ) {
        $this->as = $as;
        $this->setStyleProps($styleProps);
    }

    /**
     * Get box classes
     *
     * @return string Generated CSS classes from style props
     */
    public function classes(): string
    {
        return $this->parseStyleProps();
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.box');
    }
}
