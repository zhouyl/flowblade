<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Center Component
 *
 * Centers child elements both horizontally and vertically using flexbox.
 * Useful for centering content within a container or creating centered layouts.
 *
 * @see HasStyleProps For all available style props
 */
class Center extends Component
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
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
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
        $classes = [
            $this->inline ? 'inline-flex' : 'flex',
            'items-center',
            'justify-center',
        ];

        // Add style props classes
        $styleClasses = $this->parseStyleProps();

        return trim(implode(' ', $classes).' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.center');
    }
}
