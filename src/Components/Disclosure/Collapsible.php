<?php

declare(strict_types=1);

namespace Flowblade\Components\Disclosure;

use Illuminate\View\Component;

/**
 * Collapsible Component
 *
 * Standalone collapsible component for toggling content visibility.
 * Similar to AccordionItem but used independently without Accordion container.
 */
class Collapsible extends Component
{
    /**
     * Create a new component instance
     *
     * @param bool        $open     Whether content is expanded by default
     * @param null|string $title    Collapsible header title or label
     * @param null|string $icon     Optional Iconify icon name
     * @param bool        $disabled Whether collapsible is disabled and non-toggleable
     */
    public function __construct(
        public bool $open = false,
        public ?string $title = null,
        public ?string $icon = null,
        public bool $disabled = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.disclosure.collapsible');
    }
}
