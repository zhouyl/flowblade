<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * SearchInput Component
 *
 * Search input component with search icon and optional clear button
 */
class SearchInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size        Size: xs, sm, md, lg, xl
     * @param string      $variant     Variant: outline, filled, flushed
     * @param bool        $disabled    Disabled state
     * @param bool        $required    Required field
     * @param bool        $invalid     Invalid state
     * @param bool        $readonly    Read-only state
     * @param null|string $placeholder Placeholder text
     * @param bool        $showClear   Show clear button
     */
    public function __construct(
        public string $size = 'md',
        public string $variant = 'outline',
        public bool $disabled = false,
        public bool $required = false,
        public bool $invalid = false,
        public bool $readonly = false,
        public ?string $placeholder = null,
        public bool $showClear = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.search-input');
    }
}
