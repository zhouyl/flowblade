<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * InputElement Component
 *
 * Element component for InputGroup providing internal icons or buttons.
 * Positioned inside the input field for enhanced interactivity.
 */
class InputElement extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $placement     Element placement: 'left' (start) or 'right' (end)
     * @param string $size          Element size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $placement = 'left',
        public string $size = 'md',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.input-element');
    }
}
