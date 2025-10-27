<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public ?string $href = null,
        public ?string $color = 'primary',
        public bool $underline = true,
        public bool $external = false,
    ) {}

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

    public function render()
    {
        return view('flowblade::components.typography.link');
    }
}

