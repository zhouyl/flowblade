<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Editable Component
 *
 * Inline editable text component with click-to-edit functionality.
 * Supports keyboard shortcuts and automatic submission behaviors.
 */
class Editable extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $value            Default text value
     * @param null|string $placeholder      Placeholder text when empty
     * @param string      $size             Text size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param bool        $disabled         Whether editing is disabled
     * @param bool        $required         Whether value is required
     * @param bool        $selectAllOnFocus Whether to select all text when focused
     * @param bool        $submitOnBlur     Whether to submit changes on blur
     * @param bool        $submitOnEnter    Whether to submit changes on Enter key
     * @param bool        $cancelOnEscape   Whether to cancel changes on Escape key
     * @param mixed       ...$styleProps    All style props (p, m, bg, color, w, h, etc.)
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
        public bool $cancelOnEscape = true,
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
        return view('flowblade::components.forms.editable');
    }
}
