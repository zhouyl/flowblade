<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * EmptyState Component
 *
 * Empty state component for displaying empty or no-data states
 */
class EmptyState extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $icon        Icon name for the empty state
     * @param null|string $title       Title text
     * @param null|string $description Description text
     * @param string      $size        Size: sm, md, lg
     */
    public function __construct(
        public ?string $icon = null,
        public ?string $title = null,
        public ?string $description = null,
        public string $size = 'md'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.empty-state');
    }
}
