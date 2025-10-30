<?php

declare(strict_types=1);

namespace Flowblade\Components\Disclosure;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * AccordionItem Component
 *
 * Individual collapsible section within an Accordion component.
 * Contains a trigger button and expandable content panel.
 */
class AccordionItem extends Component
{
    use HasStyleProps;

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
            'border-b border-gray-200 dark:border-gray-700',
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
        return view('flowblade::components.disclosure.accordion-item');
    }
}
