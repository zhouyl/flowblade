<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * SpeedDial Component
 *
 * Floating action button group with expand/collapse animation.
 * Contains SpeedDialItem components for quick access to common actions.
 */
class SpeedDial extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $position Screen position: 'bottom-right', 'bottom-left', 'top-right', 'top-left'
     * @param string $trigger  Activation trigger: 'click', 'hover'
     * @param string $tooltip  Tooltip position for items: 'left', 'right', 'top', 'bottom'
     * @param string $id       Unique identifier (auto-generated if empty)
     */
    public function __construct(
        public string $position = 'bottom-right',
        public string $trigger = 'click',
        public string $tooltip = 'left',
        public string $id = '',
        ...$styleProps
    ) {
        if (empty($this->id)) {
            $this->id = 'speed-dial-'.uniqid();
        }
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'fixed flex flex-col items-center justify-center gap-2',
            match ($this->position) {
                'bottom-left' => 'bottom-6 left-6',
                'top-right' => 'top-6 right-6',
                'top-left' => 'top-6 left-6',
                default => 'bottom-6 right-6',
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
        return view('flowblade::components.navigation.speed-dial');
    }
}
