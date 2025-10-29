<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ChatBubble Component
 *
 * Message bubble component for chat and messaging interfaces.
 * Supports sender/receiver alignment, avatars, timestamps, and read status.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ChatBubble extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $align         Bubble alignment: 'left' (received), 'right' (sent)
     * @param string $color         Bubble color: 'gray', 'blue', 'green', 'red', 'yellow', 'indigo', 'purple', 'pink'
     * @param bool   $avatar        Whether to display sender avatar
     * @param string $avatarSrc     Avatar image URL
     * @param string $name          Sender name
     * @param string $time          Message timestamp text
     * @param bool   $read          Whether message has been read
     * @param bool   $tail          Whether to show speech bubble tail
     * @param mixed  ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $align = 'left',
        public string $color = 'gray',
        public bool $avatar = false,
        public string $avatarSrc = '',
        public string $name = '',
        public string $time = '',
        public bool $read = false,
        public bool $tail = true,
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
            'flex',
            'gap-2',
        ];

        // Alignment
        if ($this->align === 'right') {
            $classes[] = 'flex-row-reverse';
        } else {
            $classes[] = 'flex-row';
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
        return view('flowblade::components.data-display.chat-bubble');
    }
}
