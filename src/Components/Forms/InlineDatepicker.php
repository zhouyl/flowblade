<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * InlineDatepicker Component
 *
 * Always-visible inline calendar picker powered by Flowbite JavaScript.
 * Displays calendar directly in the page without popup.
 */
class InlineDatepicker extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $id            Container element ID (auto-generated if empty)
     * @param string $date          Default selected date value
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $id = '',
        public string $date = '',
        ...$styleProps
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'inline-datepicker-'.uniqid();
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

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
        return view('flowblade::components.forms.inline-datepicker');
    }
}
