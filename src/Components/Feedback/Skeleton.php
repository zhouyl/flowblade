<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Feedback;

use Illuminate\View\Component;

/**
 * Skeleton Component
 *
 * Loading placeholder component that mimics content structure
 */
class Skeleton extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $type    Type: text, image, video, card, avatar, button, circle, rectangle
     * @param null|string $width   Width class (e.g., 'w-48', 'w-full')
     * @param null|string $height  Height class (e.g., 'h-4', 'h-48')
     * @param null|int    $lines   Number of lines for text type
     * @param bool        $animate Whether to animate with pulse effect
     * @param bool        $rounded Whether to use rounded corners
     */
    public function __construct(
        public ?string $type = 'text',
        public ?string $width = null,
        public ?string $height = null,
        public ?int $lines = 3,
        public bool $animate = true,
        public bool $rounded = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.feedback.skeleton');
    }
}
