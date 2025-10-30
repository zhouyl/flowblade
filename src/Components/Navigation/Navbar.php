<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Navbar Component
 *
 * Responsive navigation bar container with brand, links, and mobile menu support.
 * Contains NavbarBrand, NavbarToggle, NavbarCollapse, and NavbarLink components.
 */
class Navbar extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $variant Visual variant: 'default' (transparent), 'solid' (background color)
     * @param bool        $sticky  Whether navbar sticks to top on scroll
     * @param bool        $border  Whether to display bottom border
     */
    public function __construct(
        public ?string $variant = 'default',
        public bool $sticky = false,
        public bool $border = true,
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
            // Variant classes
            match ($this->variant) {
                'solid' => 'bg-gray-50 dark:bg-gray-800',
                default => 'bg-white dark:bg-gray-900',
            },
        ];

        // Border class
        if ($this->border) {
            $classes[] = 'border-b border-gray-200 dark:border-gray-700';
        }

        // Sticky class
        if ($this->sticky) {
            $classes[] = 'sticky top-0 z-50';
        }

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
        return view('flowblade::components.navigation.navbar');
    }
}
