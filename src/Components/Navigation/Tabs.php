<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Tabs Component
 *
 * Tabs container for organizing content into separate switchable views.
 * Contains TabsList (triggers) and TabsContent (panels) components.
 */
class Tabs extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $variant      Visual variant: 'line' (underline), 'enclosed' (bordered), 'pills' (rounded)
     * @param string      $size         Tab size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $defaultValue Default active tab identifier value
     */
    public function __construct(
        public string $variant = 'line',
        public string $size = 'md',
        public ?string $defaultValue = null,
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
            // Size classes
            match ($this->size) {
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
                default => 'text-base',
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
        return view('flowblade::components.navigation.tabs');
    }
}
