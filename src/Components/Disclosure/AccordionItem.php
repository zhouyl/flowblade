<?php

declare(strict_types=1);

namespace Flowblade\Components\Disclosure;

use Illuminate\View\Component;

/**
 * AccordionItem Component
 *
 * Individual collapsible section within an Accordion component.
 * Contains a trigger button and expandable content panel.
 */
class AccordionItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $value    Unique item identifier matching Accordion defaultValue
     * @param null|string $title    Item header title or label
     * @param null|string $icon     Optional Iconify icon name
     * @param bool        $disabled Whether item is disabled and non-expandable
     */
    public function __construct(
        public string $value,
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
        return view('flowblade::components.disclosure.accordion-item');
    }
}
