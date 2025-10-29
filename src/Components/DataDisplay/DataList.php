<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * DataList Component
 *
 * Structured list for displaying key-value pairs or labeled data.
 * Supports horizontal and vertical layouts with optional dividers.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class DataList extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $orientation   Layout orientation: 'horizontal' (label-value side by side), 'vertical' (stacked)
     * @param string      $size          List size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param bool        $divider       Whether to show dividers between items
     * @param null|string $labelWidth    Label column width for horizontal layout (e.g., '1/3', '1/4', 'auto')
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $orientation = 'horizontal',
        public string $size = 'md',
        public bool $divider = false,
        public ?string $labelWidth = null,
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
            'w-full',
        ];

        // Orientation
        if ($this->orientation === 'vertical') {
            $classes[] = 'flex flex-col';
        }

        // Size
        $spacings = [
            'xs' => 'gap-1',
            'sm' => 'gap-2',
            'md' => 'gap-3',
            'lg' => 'gap-4',
            'xl' => 'gap-6',
        ];

        if (isset($spacings[$this->size])) {
            $classes[] = $spacings[$this->size];
        }

        // Divider
        if ($this->divider && $this->orientation === 'vertical') {
            $classes[] = 'divide-y divide-gray-200';
        }

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
        return view('flowblade::components.data-display.data-list');
    }
}
