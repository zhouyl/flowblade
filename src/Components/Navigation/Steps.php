<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Steps Component
 *
 * Step-by-step progress indicator container for multi-step processes.
 * Contains StepItem components showing completion status and navigation.
 */
class Steps extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $orientation Layout orientation: 'horizontal', 'vertical'
     * @param null|string $variant     Visual variant: 'default', 'progress' (with progress bar), 'detailed' (with descriptions), 'breadcrumb' (compact)
     * @param null|int    $current     Current active step index (1-based)
     * @param null|int    $total       Total number of steps (null to auto-detect from children)
     */
    public function __construct(
        public ?string $orientation = 'horizontal',
        public ?string $variant = 'default',
        public ?int $current = 1,
        public ?int $total = null,
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
            match ($this->orientation) {
                'vertical' => 'flex flex-col',
                default => 'flex flex-row',
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
        return view('flowblade::components.navigation.steps');
    }
}
