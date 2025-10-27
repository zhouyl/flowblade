<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Avatar Component
 *
 * Avatar component for displaying user profile images
 */
class Avatar extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size  Size: 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
     * @param null|string $src   Image source URL
     * @param null|string $name  Name for fallback initials
     * @param null|string $icon  Icon name for fallback
     * @param string      $shape Shape: circle, square, rounded
     */
    public function __construct(
        public string $size = 'md',
        public ?string $src = null,
        public ?string $name = null,
        public ?string $icon = null,
        public string $shape = 'circle'
    ) {
    }

    /**
     * Get initials from name
     */
    public function getInitials(): string
    {
        if (!$this->name) {
            return '';
        }

        $words = explode(' ', trim($this->name));

        if (count($words) >= 2) {
            return strtoupper(substr($words[0], 0, 1).substr($words[1], 0, 1));
        }

        return strtoupper(substr($this->name, 0, 2));
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.avatar');
    }
}
