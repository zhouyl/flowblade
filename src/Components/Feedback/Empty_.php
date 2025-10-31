<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Empty_ Component
 *
 * Empty state component for displaying no-data or empty collection states.
 * Provides visual feedback with icon, title, description, and optional action buttons.
 *
 * Note: Class name is Empty_ because 'empty' is a reserved keyword in PHP.
 * Registered as <x-empty> in Blade templates.
 */
class Empty_ extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $icon        Optional Iconify icon name for visual representation
     * @param null|string $title       Optional title text (e.g., "No items found")
     * @param null|string $description Optional description text explaining the empty state
     * @param string      $size        Empty state size: 'sm', 'md', 'lg'
     */
    public function __construct(
        public ?string $icon = null,
        public ?string $title = null,
        public ?string $description = null,
        public string $size = 'md',
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
            'flex flex-col items-center justify-center text-center',
            match ($this->size) {
                'sm' => 'py-8 px-4',
                'lg' => 'py-16 px-8',
                default => 'py-12 px-6',
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
        return view('flowblade::components.feedback.empty');
    }
}
