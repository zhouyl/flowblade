<?php

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class ScrollArea extends Component
{
    public function __construct(
        public string $as = 'div',
        public ?string $height = null, // e.g., '400px', '50vh'
        public ?string $maxHeight = null,
        public string $scrollbar = 'auto', // auto, always, hidden
    ) {
    }

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

    public function render()
    {
        return view('flowblade::components.layout.scroll-area');
    }
}
