<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ListGroup Component
 *
 * Container for displaying a series of items, buttons, or links following Flowbite patterns.
 * Contains ListGroupItem components with consistent styling.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ListGroup extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $as            HTML element type: 'ul' (unordered list) or 'div' (generic container)
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $as = 'ul',
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
            'w-48',
            'text-sm',
            'font-medium',
            'text-gray-900',
            'bg-white',
            'border',
            'border-gray-200',
            'rounded-lg',
            'dark:bg-gray-700',
            'dark:border-gray-600',
            'dark:text-white',
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
        return view('flowblade::components.data-display.list-group');
    }
}
