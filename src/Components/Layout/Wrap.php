<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Wrap Component
 *
 * Flexbox layout with automatic wrapping for responsive layouts.
 * Perfect for tag lists, chip collections, and responsive grids.
 */
class Wrap extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $as       HTML element to render (default: 'div')
     * @param null|string $spacing  Gap between items: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $spacingX Horizontal gap
     * @param null|string $spacingY Vertical gap
     * @param null|string $align    Align items: 'start', 'center', 'end', 'stretch', 'baseline'
     * @param null|string $justify  Justify content: 'start', 'center', 'end', 'between', 'around', 'evenly'
     */
    public function __construct(
        public string $as = 'div',
        public ?string $spacing = null,
        public ?string $spacingX = null,
        public ?string $spacingY = null,
        public ?string $align = null,
        public ?string $justify = null,
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'flex',
            'flex-wrap',
        ];

        // Align items
        if ($this->align) {
            $alignMap = [
                'start' => 'items-start',
                'center' => 'items-center',
                'end' => 'items-end',
                'stretch' => 'items-stretch',
                'baseline' => 'items-baseline',
            ];

            if (isset($alignMap[$this->align])) {
                $classes[] = $alignMap[$this->align];
            }
        }

        // Justify content
        if ($this->justify) {
            $justifyMap = [
                'start' => 'justify-start',
                'center' => 'justify-center',
                'end' => 'justify-end',
                'between' => 'justify-between',
                'around' => 'justify-around',
                'evenly' => 'justify-evenly',
            ];

            if (isset($justifyMap[$this->justify])) {
                $classes[] = $justifyMap[$this->justify];
            }
        }

        // Handle spacing
        $spacingMap = ComponentHelper::config('sizes.spacing', []);

        if ($this->spacingX && isset($spacingMap[$this->spacingX])) {
            $classes[] = "gap-x-{$spacingMap[$this->spacingX]}";
        }

        if ($this->spacingY && isset($spacingMap[$this->spacingY])) {
            $classes[] = "gap-y-{$spacingMap[$this->spacingY]}";
        }

        if ($this->spacing && !$this->spacingX && !$this->spacingY && isset($spacingMap[$this->spacing])) {
            $classes[] = "gap-{$spacingMap[$this->spacing]}";
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.wrap');
    }
}
