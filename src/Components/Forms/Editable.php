<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Editable Component
 *
 * Editable text component for inline editing
 */
class Editable extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $value            Default value
     * @param null|string $placeholder      Placeholder text
     * @param string      $size             Size: xs, sm, md, lg, xl
     * @param bool        $disabled         Disabled state
     * @param bool        $required         Required field
     * @param bool        $selectAllOnFocus Select all text on focus
     * @param bool        $submitOnBlur     Submit on blur
     * @param bool        $submitOnEnter    Submit on Enter key
     * @param bool        $cancelOnEscape   Cancel on Escape key
     */
    public function __construct(
        public ?string $value = null,
        public ?string $placeholder = 'Click to edit',
        public string $size = 'md',
        public bool $disabled = false,
        public bool $required = false,
        public bool $selectAllOnFocus = true,
        public bool $submitOnBlur = true,
        public bool $submitOnEnter = true,
        public bool $cancelOnEscape = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.editable');
    }
}
