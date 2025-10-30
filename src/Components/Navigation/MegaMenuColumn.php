<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * MegaMenuColumn Component
 *
 * Column container within a MegaMenu component.
 * Groups related MegaMenuItem components under a common heading.
 */
class MegaMenuColumn extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $title Column heading or category title
     */
    public function __construct(
        public string $title = '',
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
            'space-y-2',
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
        return view('flowblade::components.navigation.mega-menu-column');
    }
}
