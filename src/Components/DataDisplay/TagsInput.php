<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TagsInput Component
 *
 * Tags input component for adding and removing tags
 */
class TagsInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param array       $tags            Initial tags array
     * @param string      $name            Form input name
     * @param string      $size            Size: xs, sm, md, lg
     * @param string      $color           Color: primary, secondary, success, warning, danger, info, gray
     * @param string      $placeholder     Input placeholder text
     * @param null|int    $maxTags         Maximum number of tags allowed
     * @param bool        $allowDuplicates Whether to allow duplicate tags
     * @param bool        $disabled        Whether the input is disabled
     * @param bool        $readonly        Whether the input is readonly
     * @param null|string $separator       Character to split input into tags (e.g., ',')
     */
    public function __construct(
        public array $tags = [],
        public string $name = 'tags',
        public string $size = 'md',
        public string $color = 'primary',
        public string $placeholder = 'Add a tag...',
        public ?int $maxTags = null,
        public bool $allowDuplicates = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public ?string $separator = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.tags-input');
    }
}
