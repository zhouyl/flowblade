<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InputElement Component
 *
 * Element component for InputGroup providing internal icons or buttons.
 * Positioned inside the input field for enhanced interactivity.
 */
class InputElement extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $placement Element placement: 'left' (start) or 'right' (end)
     * @param string $size      Element size: 'xs', 'sm', 'md', 'lg', 'xl'
     */
    public function __construct(
        public string $placement = 'left',
        public string $size = 'md'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.input-element');
    }
}
