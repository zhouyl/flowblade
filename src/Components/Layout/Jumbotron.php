<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Layout;

use Illuminate\View\Component;

/**
 * Jumbotron Component
 *
 * Large showcase section for hero areas and landing pages
 */
class Jumbotron extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size       Size: 'sm', 'md', 'lg', 'xl'
     * @param string $align      Text alignment: 'left', 'center', 'right'
     * @param bool   $fullWidth  Full width without container
     * @param string $bgImage    Background image URL
     * @param string $bgGradient Background gradient classes
     * @param string $overlay    Overlay opacity: 'none', 'light', 'medium', 'dark'
     */
    public function __construct(
        public string $size = 'lg',
        public string $align = 'center',
        public bool $fullWidth = false,
        public string $bgImage = '',
        public string $bgGradient = '',
        public string $overlay = 'none'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.jumbotron');
    }
}
