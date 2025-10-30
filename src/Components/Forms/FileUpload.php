<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * FileUpload Component
 *
 * File upload component with drag and drop support
 */
class FileUpload extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $accept        Accepted file types
     * @param bool        $multiple      Allow multiple files
     * @param bool        $disabled      Disabled state
     * @param bool        $required      Required field
     * @param null|string $maxSize       Max file size (e.g., "5MB")
     * @param null|int    $maxFiles      Max number of files
     * @param bool        $showPreview   Show file preview
     * @param null|string $placeholder   Placeholder text
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $accept = null,
        public bool $multiple = false,
        public bool $disabled = false,
        public bool $required = false,
        public ?string $maxSize = null,
        public ?int $maxFiles = null,
        public bool $showPreview = true,
        public ?string $placeholder = 'Click to upload or drag and drop',
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
        return view('flowblade::components.forms.file-upload');
    }
}
