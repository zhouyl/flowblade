<?php

declare(strict_types=1);

namespace Flowblade\Components\Buttons;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * CloseButton Component
 *
 * Specialized button component for closing modals, dialogs, alerts, and other dismissible elements.
 * Features a consistent X icon with accessible labeling.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class CloseButton extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $size          Button size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param bool        $disabled      Whether button is disabled
     * @param null|string $ariaLabel     Accessible label for screen readers (default: 'Close')
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $size = 'md',
        public bool $disabled = false,
        public ?string $ariaLabel = 'Close',
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
            'rounded-md',
            'text-gray-400',
            'hover:text-gray-500',
            'hover:bg-gray-100',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-2',
            'focus:ring-gray-500',
            'transition',
        ];

        // Size
        $sizeClasses = [
            'xs' => 'p-0.5',
            'sm' => 'p-1',
            'md' => 'p-1.5',
            'lg' => 'p-2',
            'xl' => 'p-2.5',
        ];

        if ($this->size && isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
        }

        // Disabled state
        if ($this->disabled) {
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
     * Get the icon size classes based on button size
     */
    public function iconSize(): string
    {
        $sizeMap = [
            'xs' => 'w-3 h-3',
            'sm' => 'w-4 h-4',
            'md' => 'w-5 h-5',
            'lg' => 'w-6 h-6',
            'xl' => 'w-7 h-7',
        ];

        return $sizeMap[$this->size] ?? 'w-5 h-5';
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.buttons.close-button');
    }
}
