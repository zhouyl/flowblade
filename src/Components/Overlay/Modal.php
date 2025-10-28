<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Modal Component
 *
 * Modal dialog component for displaying content in an overlay
 */
class Modal extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title     Modal title (optional)
     * @param null|string $size      Size: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
     * @param null|string $placement Placement: center, top-left, top-center, top-right, center-left, center-right, bottom-left, bottom-center, bottom-right
     * @param null|string $backdrop  Backdrop behavior: dynamic (default), static (prevent closing on backdrop click)
     * @param bool        $closable  Whether the modal can be closed with ESC or backdrop click
     * @param bool        $showClose Whether to show the close button in header
     */
    public function __construct(
        public ?string $title = null,
        public ?string $size = 'md',
        public ?string $placement = 'center',
        public ?string $backdrop = 'dynamic',
        public bool $closable = true,
        public bool $showClose = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.overlay.modal');
    }
}
