<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * NavbarBrand Component
 *
 * Brand logo and name section within a Navbar.
 * Typically positioned on the left side and links to homepage.
 */
class NavbarBrand extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $href Link URL (typically homepage)
     * @param null|string $logo Logo image URL
     * @param null|string $name Brand name text
     */
    public function __construct(
        public ?string $href = '#',
        public ?string $logo = null,
        public ?string $name = null,
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
            'flex items-center space-x-3 rtl:space-x-reverse',
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
        return view('flowblade::components.navigation.navbar-brand');
    }
}
