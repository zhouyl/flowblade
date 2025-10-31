<?php

declare(strict_types=1);

namespace Flowblade\Components\Buttons;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * IconButton Component
 *
 * Compact button component designed specifically for icons.
 * Perfect for toolbars, action menus, and space-constrained interfaces.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class IconButton extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $icon          Icon name in Iconify format (e.g., 'mdi:pencil')
     * @param null|string $size          Button size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $variant       Button variant: 'solid', 'outline', 'ghost', 'link'
     * @param null|string $color         Button color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info'
     * @param bool        $rounded       Whether to use fully rounded (circular) shape
     * @param bool        $disabled      Whether button is disabled
     * @param bool        $loading       Whether button is in loading state
     * @param string      $type          Button type attribute: 'button', 'submit', 'reset'
     * @param null|string $ariaLabel     Accessible label for screen readers
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $icon,
        public ?string $size = 'md',
        public ?string $variant = 'solid',
        public ?string $color = 'primary',
        public bool $rounded = false,
        public bool $disabled = false,
        public bool $loading = false,
        public string $type = 'button',
        public ?string $ariaLabel = null,
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
            'inline-flex',
            'items-center',
            'justify-center',
            'font-medium',
            'transition',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-2',
        ];

        // Size
        $sizeClasses = ComponentHelper::config('sizes.icon_button', [
            '2xs' => 'p-0.5 text-xs',
            'xs' => 'p-1 text-xs',
            'sm' => 'p-1.5 text-sm',
            'md' => 'p-2 text-base',
            'lg' => 'p-2.5 text-lg',
            'xl' => 'p-3 text-xl',
            '2xl' => 'p-3.5 text-2xl',
            '3xl' => 'p-4 text-3xl',
            '4xl' => 'p-5 text-4xl',
        ]);

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Rounded
        if ($this->rounded) {
            $classes[] = ComponentHelper::getRoundedClass('full');
        } else {
            $classes[] = ComponentHelper::getRoundedClass('md');
        }

        // Variant & Color
        $variantClasses = ComponentHelper::getButtonVariantClasses($this->variant, $this->color);

        if ($variantClasses) {
            $classes[] = $variantClasses;
        }

        // Disabled state
        if ($this->disabled || $this->loading) {
            $classes[] = 'opacity-50 cursor-not-allowed';
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
        return view('flowblade::components.buttons.icon-button');
    }
}
