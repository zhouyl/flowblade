<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Clipboard Component
 *
 * Copy-to-clipboard button with visual feedback and tooltip support.
 * Integrates with Flowbite's clipboard functionality.
 */
class Clipboard extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $target        Target element ID to copy content from
     * @param string $contentType   Content type to copy: 'input' (value), 'innerHTML', or 'textContent'
     * @param bool   $showIcon      Whether to display copy icon
     * @param bool   $showTooltip   Whether to show success tooltip
     * @param string $buttonText    Button text when not using icon
     * @param string $size          Button size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $variant       Button variant: 'primary', 'secondary', 'outline'
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $target,
        public string $contentType = 'input',
        public bool $showIcon = true,
        public bool $showTooltip = true,
        public string $buttonText = 'Copy',
        public string $size = 'md',
        public string $variant = 'primary',
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
        return view('flowblade::components.forms.clipboard');
    }
}
