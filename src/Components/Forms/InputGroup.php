<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InputGroup Component
 *
 * Container component for grouping input fields with addons (prefix/suffix).
 * Enables creating composite input controls with text, icons, or buttons.
 */
class InputGroup extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size Input group size: 'xs', 'sm', 'md', 'lg', 'xl'
     */
    public function __construct(
        public string $size = 'md'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.input-group');
    }
}
