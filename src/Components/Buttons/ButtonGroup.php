<?php

declare(strict_types=1);

namespace Flowblade\Components\Buttons;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ButtonGroup Component
 *
 * Container component for grouping multiple buttons together.
 * Supports both attached (seamless) and separated layouts in horizontal or vertical orientation.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ButtonGroup extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $orientation   Button layout direction: 'horizontal', 'vertical'
     * @param bool        $attached      Whether buttons are attached (seamless) or separated
     * @param null|string $spacing       Gap between buttons when not attached: 'xs', 'sm', 'md', 'lg'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $orientation = 'horizontal',
        public bool $attached = true,
        public ?string $spacing = null,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        if ($this->attached) {
            // Attached buttons
            if ($this->orientation === 'horizontal') {
                $classes[] = 'inline-flex';
                $classes[] = ComponentHelper::getRoundedClass('md');
                $classes[] = ComponentHelper::getShadowClass('sm');
            } else {
                $classes[] = 'inline-flex';
                $classes[] = 'flex-col';
                $classes[] = ComponentHelper::getRoundedClass('md');
                $classes[] = ComponentHelper::getShadowClass('sm');
            }
        } else {
            // Separated buttons with spacing
            if ($this->orientation === 'horizontal') {
                $classes[] = 'inline-flex';
                $classes[] = 'items-center';
            } else {
                $classes[] = 'inline-flex';
                $classes[] = 'flex-col';
            }

            // Spacing
            if ($this->spacing) {
                $spacingClass = ComponentHelper::getSizeClasses('button_group_spacing', $this->spacing);
                if ($spacingClass) {
                    $classes[] = $spacingClass;
                }
            } else {
                $classes[] = 'gap-2';
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
        return view('flowblade::components.buttons.button-group');
    }
}
