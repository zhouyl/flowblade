<?php

declare(strict_types=1);

namespace Flowblade\Components\Disclosure;

use Illuminate\View\Component;

/**
 * Accordion Component
 *
 * Accordion container for collapsible content sections.
 * Contains AccordionItem components that can expand/collapse to show/hide content.
 */
class Accordion extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $variant      Visual variant: 'default' (connected), 'separated' (spaced), 'contained' (bordered)
     * @param string      $size         Accordion size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param bool        $multiple     Whether multiple items can be open simultaneously
     * @param null|string $defaultValue Default open item identifier value
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
