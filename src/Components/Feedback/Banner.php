<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Banner Component
 *
 * Sticky banner component for announcements, marketing messages, and notifications.
 * Persists across page navigation and can be dismissed by users.
 */
class Banner extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id          Unique identifier for the banner (required for dismissible banners to remember dismissal state)
     * @param string $position    Banner position: 'top' (top of page), 'bottom' (bottom of page)
     * @param bool   $dismissible Whether banner can be dismissed with close button
     */
    public function __construct(
        public string $id = 'banner',
        public string $position = 'top',
        public bool $dismissible = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.banner');
    }
}
