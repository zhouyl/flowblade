<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Disclosure;

use Illuminate\View\Component;

/**
 * AccordionItem Component
 *
 * Individual item in an accordion
 */
class AccordionItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $value    Item value identifier
     * @param null|string $title    Item title
     * @param null|string $icon     Icon name
     * @param bool        $disabled Whether the item is disabled
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
