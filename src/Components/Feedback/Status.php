<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Status Component
 *
 * Status indicator component for displaying status with color-coded indicators
 */
class Status extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $status  Status type: online, offline, away, busy, success, warning, danger, info
     * @param string      $variant Variant: dot, badge, pill
     * @param string      $size    Size: xs, sm, md, lg
     * @param null|string $label   Status label text
     * @param bool        $pulse   Whether to show pulse animation
     */
    public function __construct(
        public string $status = 'info',
        public string $variant = 'dot',
        public string $size = 'md',
        public ?string $label = null,
        public bool $pulse = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.status');
    }
}
