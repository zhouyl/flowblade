<?php

namespace Flowblade\Components\Buttons;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class IconButton extends Component
{
    public function __construct(
        public string $icon,
        public ?string $size = 'md', // 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
        public ?string $variant = 'solid', // solid, outline, ghost, link
        public ?string $color = 'primary',
        public bool $rounded = false,
        public bool $disabled = false,
        public bool $loading = false,
        public string $type = 'button',
        public ?string $ariaLabel = null,
    ) {
    }

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
            $classes[] = 'rounded-full';
        } else {
            $classes[] = 'rounded-md';
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

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.buttons.icon-button');
    }
}
