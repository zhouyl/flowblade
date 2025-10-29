<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TreeView Component
 *
 * Hierarchical tree structure container for displaying nested data.
 * Contains TreeViewItem components with expand/collapse functionality.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class TreeView extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $size          Tree view size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
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

        // Size
        $sizeClasses = [
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
        ];

        if (isset($sizeClasses[$this->size])) {
            $classes[] = $sizeClasses[$this->size];
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
        return view('flowblade::components.data-display.tree-view');
    }
}
