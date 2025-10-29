<?php

declare(strict_types=1);

namespace Flowblade\Components\Buttons;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Button Component
 *
 * Versatile button component with multiple variants, sizes, and states.
 * Supports icons, loading states, and follows Flowbite design patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Button extends Component
{
    use HasStyleProps;

    public string $color;

    public string $size;

    public string $variant;

    public bool $disabled;

    /**
     * Create a new component instance
     *
     * @param null|string $color         button color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', etc
     * @param null|string $size          Button size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl'
     * @param string      $variant       Button variant: 'solid', 'outline', 'ghost', 'link'
     * @param string      $rounded       Border radius: 'none', 'sm', 'md', 'lg', 'xl', 'full'
     * @param bool        $disabled      Whether button is disabled
     * @param bool        $loading       Whether button is in loading state (also disables button)
     * @param null|string $type          Button type attribute: 'button', 'submit', 'reset'
     * @param null|string $leftIcon      Icon name for left side (Iconify format)
     * @param null|string $rightIcon     Icon name for right side (Iconify format)
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        ?string $color = null,
        ?string $size = null,
        string $variant = 'solid',
        public string $rounded = 'md',
        bool $disabled = false,
        public bool $loading = false,
        public ?string $type = 'button',
        public ?string $leftIcon = null,
        public ?string $rightIcon = null,
        ...$styleProps
    ) {
        $this->color = $color ?? ComponentHelper::config('default_color', 'primary');
        $this->size = $size ?? ComponentHelper::config('default_size', 'md');
        $this->variant = ComponentHelper::parseVariant($variant);
        $this->disabled = $disabled || $this->loading;
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the button classes.
     */
    public function classes(): string
    {
        $baseClasses = 'inline-flex items-center justify-center gap-2 transition-all duration-200';
        $variantClasses = ComponentHelper::getButtonVariantClasses($this->color, $this->variant);
        $sizeClasses = ComponentHelper::getSizeClasses('button', $this->size);
        $roundedClasses = ComponentHelper::getRoundedClass($this->rounded);

        $disabledClasses = $this->disabled ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer';
        $styleClasses = $this->parseStyleProps();

        return ComponentHelper::mergeClasses(
            $baseClasses,
            $variantClasses,
            $sizeClasses,
            $roundedClasses,
            $disabledClasses,
            $styleClasses
        );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.buttons.button');
    }
}
