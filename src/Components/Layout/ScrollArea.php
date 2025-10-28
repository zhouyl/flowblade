<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * ScrollArea Component
 *
 * Scrollable container with customizable scrollbar styling.
 * Perfect for content areas that need overflow handling with custom scrollbars.
 */
class ScrollArea extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as        HTML element to render (default: 'div')
     * @param null|string $height    Fixed height (e.g., '400px', '50vh')
     * @param null|string $maxHeight Maximum height (e.g., '600px', '80vh')
     * @param string      $scrollbar Scrollbar visibility: 'auto', 'always', 'hidden'
     */
    public function __construct(
        public string $as = 'div',
        public ?string $height = null,
        public ?string $maxHeight = null,
        public string $scrollbar = 'auto',
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Overflow behavior based on scrollbar setting
        if ($this->scrollbar === 'hidden') {
            $classes[] = 'overflow-hidden';
        } elseif ($this->scrollbar === 'always') {
            $classes[] = 'overflow-auto';
        } else {
            // auto
            $classes[] = 'overflow-auto';
        }

        // Custom scrollbar styling
        if ($this->scrollbar !== 'hidden') {
            $classes[] = 'scrollbar-thin';
            $classes[] = 'scrollbar-thumb-gray-400';
            $classes[] = 'scrollbar-track-gray-100';
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get inline styles for height constraints
     */
    public function styles(): ?string
    {
        $styles = [];

        if ($this->height) {
            $styles[] = "height: {$this->height}";
        }

        if ($this->maxHeight) {
            $styles[] = "max-height: {$this->maxHeight}";
        }

        return !empty($styles) ? implode('; ', $styles).';' : null;
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.scroll-area');
    }
}
