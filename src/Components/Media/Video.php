<?php

declare(strict_types=1);

namespace Flowblade\Components\Media;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Video Component
 *
 * HTML5 video player component with enhanced styling and features.
 * Supports standard video attributes with consistent Flowblade styling.
 */
class Video extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $src           Video source URL (MP4, WebM, OGG)
     * @param string $poster        Poster image URL displayed before video plays
     * @param bool   $controls      Whether to display video playback controls
     * @param bool   $autoplay      Whether to autoplay video on load (requires muted for most browsers)
     * @param bool   $loop          Whether to loop video playback
     * @param bool   $muted         Whether to mute video audio
     * @param string $preload       Preload strategy: 'none' (no preload), 'metadata' (preload metadata only), 'auto' (preload entire video)
     * @param string $width         Width Tailwind classes (e.g., 'w-full', 'w-96')
     * @param string $height        Height Tailwind classes (e.g., 'h-auto', 'h-64')
     * @param bool   $rounded       Whether to apply rounded corners
     * @param bool   $border        Whether to display border around video
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
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
        public bool $border = false,
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

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
        return view('flowblade::components.media.video');
    }
}
