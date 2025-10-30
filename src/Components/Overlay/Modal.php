<?php

declare(strict_types=1);

namespace Flowblade\Components\Overlay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Modal Component
 *
 * Modal dialog overlay for displaying content in a centered popup.
 * Supports various sizes, positions, and backdrop behaviors with Flowbite styling.
 */
class Modal extends Component
{
    use HasStyleProps;

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
        public bool $showClose = true,
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
            'hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full',
        ];

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
        return view('flowblade::components.overlay.modal');
    }
}
