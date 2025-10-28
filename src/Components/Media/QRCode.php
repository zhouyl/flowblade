<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * QRCode Component
 *
 * Display QR codes with consistent styling and sizing
 */
class QRCode extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $data            Data to encode (URL, text, etc.)
     * @param null|string $size            Size: xs, sm, md, lg, xl, 2xl
     * @param null|string $format          Format: svg, png (default: svg)
     * @param null|string $errorCorrection Error correction level: L, M, Q, H (default: M)
     * @param null|string $label           Optional label below QR code
     * @param bool        $rounded         Whether to use rounded corners
     * @param bool        $border          Whether to show border
     */
    public function __construct(
        public ?string $data = null,
        public ?string $size = 'md',
        public ?string $format = 'svg',
        public ?string $errorCorrection = 'M',
        public ?string $label = null,
        public bool $rounded = true,
        public bool $border = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.qrcode');
    }
}
