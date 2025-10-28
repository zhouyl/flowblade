<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Footer Component
 *
 * Footer section for website pages
 */
class Footer extends Component
{
    /**
     * Create a new component instance
     *
     * @param bool $sticky Whether footer is sticky (fixed to bottom)
     */
    public function __construct(
        public bool $sticky = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.footer');
    }
}
