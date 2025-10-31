<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Footer Component
 *
 * Footer section component for website pages with optional sticky positioning.
 * Ideal for site-wide footers with copyright, links, and contact information.
 */
class Footer extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param bool  $sticky        Whether footer should be sticky (fixed to bottom of viewport)
     * @param mixed ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public bool $sticky = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $footerConfig = ComponentHelper::config('component_colors.footer', []);

        $classes = [
            'w-full',
            $footerConfig['bg'] ?? 'bg-gray-100',
            $footerConfig['dark_bg'] ?? 'dark:bg-gray-900',
            $footerConfig['border'] ?? 'border-t border-gray-200',
            $footerConfig['dark_border'] ?? 'dark:border-gray-800',
            $this->sticky ? 'sticky bottom-0' : '',
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
        return view('flowblade::components.layout.footer');
    }
}
