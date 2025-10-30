<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Fieldset Component
 *
 * Fieldset component for grouping related form fields
 */
class Fieldset extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $legend        Legend text
     * @param null|string $helperText    Helper text
     * @param bool        $disabled      Disabled state
     * @param bool        $invalid       Invalid state
     * @param null|string $errorText     Error message text
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $legend = null,
        public ?string $helperText = null,
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $errorText = null,
        ...$styleProps
    ) {
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
        return view('flowblade::components.forms.fieldset');
    }
}
