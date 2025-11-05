<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Blockquote Component
 *
 * Styled blockquote component for displaying quoted content.
 * Features colored left border and italic text styling.
 */
class Blockquote extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $color         Border color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $color = 'gray',
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
            'border-l-4',
            'pl-4',
            'py-2',
            'italic',
        ];

        // Border color
        if ($this->color) {
            $colorClasses = ComponentHelper::config("component_colors.blockquote.{$this->color}");

            if ($colorClasses) {
                $classes[] = $colorClasses;
            }
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
        return view('flowblade::components.typography.blockquote');
    }
}
