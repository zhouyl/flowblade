<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Select Component
 *
 * Enhanced select component with search, multi-select, and custom styling.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Select extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $label         Label text
     * @param null|string $placeholder   Placeholder text
     * @param null|string $size          Size: sm, md, lg
     * @param null|string $variant       Variant: default, underline
     * @param bool        $multiple      Whether to allow multiple selections
     * @param bool        $searchable    Whether to enable search functionality
     * @param bool        $disabled      Whether the select is disabled
     * @param bool        $required      Whether the select is required
     * @param bool        $invalid       Whether the select has validation errors
     * @param null|string $helperText    Helper text below the select
     * @param null|string $errorText     Error message text
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $label = null,
        public ?string $placeholder = 'Choose an option',
        public ?string $size = 'md',
        public ?string $variant = 'default',
        public bool $multiple = false,
        public bool $searchable = false,
        public bool $disabled = false,
        public bool $required = false,
        public bool $invalid = false,
        public ?string $helperText = null,
        public ?string $errorText = null,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.select');
    }
}
