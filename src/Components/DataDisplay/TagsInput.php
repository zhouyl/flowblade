<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TagsInput Component
 *
 * Interactive input for adding and removing multiple tags.
 * Supports validation, limits, and keyboard shortcuts for tag management.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class TagsInput extends Component
{
    use HasStyleProps;

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
     * @param mixed       ...$styleProps   All style props (p, m, bg, color, w, h, etc.)
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
        public ?string $separator = null,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $inputConfig = ComponentHelper::config('component_colors.tags_input', []);

        $classes = [
            'w-full',
            'flex',
            'flex-wrap',
            'gap-2',
            'p-2',
            'border',
            $inputConfig['border'] ?? 'border-gray-300',
            'rounded-lg',
            $inputConfig['bg'] ?? 'bg-white',
            'focus-within:ring-2',
            'focus-within:ring-blue-500',
            'focus-within:border-transparent',
        ];

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
        return view('flowblade::components.data-display.tags-input');
    }
}
