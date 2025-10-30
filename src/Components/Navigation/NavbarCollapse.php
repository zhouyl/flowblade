<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * NavbarCollapse Component
 *
 * Collapsible navigation menu container within a Navbar.
 * Hidden on mobile, toggled by NavbarToggle button.
 */
class NavbarCollapse extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $id Element ID matching NavbarToggle target
     */
    public function __construct(
        public ?string $id = 'navbar-collapse',
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
            'hidden w-full md:block md:w-auto',
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
        return view('flowblade::components.navigation.navbar-collapse');
    }
}
