<?php

declare(strict_types=1);

namespace Flowblade\Components\Disclosure;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Collapsible Component
 *
 * Standalone collapsible component for toggling content visibility.
 * Similar to AccordionItem but used independently without Accordion container.
 */
class Collapsible extends Component
{
    use HasStyleProps;

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
        public bool $disabled = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'border border-gray-200 rounded-lg dark:border-gray-700',
            $this->disabled ? 'opacity-50 cursor-not-allowed' : '',
        ];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.disclosure.collapsible');
    }
}
