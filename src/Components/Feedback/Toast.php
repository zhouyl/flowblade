<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Toast Component
 *
 * Toast notification component for displaying temporary feedback messages.
 * Auto-dismisses after duration with optional manual close button.
 */
class Toast extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $status      Toast status type: 'success', 'error', 'warning', 'info'
     * @param null|string $title       Optional toast title
     * @param null|string $description Optional toast description or message
     * @param null|string $icon        Optional custom Iconify icon name (auto-selected based on status if null)
     * @param int         $duration    Auto-dismiss duration in milliseconds (0 = no auto-dismiss)
     * @param bool        $closable    Whether toast can be manually closed with close button
     * @param string      $position    Screen position: 'top-right', 'top-left', 'bottom-right', 'bottom-left', 'top-center', 'bottom-center'
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
     *
     * @return string Iconify icon name matching the status type
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
