<?php

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Container Component
 *
 * A responsive container component that centers content and applies max-width constraints.
 */
class Container extends Component
{
    public string $maxWidth;

    public bool $centerContent;

    public ?string $px;

    public ?string $py;

    /**
     * Create a new component instance.
     *
     * @param null|string $maxWidth      Maximum width (sm, md, lg, xl, 2xl, 3xl, 4xl, full)
     * @param bool        $centerContent Whether to center content
     * @param null|string $px            Horizontal padding
     * @param null|string $py            Vertical padding
     */
    public function __construct(
        ?string $maxWidth = null,
        bool $centerContent = true,
        ?string $px = null,
        ?string $py = null,
    ) {
        $this->maxWidth = $maxWidth ?? '7xl';
        $this->centerContent = $centerContent;
        $this->px = $px ?? '4';
        $this->py = $py;
    }

    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [];

        // Container base
        if ($this->centerContent) {
            $classes[] = 'mx-auto';
        }

        // Max width
        $maxWidthMap = [
            'sm' => 'max-w-screen-sm',
            'md' => 'max-w-screen-md',
            'lg' => 'max-w-screen-lg',
            'xl' => 'max-w-screen-xl',
            '2xl' => 'max-w-screen-2xl',
            '3xl' => 'max-w-7xl',
            '4xl' => 'max-w-full',
            '5xl' => 'max-w-full',
            '6xl' => 'max-w-full',
            '7xl' => 'max-w-7xl',
            'full' => 'max-w-full',
        ];

        if (isset($maxWidthMap[$this->maxWidth])) {
            $classes[] = $maxWidthMap[$this->maxWidth];
        }

        // Padding
        if ($this->px) {
            $classes[] = "px-{$this->px}";
        }

        if ($this->py) {
            $classes[] = "py-{$this->py}";
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.layout.container');
    }
}
