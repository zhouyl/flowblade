<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * DeviceMockup Component
 *
 * Device frame mockup component for showcasing app interfaces
 */
class DeviceMockup extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $device      Device type: 'mobile', 'tablet', 'laptop', 'desktop'
     * @param string $orientation Orientation: 'portrait', 'landscape' (mobile/tablet only)
     * @param bool   $dark        Dark mode device frame
     * @param bool   $rounded     Apply rounded corners
     * @param bool   $shadow      Apply shadow effect
     */
    public function __construct(
        public string $device = 'mobile',
        public string $orientation = 'portrait',
        public bool $dark = false,
        public bool $rounded = true,
        public bool $shadow = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.device-mockup');
    }
}
