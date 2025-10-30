<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Status Component
 *
 * Status indicator component for displaying color-coded status states.
 * Commonly used for user presence, system health, and item states.
 */
class Status extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $status  Status type: 'online', 'offline', 'away', 'busy', 'success', 'warning', 'danger', 'info'
     * @param string      $variant Visual variant: 'dot' (small circle), 'badge' (with background), 'pill' (rounded badge)
     * @param string      $size    Status indicator size: 'xs', 'sm', 'md', 'lg'
     * @param null|string $label   Optional status label text
     * @param bool        $pulse   Whether to display pulse animation (e.g., for 'online' status)
     */
    public function __construct(
        public string $status = 'info',
        public string $variant = 'dot',
        public string $size = 'md',
        public ?string $label = null,
        public bool $pulse = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'inline-flex items-center',
            match ($this->size) {
                'xs' => 'gap-1',
                'sm' => 'gap-1.5',
                'lg' => 'gap-3',
                default => 'gap-2',
            },
        ];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.status');
    }
}
