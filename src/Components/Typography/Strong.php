<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Illuminate\View\Component;

/**
 * Strong Component
 *
 * Strong importance component for bold text.
 * Semantic HTML element for content with strong importance or urgency.
 */
class Strong extends Component
{
    /**
     * Get the component classes
     */
    public function classes(): string
    {
        return 'font-bold';
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.strong');
    }
}
