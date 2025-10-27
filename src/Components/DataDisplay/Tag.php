<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Tag Component
 *
 * Tag component for labels and categorization
 */
class Tag extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size     Size: xs, sm, md, lg, xl
     * @param string      $color    Color: primary, secondary, success, warning, danger, info, gray
     * @param string      $variant  Variant: solid, subtle, outline
     * @param null|string $icon     Icon name
     * @param bool        $closable Show close button
     */
    public function __construct(
        public string $size = 'md',
        public string $color = 'gray',
        public string $variant = 'subtle',
        public ?string $icon = null,
        public bool $closable = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.tag');
    }
}
