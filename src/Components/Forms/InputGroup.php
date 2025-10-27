<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * InputGroup Component
 *
 * Container component for grouping input with addons and elements
 */
class InputGroup extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size Size: xs, sm, md, lg, xl
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
