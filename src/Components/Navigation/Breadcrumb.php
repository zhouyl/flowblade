<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Breadcrumb Component
 *
 * Breadcrumb navigation container for displaying page hierarchy and navigation path.
 * Contains BreadcrumbItem components with customizable separators.
 */
class Breadcrumb extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size      Breadcrumb size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param null|string $separator Custom separator character or Iconify icon name (null for default '/')
     */
    public function __construct(
        public string $size = 'md',
        public ?string $separator = null,
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
            'flex items-center',
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
        return view('flowblade::components.navigation.breadcrumb');
    }
}
