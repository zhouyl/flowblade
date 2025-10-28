<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InputAddon Component
 *
 * Addon component for InputGroup providing prefix or suffix content.
 * Can contain text, icons, or other elements to enhance input context.
 */
class InputAddon extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $placement Addon placement: 'left' (prefix) or 'right' (suffix)
     * @param string $size      Addon size: 'xs', 'sm', 'md', 'lg', 'xl'
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
        return view('flowblade::components.forms.input-addon');
    }
}
