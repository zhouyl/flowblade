<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * ChatBubble Component
 *
 * Chat message bubble for messaging interfaces
 */
class ChatBubble extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $align     Alignment: 'left', 'right'
     * @param string $color     Color: 'gray', 'blue', 'green', 'red', 'yellow', 'indigo', 'purple', 'pink'
     * @param bool   $avatar    Show avatar
     * @param string $avatarSrc Avatar image source
     * @param string $name      Sender name
     * @param string $time      Message timestamp
     * @param bool   $read      Read status
     * @param bool   $tail      Show message tail
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
