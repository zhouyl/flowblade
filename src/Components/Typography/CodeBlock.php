<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * CodeBlock Component
 *
 * Multi-line code block component with syntax highlighting support.
 * Features optional language label, title, and line numbers.
 */
class CodeBlock extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $language        Programming language for syntax highlighting
     * @param null|string $title           Optional title/filename to display above code
     * @param bool        $showLineNumbers Whether to display line numbers
     * @param mixed       ...$styleProps   All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $language = null,
        public ?string $title = null,
        public bool $showLineNumbers = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'font-mono',
            'text-sm',
            'p-4',
            'bg-gray-900',
            'text-gray-100',
            'rounded-lg',
            'overflow-x-auto',
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
        return view('flowblade::components.typography.code-block');
    }
}
