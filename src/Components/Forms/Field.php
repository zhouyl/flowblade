<?php

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Field extends Component
{
    public function __construct(
        public ?string $label = null,
        public ?string $helperText = null,
        public ?string $errorText = null,
        public bool $required = false,
        public bool $invalid = false
    ) {
    }

    public function containerClasses(): string
    {
        $classes = [
            'mb-4',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function labelClasses(): string
    {
        $classes = [
            'block',
            'text-sm',
            'font-medium',
            'mb-1',
        ];

        if ($this->invalid) {
            $classes[] = 'text-red-700';
        } else {
            $classes[] = 'text-gray-700';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function helperTextClasses(): string
    {
        $classes = [
            'mt-1',
            'text-sm',
            'text-gray-600',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function errorTextClasses(): string
    {
        $classes = [
            'mt-1',
            'text-sm',
            'text-red-600',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.forms.field');
    }
}
