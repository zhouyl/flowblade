<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * FileUpload Component
 *
 * File upload component with drag and drop support
 */
class FileUpload extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $accept      Accepted file types
     * @param bool        $multiple    Allow multiple files
     * @param bool        $disabled    Disabled state
     * @param bool        $required    Required field
     * @param null|string $maxSize     Max file size (e.g., "5MB")
     * @param null|int    $maxFiles    Max number of files
     * @param bool        $showPreview Show file preview
     * @param null|string $placeholder Placeholder text
     */
    public function __construct(
        public ?string $accept = null,
        public bool $multiple = false,
        public bool $disabled = false,
        public bool $required = false,
        public ?string $maxSize = null,
        public ?int $maxFiles = null,
        public bool $showPreview = true,
        public ?string $placeholder = 'Click to upload or drag and drop'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.file-upload');
    }
}
