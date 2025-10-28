<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Banner Component
 *
 * Sticky banner for announcements, marketing messages, and notifications
 */
class Banner extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $id          Unique identifier for the banner (required for dismissible banners)
     * @param string $position    Position of the banner (top or bottom)
     * @param bool   $dismissible Whether the banner can be dismissed
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
