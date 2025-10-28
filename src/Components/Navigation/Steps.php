<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Steps Component
 *
 * Display step-by-step progress indicator for multi-step processes
 */
class Steps extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $orientation Orientation: horizontal, vertical
     * @param null|string $variant     Variant: default, progress, detailed, breadcrumb
     * @param null|int    $current     Current step index (1-based)
     * @param null|int    $total       Total number of steps
     */
    public function __construct(
        public ?string $orientation = 'horizontal',
        public ?string $variant = 'default',
        public ?int $current = 1,
        public ?int $total = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.steps');
    }
}
