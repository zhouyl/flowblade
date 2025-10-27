<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Disclosure;

use Illuminate\View\Component;

/**
 * Collapsible Component
 *
 * Collapsible component for toggling content visibility
 */
class Collapsible extends Component
{
    /**
     * Create a new component instance
     *
     * @param bool        $open     Whether the collapsible is open by default
     * @param null|string $title    Collapsible title
     * @param null|string $icon     Icon name
     * @param bool        $disabled Whether the collapsible is disabled
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
