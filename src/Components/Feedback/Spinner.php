<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Spinner Component
 *
 * Loading spinner component for displaying loading and processing states.
 * Supports multiple visual variants and colors with accessibility labels.
 */
class Spinner extends Component
{
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
        public ?string $label = 'Loading...'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.spinner');
    }
}
