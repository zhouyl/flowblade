<?php

namespace Flowblade\Components\DataDisplay;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $name;

    public ?string $size;

    public ?string $color;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        ?string $size = null,
        ?string $color = null,
    ) {
        $this->name = $name;
        $this->size = $size ?? ComponentHelper::config('iconify.default_size', '1.2em');
        $this->color = $color;
    }

    /**
     * Get icon classes.
     */
    public function classes(): string
    {
        $classes = 'inline-block';

        if ($this->color) {
            $classes .= ' '.ComponentHelper::getColorClasses($this->color, 'text');
        }

        return $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.data-display.icon');
    }
}
