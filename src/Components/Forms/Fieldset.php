<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Fieldset Component
 *
 * Fieldset component for grouping related form fields
 */
class Fieldset extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $legend     Legend text
     * @param null|string $helperText Helper text
     * @param bool        $disabled   Disabled state
     * @param bool        $invalid    Invalid state
     * @param null|string $errorText  Error message text
     */
    public function __construct(
        public ?string $legend = null,
        public ?string $helperText = null,
        public bool $disabled = false,
        public bool $invalid = false,
        public ?string $errorText = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.fieldset');
    }
}
