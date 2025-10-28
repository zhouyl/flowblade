<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Tabs Component
 *
 * Tabs container for organizing content into separate switchable views.
 * Contains TabsList (triggers) and TabsContent (panels) components.
 */
class Tabs extends Component
{
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
        public ?string $defaultValue = null
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.tabs');
    }
}
