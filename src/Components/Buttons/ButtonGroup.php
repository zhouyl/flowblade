<?php

namespace Flowblade\Components\Buttons;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class ButtonGroup extends Component
{
    public function __construct(
        public string $orientation = 'horizontal', // horizontal, vertical
        public bool $attached = true,
        public ?string $spacing = null, // xs, sm, md, lg (only when attached=false)
    ) {
    }

    public function classes(): string
    {
        $classes = [];

        if ($this->attached) {
            // Attached buttons
            if ($this->orientation === 'horizontal') {
                $classes[] = 'inline-flex';
                $classes[] = 'rounded-md';
                $classes[] = 'shadow-sm';
            } else {
                $classes[] = 'inline-flex';
                $classes[] = 'flex-col';
                $classes[] = 'rounded-md';
                $classes[] = 'shadow-sm';
            }
        } else {
            // Separated buttons with spacing
            if ($this->orientation === 'horizontal') {
                $classes[] = 'inline-flex';
                $classes[] = 'items-center';
            } else {
                $classes[] = 'inline-flex';
                $classes[] = 'flex-col';
            }

            // Spacing
            if ($this->spacing) {
                $spacingMap = [
                    'xs' => $this->orientation === 'horizontal' ? 'gap-1' : 'gap-1',
                    'sm' => $this->orientation === 'horizontal' ? 'gap-2' : 'gap-2',
                    'md' => $this->orientation === 'horizontal' ? 'gap-3' : 'gap-3',
                    'lg' => $this->orientation === 'horizontal' ? 'gap-4' : 'gap-4',
                ];

                if (isset($spacingMap[$this->spacing])) {
                    $classes[] = $spacingMap[$this->spacing];
                }
            } else {
                $classes[] = $this->orientation === 'horizontal' ? 'gap-2' : 'gap-2';
            }
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function render()
    {
        return view('flowblade::components.buttons.button-group');
    }
}
