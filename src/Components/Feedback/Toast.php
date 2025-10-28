<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Toast Component
 *
 * Toast notification component for displaying temporary messages
 */
class Toast extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $status      Status type: success, error, warning, info
     * @param null|string $title       Toast title
     * @param null|string $description Toast description
     * @param null|string $icon        Custom icon name
     * @param int         $duration    Auto-dismiss duration in milliseconds (0 = no auto-dismiss)
     * @param bool        $closable    Whether the toast can be manually closed
     * @param string      $position    Position: top-right, top-left, bottom-right, bottom-left, top-center, bottom-center
     */
    public function __construct(
        public string $status = 'info',
        public ?string $title = null,
        public ?string $description = null,
        public ?string $icon = null,
        public int $duration = 5000,
        public bool $closable = true,
        public string $position = 'top-right'
    ) {
    }

    /**
     * Get the default icon for the status
     */
    public function getDefaultIcon(): string
    {
        return match ($this->status) {
            'success' => 'heroicons:check-circle',
            'error' => 'heroicons:x-circle',
            'warning' => 'heroicons:exclamation-triangle',
            'info' => 'heroicons:information-circle',
            default => 'heroicons:information-circle',
        };
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.toast');
    }
}
