<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * MegaMenu Component
 *
 * Large dropdown menu with multi-column layout for complex navigation.
 * Contains MegaMenuColumn components organizing MegaMenuItem components.
 */
class MegaMenu extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $trigger Activation trigger: 'click', 'hover'
     * @param string $width   Menu width: 'sm', 'md', 'lg', 'xl', 'full'
     * @param int    $columns Number of columns in grid layout (1-4)
     * @param string $id      Unique identifier (auto-generated if empty)
     */
    public function __construct(
        public string $trigger = 'hover',
        public string $width = 'full',
        public int $columns = 3,
        public string $id = '',
        ...$styleProps
    ) {
        if (empty($this->id)) {
            $this->id = 'mega-menu-'.uniqid();
        }
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'absolute top-full left-0 z-50 hidden bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700',
            match ($this->width) {
                'sm' => 'w-64',
                'md' => 'w-96',
                'lg' => 'w-full md:w-screen-lg',
                'xl' => 'w-full md:w-screen-xl',
                default => 'w-full',
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
        return view('flowblade::components.navigation.mega-menu');
    }
}
