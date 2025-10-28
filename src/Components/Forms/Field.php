<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Field Component
 *
 * Form field wrapper with label, helper text, and error message support.
 * Provides consistent styling and layout for form inputs.
 */
class Field extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $label      Field label text
     * @param null|string $helperText Helper text below the input
     * @param null|string $errorText  Error message text
     * @param bool        $required   Whether field is required
     * @param bool        $invalid    Whether field has validation error
     */
    public function __construct(
        public ?string $label = null,
        public ?string $helperText = null,
        public ?string $errorText = null,
        public bool $required = false,
        public bool $invalid = false
    ) {
    }

    /**
     * Get the container classes
     */
    public function containerClasses(): string
    {
        $classes = [
            'mb-4',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the label classes
     */
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

    /**
     * Get the helper text classes
     */
    public function helperTextClasses(): string
    {
        $classes = [
            'mt-1',
            'text-sm',
            'text-gray-600',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the error text classes
     */
    public function errorTextClasses(): string
    {
        $classes = [
            'mt-1',
            'text-sm',
            'text-red-600',
        ];

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.field');
    }
}
