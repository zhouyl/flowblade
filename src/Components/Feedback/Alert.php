<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Alert Component
 *
 * Alert component for displaying important messages and notifications
 */
class Alert extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $status   Status: info, success, warning, danger
     * @param string      $variant  Variant: solid, subtle, left-accent, top-accent
     * @param string      $size     Size: xs, sm, md, lg, xl
     * @param null|string $title    Alert title
     * @param null|string $icon     Icon name
     * @param bool        $closable Whether the alert can be closed
     */
    public function __construct(
        public string $status = 'info',
        public string $variant = 'subtle',
        public string $size = 'md',
        public ?string $title = null,
        public ?string $icon = null,
        public bool $closable = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.alert');
    }
}
