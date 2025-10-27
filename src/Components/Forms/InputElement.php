<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InputElement Component
 *
 * Element component for input group (icons, buttons inside input)
 */
class InputElement extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $placement Placement: left, right
     * @param string $size      Size: xs, sm, md, lg, xl
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
