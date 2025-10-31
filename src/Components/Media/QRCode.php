<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * QRCode Component
 *
 * QR code generator component for encoding URLs, text, and other data.
 * Supports multiple formats and error correction levels with consistent styling.
 */
class QRCode extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $data            Data to encode (URL, text, vCard, etc.)
     * @param null|string $size            QR code size: 'xs', 'sm', 'md', 'lg', 'xl', '2xl'
     * @param null|string $format          Output format: 'svg' (vector), 'png' (raster)
     * @param null|string $errorCorrection Error correction level: 'L' (7%), 'M' (15%), 'Q' (25%), 'H' (30%)
     * @param null|string $label           Optional descriptive label displayed below QR code
     * @param bool        $rounded         Whether to apply rounded corners to QR code container
     * @param bool        $border          Whether to display border around QR code
     * @param mixed       ...$styleProps   All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $data = null,
        public ?string $size = 'md',
        public ?string $format = 'svg',
        public ?string $errorCorrection = 'M',
        public ?string $label = null,
        public bool $rounded = true,
        public bool $border = true,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $sizeClass = ComponentHelper::getSizeClasses('qrcode', $this->size) ?? 'w-32 h-32';

        $classes = [
            'flex',
            'flex-col',
            'items-center',
            'justify-center',
            'gap-4',
            $sizeClass,
            $this->rounded ? 'rounded-lg' : '',
            $this->border ? 'border border-gray-200 dark:border-gray-700' : '',
            'bg-white dark:bg-gray-900',
            'p-4',
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
        return view('flowblade::components.media.qrcode');
    }
}
