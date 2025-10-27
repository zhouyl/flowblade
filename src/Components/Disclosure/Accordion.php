<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Disclosure;

use Illuminate\View\Component;

/**
 * Accordion Component
 *
 * Accordion component for collapsible content sections
 */
class Accordion extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $variant      Variant: default, separated, contained
     * @param string      $size         Size: xs, sm, md, lg, xl
     * @param bool        $multiple     Allow multiple items to be open
     * @param null|string $defaultValue Default open item value
     */
    public function __construct(
        public string $variant = 'default',
        public string $size = 'md',
        public bool $multiple = false,
        public ?string $defaultValue = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.disclosure.accordion');
    }
}
