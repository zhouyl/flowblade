<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Footer Component
 *
 * Footer section component for website pages with optional sticky positioning.
 * Ideal for site-wide footers with copyright, links, and contact information.
 */
class Footer extends Component
{
    /**
     * Create a new component instance
     *
     * @param bool $sticky Whether footer should be sticky (fixed to bottom of viewport)
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
