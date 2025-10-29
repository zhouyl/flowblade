<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Image Component
 *
 * Responsive image component with lazy loading, fallback support, and accessibility features.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class Image extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $src            Image source URL
     * @param string      $alt            Alternative text for accessibility
     * @param null|string $title          Image title attribute
     * @param null|string $width          Image width (CSS value or number)
     * @param null|string $height         Image height (CSS value or number)
     * @param bool        $lazy           Whether to enable lazy loading
     * @param null|string $objectFit      Object fit property: 'contain', 'cover', 'fill', 'scale-down'
     * @param null|string $objectPosition Object position property
     * @param null|string $rounded        Border radius: 'none', 'sm', 'md', 'lg', 'xl', 'full'
     * @param bool        $shadow         Whether to add shadow
     * @param null|string $aspectRatio    Aspect ratio: 'square', 'video', 'auto'
     * @param mixed       ...$styleProps  All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $src,
        public string $alt,
        public ?string $title = null,
        public ?string $width = null,
        public ?string $height = null,
        public bool $lazy = true,
        public ?string $objectFit = 'cover',
        public ?string $objectPosition = 'center',
        public ?string $rounded = 'md',
        public bool $shadow = false,
        public ?string $aspectRatio = null,
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
            'block',
            'max-w-full',
            'h-auto',
        ];

        // Object fit
        if ($this->objectFit) {
            $objectFitMap = [
                'contain' => 'object-contain',
                'cover' => 'object-cover',
                'fill' => 'object-fill',
                'scale-down' => 'object-scale-down',
            ];

            if (isset($objectFitMap[$this->objectFit])) {
                $classes[] = $objectFitMap[$this->objectFit];
            }
        }

        // Object position
        if ($this->objectPosition) {
            $positionMap = [
                'center' => 'object-center',
                'top' => 'object-top',
                'bottom' => 'object-bottom',
                'left' => 'object-left',
                'right' => 'object-right',
            ];

            if (isset($positionMap[$this->objectPosition])) {
                $classes[] = $positionMap[$this->objectPosition];
            }
        }

        // Border radius
        if ($this->rounded) {
            $roundedClasses = ComponentHelper::getRoundedClass($this->rounded);

            if ($roundedClasses) {
                $classes[] = $roundedClasses;
            }
        }

        // Shadow
        if ($this->shadow) {
            $classes[] = 'shadow-md';
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
        return view('flowblade::components.media.image');
    }
}
