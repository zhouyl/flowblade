<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Jumbotron Component
 *
 * Large showcase section component for hero areas, landing pages, and featured content.
 * Supports background images, gradients, and overlays for stunning visual presentations.
 */
class Jumbotron extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $size          Size: 'sm', 'md', 'lg', 'xl'
     * @param string $align         Text alignment: 'left', 'center', 'right'
     * @param bool   $fullWidth     Whether to use full width without container padding
     * @param string $bgImage       Background image URL
     * @param string $bgGradient    Background gradient Tailwind classes
     * @param string $overlay       Overlay opacity: 'none', 'light', 'medium', 'dark'
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'lg',
        public string $align = 'center',
        public bool $fullWidth = false,
        public string $bgImage = '',
        public string $bgGradient = '',
        public string $overlay = 'none',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $sizeMap = [
            'sm' => 'py-8 px-4',
            'md' => 'py-12 px-6',
            'lg' => 'py-16 px-8',
            'xl' => 'py-24 px-12',
        ];

        $alignMap = [
            'left' => 'text-left',
            'center' => 'text-center',
            'right' => 'text-right',
        ];

        $overlayMap = [
            'none' => '',
            'light' => 'bg-black/10',
            'medium' => 'bg-black/30',
            'dark' => 'bg-black/50',
        ];

        $classes = [
            'w-full',
            'relative',
            'overflow-hidden',
            'bg-gray-100 dark:bg-gray-900',
            $sizeMap[$this->size] ?? $sizeMap['lg'],
            $alignMap[$this->align] ?? $alignMap['center'],
            $overlayMap[$this->overlay] ?? '',
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
        return view('flowblade::components.layout.jumbotron');
    }
}
