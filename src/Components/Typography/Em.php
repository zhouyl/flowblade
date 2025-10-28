<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Illuminate\View\Component;

/**
 * Em Component
 *
 * Emphasis component for italicized text.
 * Semantic HTML element for stressed or emphasized content.
 */
class Em extends Component
{
    /**
     * Get the component classes
     */
    public function classes(): string
    {
        return 'italic';
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.em');
    }
}
