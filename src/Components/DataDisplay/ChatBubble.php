<?php

declare(strict_types=1);

namespace Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ChatBubble Component
 *
 * Message bubble component for chat and messaging interfaces.
 * Supports sender/receiver alignment, avatars, timestamps, and read status.
 */
class ChatBubble extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $align     Bubble alignment: 'left' (received), 'right' (sent)
     * @param string $color     Bubble color: 'gray', 'blue', 'green', 'red', 'yellow', 'indigo', 'purple', 'pink'
     * @param bool   $avatar    Whether to display sender avatar
     * @param string $avatarSrc Avatar image URL
     * @param string $name      Sender name
     * @param string $time      Message timestamp text
     * @param bool   $read      Whether message has been read
     * @param bool   $tail      Whether to show speech bubble tail
     */
    public function __construct(
        public string $align = 'left',
        public string $color = 'gray',
        public bool $avatar = false,
        public string $avatarSrc = '',
        public string $name = '',
        public string $time = '',
        public bool $read = false,
        public bool $tail = true
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.chat-bubble');
    }
}
