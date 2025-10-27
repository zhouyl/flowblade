<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class CodeBlock extends Component
{
    public function __construct(
        public ?string $language = null,
        public ?string $title = null,
        public bool $showLineNumbers = false,
    ) {
    }

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

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.typography.code-block');
    }
}
