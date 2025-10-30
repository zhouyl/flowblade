<?php

declare(strict_types=1);

namespace Flowblade\Components\Feedback;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Alert Component
 *
 * Alert component for displaying important messages and notifications.
 * Supports multiple status types, visual variants, and optional close button.
 */
class Alert extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $status   Alert status type: 'info', 'success', 'warning', 'danger'
     * @param string      $variant  Visual variant: 'solid' (filled), 'subtle' (light background), 'left-accent' (left border), 'top-accent' (top border)
     * @param string      $size     Alert size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $title    Optional alert title
     * @param null|string $icon     Optional Iconify icon name (auto-selected based on status if null)
     * @param bool        $closable Whether alert can be dismissed with close button
     */
    public function __construct(
        public string $status = 'info',
        public string $variant = 'subtle',
        public string $size = 'md',
        public ?string $title = null,
        public ?string $icon = null,
        public bool $closable = false,
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
            'rounded-lg border',
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
        return view('flowblade::components.feedback.alert');
    }
}
