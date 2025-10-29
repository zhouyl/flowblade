<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * CardHeader Component
 *
 * Card header section for displaying titles, subtitles, and action buttons.
 * Typically used as the first child of a Card component.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class CardHeader extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param mixed ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(...$styleProps)
    {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'px-4',
            'py-3',
            'border-b',
            'border-gray-200',
            'dark:border-gray-700',
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
        return view('flowblade::components.data-display.card-header');
    }
}
