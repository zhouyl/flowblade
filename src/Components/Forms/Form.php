<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Form Component
 *
 * Wrapper component for form elements with built-in support for validation,
 * error handling, and consistent styling. Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Form extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $method        HTTP method: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE'
     * @param string      $action        Form action URL
     * @param bool        $novalidate    Whether to disable HTML5 validation
     * @param null|string $enctype       Form encoding type: 'application/x-www-form-urlencoded', 'multipart/form-data'
     * @param null|string $spacing       Spacing between form elements: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param bool        $inline        Whether to display form elements inline
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $method = 'POST',
        public string $action = '',
        public bool $novalidate = false,
        public ?string $enctype = null,
        public ?string $spacing = 'md',
        public bool $inline = false,
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
            'w-full',
        ];

        // Spacing between form elements
        $spacingClasses = [
            'xs' => 'space-y-2',
            'sm' => 'space-y-3',
            'md' => 'space-y-4',
            'lg' => 'space-y-6',
            'xl' => 'space-y-8',
        ];

        if ($this->spacing && isset($spacingClasses[$this->spacing])) {
            $classes[] = $spacingClasses[$this->spacing];
        }

        // Inline layout
        if ($this->inline) {
            $classes[] = 'flex flex-wrap gap-4 items-end';
        }

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the actual form method for the form tag
     */
    public function getFormMethod(): string
    {
        $method = strtoupper($this->method);

        // HTML forms only support GET and POST
        if (in_array($method, ['GET', 'POST'])) {
            return $method;
        }

        // For other methods, use POST with method spoofing
        return 'POST';
    }

    /**
     * Check if method spoofing is needed
     */
    public function needsMethodSpoofing(): bool
    {
        $method = strtoupper($this->method);

        return !in_array($method, ['GET', 'POST']);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.form');
    }
}
