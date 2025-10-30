<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Link Component
 *
 * Styled hyperlink component with automatic external link handling.
 * Supports custom colors and optional underline styling.
 */
class Link extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $href          Link URL
     * @param null|string $color         Link color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info'
     * @param bool        $underline     Whether to show underline
     * @param bool        $external      Whether link opens in new tab (adds target="_blank" and rel="noopener noreferrer")
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $href = null,
        public ?string $color = 'primary',
        public bool $underline = true,
        public bool $external = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
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

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

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
