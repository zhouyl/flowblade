<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * EmptyState Component
 *
 * Empty state component for displaying no-data or empty collection states.
 * Provides visual feedback with icon, title, description, and optional action buttons.
 */
class EmptyState extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $icon        Optional Iconify icon name for visual representation
     * @param null|string $title       Optional title text (e.g., "No items found")
     * @param null|string $description Optional description text explaining the empty state
     * @param string      $size        Empty state size: 'sm', 'md', 'lg'
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
