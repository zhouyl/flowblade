<?php

namespace Flowblade\Components\Buttons;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Button extends Component
{
    public string $color;
    public string $size;
    public string $variant;
    public string $rounded;
    public bool $disabled;
    public bool $loading;
    public ?string $type;
    public ?string $leftIcon;
    public ?string $rightIcon;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $color = null,
        string $size = null,
        string $variant = 'solid',
        string $rounded = 'md',
        bool $disabled = false,
        bool $loading = false,
        ?string $type = 'button',
        ?string $leftIcon = null,
        ?string $rightIcon = null,
    ) {
        $this->color = $color ?? ComponentHelper::config('default_color', 'primary');
        $this->size = $size ?? ComponentHelper::config('default_size', 'md');
        $this->variant = ComponentHelper::parseVariant($variant);
        $this->rounded = $rounded;
        $this->disabled = $disabled || $loading;
        $this->loading = $loading;
        $this->type = $type;
        $this->leftIcon = $leftIcon;
        $this->rightIcon = $rightIcon;
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

        return ComponentHelper::mergeClasses(
            $baseClasses,
            $variantClasses,
            $sizeClasses,
            $roundedClasses,
            $disabledClasses
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

