<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * FloatingSelect Component
 *
 * Material Design style floating label select following Flowbite patterns.
 * Label animates up when select is focused or has value.
 */
class FloatingSelect extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $id            Select element ID (auto-generated if empty)
     * @param string $name          Select name attribute (defaults to ID if empty)
     * @param string $label         Floating label text
     * @param string $value         Currently selected value
     * @param bool   $required      Whether select is required
     * @param bool   $disabled      Whether select is disabled
     * @param string $variant       Select variant: 'default', 'outlined', 'filled', 'standard'
     * @param bool   $error         Whether to show error state
     * @param string $helperText    Helper text displayed below select
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $label = '',
        public string $value = '',
        public bool $required = false,
        public bool $disabled = false,
        public string $variant = 'default',
        public bool $error = false,
        public string $helperText = '',
        ...$styleProps
    ) {
        // Generate ID if not provided
        if (empty($this->id)) {
            $this->id = 'floating-select-'.uniqid();
        }

        // Use ID as name if name not provided
        if (empty($this->name)) {
            $this->name = $this->id;
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
        return view('flowblade::components.forms.floating-select');
    }
}
