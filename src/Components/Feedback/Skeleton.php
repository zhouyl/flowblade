<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Skeleton Component
 *
 * Loading placeholder component that mimics content structure during data loading.
 * Provides visual feedback while content is being fetched or processed.
 */
class Skeleton extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $type    Skeleton type: 'text', 'image', 'video', 'card', 'avatar', 'button', 'circle', 'rectangle'
     * @param null|string $width   Width Tailwind class (e.g., 'w-48', 'w-full')
     * @param null|string $height  Height Tailwind class (e.g., 'h-4', 'h-48')
     * @param null|int    $lines   Number of text lines to display (only for 'text' type)
     * @param bool        $animate Whether to display pulse animation effect
     * @param bool        $rounded Whether to use rounded corners
     */
    public function __construct(
        public ?string $type = 'text',
        public ?string $width = null,
        public ?string $height = null,
        public ?int $lines = 3,
        public bool $animate = true,
        public bool $rounded = true,
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
            'bg-gray-200 dark:bg-gray-700',
            $this->animate ? 'animate-pulse' : '',
            $this->rounded ? 'rounded' : '',
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
        return view('flowblade::components.feedback.skeleton');
    }
}
