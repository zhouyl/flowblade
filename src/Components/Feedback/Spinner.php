<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Spinner Component
 *
 * Spinner component for displaying loading states
 */
class Spinner extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size    Size: xs, sm, md, lg, xl
     * @param string      $color   Color: primary, secondary, success, warning, danger, info, gray, white
     * @param string      $variant Variant: spinner, dots, pulse, ring
     * @param null|string $label   Accessible label for screen readers
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
