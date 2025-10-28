<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Illuminate\View\Component;

/**
 * Modal Component
 *
 * Modal dialog overlay for displaying content in a centered popup.
 * Supports various sizes, positions, and backdrop behaviors with Flowbite styling.
 */
class Modal extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $title     Optional modal title
     * @param null|string $size      Modal width: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     * @param null|string $placement Modal position: 'center', 'top-left', 'top-center', 'top-right', 'center-left', 'center-right', 'bottom-left', 'bottom-center', 'bottom-right'
     * @param null|string $backdrop  Backdrop behavior: 'dynamic' (closable on click), 'static' (prevent closing on backdrop click)
     * @param bool        $closable  Whether modal can be closed with ESC key or backdrop click
     * @param bool        $showClose Whether to display close button in header
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
