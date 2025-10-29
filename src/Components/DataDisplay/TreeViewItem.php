<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * TreeViewItem Component
 *
 * Individual node within a TreeView component.
 * Supports nesting, icons, and expand/collapse states.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class TreeViewItem extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $label         Node label text
     * @param null|string $icon          Optional Iconify icon name
     * @param bool        $expanded      Whether node is expanded by default
     * @param bool        $hasChildren   Whether node has child items (shows expand/collapse icon)
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $label = null,
        public ?string $icon = null,
        public bool $expanded = false,
        public bool $hasChildren = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

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
        return view('flowblade::components.data-display.tree-view-item');
    }
}
