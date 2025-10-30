<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Spinner Component
 *
 * Loading spinner component for displaying loading and processing states.
 * Supports multiple visual variants and colors with accessibility labels.
 */
class Spinner extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size    Spinner size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string      $color   Spinner color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray', 'white'
     * @param string      $variant Visual variant: 'spinner' (circular), 'dots' (bouncing dots), 'pulse' (pulsing circle), 'ring' (ring spinner)
     * @param null|string $label   Accessible label for screen readers (important for accessibility)
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'primary',
        public string $variant = 'spinner',
        public ?string $label = 'Loading...',
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
            'inline-block',
            match ($this->size) {
                'xs' => 'w-4 h-4',
                'sm' => 'w-6 h-6',
                'lg' => 'w-10 h-10',
                'xl' => 'w-12 h-12',
                default => 'w-8 h-8',
            },
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
        return view('flowblade::components.feedback.spinner');
    }
}
