<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Label Component
 *
 * Semantic label component for form inputs with support for required indicators,
 * sizing, and styling options following Flowbite patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Label extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $for           The ID of the input element this label is for
     * @param bool        $required      Whether to show a required indicator
     * @param null|string $size          Label size: 'sm', 'md', 'lg'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $for = null,
        public bool $required = false,
        public ?string $size = 'md',
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
            'block',
            'font-medium',
            'text-gray-900',
        ];

        // Size
        $sizeClasses = [
            'sm' => 'text-sm',
            'md' => 'text-sm',
            'lg' => 'text-base',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

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
        return view('flowblade::components.forms.label');
    }
}
