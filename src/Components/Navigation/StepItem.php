<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * StepItem Component
 *
 * Individual step within a Steps progress indicator.
 * Displays step number, title, description, and completion status.
 */
class StepItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $title       Step title or label
     * @param null|string $description Optional step description or details
     * @param null|string $status      Step status: 'pending' (not started), 'current' (active), 'complete' (finished)
     * @param null|string $icon        Optional Iconify icon name (overrides default number/checkmark)
     * @param null|int    $number      Step number (auto-generated if null)
     * @param bool        $showIcon    Whether to display icon or checkmark for completed steps
     */
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?string $status = 'pending',
        public ?string $icon = null,
        public ?int $number = null,
        public bool $showIcon = true,
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
            'flex items-center',
        ];

        // Status-based styling
        $classes[] = match ($this->status) {
            'complete' => 'text-blue-600 dark:text-blue-500',
            'current' => 'text-blue-600 dark:text-blue-500',
            default => 'text-gray-500 dark:text-gray-400',
        };

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
        return view('flowblade::components.navigation.step-item');
    }
}
