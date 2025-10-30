<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * SearchInput Component
 *
 * Search input component with search icon and optional clear button
 */
class SearchInput extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size          Size: xs, sm, md, lg, xl
     * @param string      $variant       Variant: outline, filled, flushed
     * @param bool        $disabled      Disabled state
     * @param bool        $required      Required field
     * @param bool        $invalid       Invalid state
     * @param bool        $readonly      Read-only state
     * @param null|string $placeholder   Placeholder text
     * @param bool        $showClear     Show clear button
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $variant = 'outline',
        public bool $disabled = false,
        public bool $required = false,
        public bool $invalid = false,
        public bool $readonly = false,
        public ?string $placeholder = null,
        public bool $showClear = true,
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
        return view('flowblade::components.forms.search-input');
    }
}
