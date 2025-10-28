<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * StepItem Component
 *
 * Individual step within a Steps progress indicator.
 * Displays step number, title, description, and completion status.
 */
class StepItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title       Step title or label
     * @param null|string $description Optional step description or details
     * @param null|string $status      Step status: 'pending' (not started), 'current' (active), 'complete' (finished)
     * @param null|string $icon        Optional Iconify icon name (overrides default number/checkmark)
     * @param null|int    $number      Step number (auto-generated if null)
     * @param bool        $showIcon    Whether to display icon or checkmark for completed steps
     */
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?string $status = 'pending',
        public ?string $icon = null,
        public ?int $number = null,
        public bool $showIcon = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.step-item');
    }
}
