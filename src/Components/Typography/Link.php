<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Link Component
 *
 * Styled hyperlink component with automatic external link handling.
 * Supports custom colors and optional underline styling.
 */
class Link extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $href      Link URL
     * @param null|string $color     Link color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info'
     * @param bool        $underline Whether to show underline
     * @param bool        $external  Whether link opens in new tab (adds target="_blank" and rel="noopener noreferrer")
     */
    public function __construct(
        public ?string $href = null,
        public ?string $color = 'primary',
        public bool $underline = true,
        public bool $external = false,
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Color
        if ($this->color) {
            $colorClasses = ComponentHelper::getColorClasses($this->color, 'text');

            if ($colorClasses) {
                $classes[] = $colorClasses;
            }
        }

        // Underline
        if ($this->underline) {
            $classes[] = 'underline';
        }

        // Hover effect
        $classes[] = 'hover:opacity-80';
        $classes[] = 'transition';

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get additional HTML attributes for the link
     */
    public function attributes(): array
    {
        $attrs = [];

        if ($this->href) {
            $attrs['href'] = $this->href;
        }

        if ($this->external) {
            $attrs['target'] = '_blank';
            $attrs['rel'] = 'noopener noreferrer';
        }

        return $attrs;
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.link');
    }
}
