<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Media;

use Illuminate\View\Component;

/**
 * Video Component
 *
 * HTML5 video player component with enhanced features
 */
class Video extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $src      Video source URL
     * @param string $poster   Poster image URL
     * @param bool   $controls Show video controls
     * @param bool   $autoplay Autoplay video
     * @param bool   $loop     Loop video
     * @param bool   $muted    Mute video
     * @param string $preload  Preload option: 'none', 'metadata', 'auto'
     * @param string $width    Width classes
     * @param string $height   Height classes
     * @param bool   $rounded  Apply rounded corners
     * @param bool   $border   Apply border
     */
    public function __construct(
        public string $src = '',
        public string $poster = '',
        public bool $controls = true,
        public bool $autoplay = false,
        public bool $loop = false,
        public bool $muted = false,
        public string $preload = 'metadata',
        public string $width = 'w-full',
        public string $height = 'h-auto',
        public bool $rounded = false,
        public bool $border = false
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.media.video');
    }
}
