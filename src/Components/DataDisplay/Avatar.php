<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Avatar Component
 *
 * User profile avatar with image, initials, or icon fallback.
 * Supports multiple sizes and shapes following Flowbite design patterns.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Avatar extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $size          Avatar size: '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl'
     * @param null|string $src           Image source URL (primary display)
     * @param null|string $name          User name for generating fallback initials
     * @param null|string $icon          Iconify icon name for fallback display
     * @param string      $shape         Avatar shape: 'circle', 'square', 'rounded'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public ?string $src = null,
        public ?string $name = null,
        public ?string $icon = null,
        public string $shape = 'circle',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
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
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'inline-flex',
            'items-center',
            'justify-center',
            'flex-shrink-0',
            'overflow-hidden',
        ];

        // Size - use configuration
        $sizeClasses = ComponentHelper::getSizeClasses('avatar', $this->size);

        if ($sizeClasses) {
            $classes[] = $sizeClasses;
        }

        // Shape
        $shapeClasses = [
            'circle' => ComponentHelper::getRoundedClass('full'),
            'square' => ComponentHelper::getRoundedClass('none'),
            'rounded' => ComponentHelper::getRoundedClass('lg'),
        ];

        if (isset($shapeClasses[$this->shape])) {
            $classes[] = $shapeClasses[$this->shape];
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
        return view('flowblade::components.data-display.avatar');
    }
}
