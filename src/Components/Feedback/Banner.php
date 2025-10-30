<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Banner Component
 *
 * Sticky banner component for announcements, marketing messages, and notifications.
 * Persists across page navigation and can be dismissed by users.
 */
class Banner extends Component
{
    use HasStyleProps;

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
        public bool $dismissible = true,
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
            'fixed left-0 right-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700',
            match ($this->position) {
                'bottom' => 'bottom-0',
                default => 'top-0',
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
        return view('flowblade::components.feedback.banner');
    }
}
