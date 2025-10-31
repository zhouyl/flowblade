<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * HoverCard Component
 *
 * Hover card overlay for displaying rich content on hover with delay.
 * Similar to Popover but specifically optimized for hover interactions.
 */
class HoverCard extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $title     Optional card title
     * @param null|string $content   Optional text content (use slot for rich HTML content)
     * @param string      $placement Card position: 'top', 'right', 'bottom', 'left'
     * @param int         $delay     Delay in milliseconds before showing card (prevents accidental triggers)
     * @param bool        $arrow     Whether to display arrow pointer
     * @param null|string $animation Animation duration in milliseconds: '100', '150', '200', '300', '500', '700', '1000'
     * @param null|int    $offset    Offset distance in pixels from trigger element
     * @param null|string $width     Card width: 'sm' (16rem), 'md' (20rem), 'lg' (24rem), 'xl' (28rem), '2xl' (32rem)
     */
    public function __construct(
        public ?string $title = null,
        public ?string $content = null,
        public string $placement = 'top',
        public int $delay = 300,
        public bool $arrow = true,
        public ?string $animation = '300',
        public ?int $offset = null,
        public ?string $width = 'md',
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
            'absolute z-10 invisible inline-block text-sm font-light text-gray-500 bg-white border border-gray-200',
            ComponentHelper::getRoundedClass('lg'),
            ComponentHelper::getShadowClass('sm'),
            'dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800',
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
        return view('flowblade::components.overlay.hover-card');
    }
}
