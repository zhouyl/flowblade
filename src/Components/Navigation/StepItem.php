<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * StepItem Component
 *
 * Individual step item within a Steps component
 */
class StepItem extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title       Step title
     * @param null|string $description Step description
     * @param null|string $status      Status: pending, current, complete
     * @param null|string $icon        Icon name (via Iconify)
     * @param null|int    $number      Step number
     * @param bool        $showIcon    Whether to show icon/checkmark
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
