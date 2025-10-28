<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * TagsInput Component
 *
 * Interactive input for adding and removing multiple tags.
 * Supports validation, limits, and keyboard shortcuts for tag management.
 */
class TagsInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param array       $tags            Initial tags array (e.g., ['tag1', 'tag2'])
     * @param string      $name            Form input name for submitted data
     * @param string      $size            Input size: 'xs', 'sm', 'md', 'lg'
     * @param string      $color           Tag color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param string      $placeholder     Placeholder text for input field
     * @param null|int    $maxTags         Maximum number of tags allowed (null for unlimited)
     * @param bool        $allowDuplicates Whether to allow duplicate tag values
     * @param bool        $disabled        Whether input is disabled
     * @param bool        $readonly        Whether input is read-only
     * @param null|string $separator       Character to auto-split input into tags (e.g., ',', ';')
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
