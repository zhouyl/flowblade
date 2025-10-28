<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * Avatar Component
 *
 * User profile avatar with image, initials, or icon fallback.
 * Supports multiple sizes and shapes following Flowbite design patterns.
 */
class Avatar extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $size  Avatar size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $src   Image source URL (primary display)
     * @param null|string $name  User name for generating fallback initials
     * @param null|string $icon  Iconify icon name for fallback display
     * @param string      $shape Avatar shape: 'circle', 'square', 'rounded'
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
     * Get initials from user name
     *
     * Extracts first letter of first two words, or first two letters if single word.
     *
     * @return string Uppercase initials (e.g., 'JD' for 'John Doe')
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
