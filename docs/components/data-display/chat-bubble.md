# ChatBubble Component

Chat message bubble component for messaging interfaces and chat applications. ChatBubble provides a flexible way to display chat messages with support for various alignments and colors.

## Basic Usage

```blade
<x-chat-bubble>
    Hello! How can I help you today?
</x-chat-bubble>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `'left'` | Alignment: `left`, `right` |
| `color` | string | `'gray'` | Color: `gray`, `blue`, `green`, `red`, `yellow`, `indigo`, `purple`, `pink` |
| `avatar` | boolean | `false` | Show avatar |
| `avatarSrc` | string | `''` | Avatar image source |
| `name` | string | `''` | Sender name |
| `time` | string | `''` | Message timestamp |
| `read` | boolean | `false` | Read status indicator |
| `tail` | boolean | `true` | Show message tail |

## Style Props

ChatBubble supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### Basic Messages

```blade
<x-vstack gap="4">
    <x-chat-bubble>
        Hello! How are you?
    </x-chat-bubble>

    <x-chat-bubble align="right" color="blue">
        I'm doing great, thanks for asking!
    </x-chat-bubble>
</x-vstack>
```

### With Avatar

```blade
<div class="space-y-4">
    <x-chat-bubble :avatar="true" avatarSrc="/images/user1.jpg">
        Hey, did you see the latest update?
    </x-chat-bubble>
    
    <x-chat-bubble align="right" color="blue" :avatar="true" avatarSrc="/images/user2.jpg">
        Yes! It looks amazing!
    </x-chat-bubble>
</div>
```

### With Name and Time

```blade
<div class="space-y-4">
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/john.jpg"
        name="John Doe"
        time="10:30 AM"
    >
        Good morning everyone!
    </x-chat-bubble>
    
    <x-chat-bubble 
        align="right" 
        color="blue"
        :avatar="true" 
        avatarSrc="/images/jane.jpg"
        name="Jane Smith"
        time="10:32 AM"
    >
        Good morning John!
    </x-chat-bubble>
</div>
```

### With Read Status

```blade
<div class="space-y-4">
    <x-chat-bubble 
        align="right" 
        color="blue"
        time="10:30 AM"
        :read="true"
    >
        Message sent and read
    </x-chat-bubble>
    
    <x-chat-bubble 
        align="right" 
        color="blue"
        time="10:31 AM"
        :read="false"
    >
        Message sent but not read yet
    </x-chat-bubble>
</div>
```

### Different Colors

```blade
<div class="space-y-4">
    <x-chat-bubble color="gray">
        Default gray message
    </x-chat-bubble>
    
    <x-chat-bubble align="right" color="blue">
        Blue message
    </x-chat-bubble>
    
    <x-chat-bubble color="green">
        Green message
    </x-chat-bubble>
    
    <x-chat-bubble align="right" color="purple">
        Purple message
    </x-chat-bubble>
</div>
```

### Without Tail

```blade
<div class="space-y-4">
    <x-chat-bubble :tail="false">
        Message without tail
    </x-chat-bubble>
    
    <x-chat-bubble align="right" color="blue" :tail="false">
        Clean bubble style
    </x-chat-bubble>
</div>
```

### Complete Chat Interface

```blade
<div class="max-w-2xl mx-auto p-4 bg-white dark:bg-gray-900 rounded-lg">
    <div class="space-y-4">
        <x-chat-bubble 
            :avatar="true" 
            avatarSrc="/images/support.jpg"
            name="Support Agent"
            time="9:00 AM"
        >
            Hello! Welcome to our support chat. How can I help you today?
        </x-chat-bubble>
        
        <x-chat-bubble 
            align="right" 
            color="blue"
            :avatar="true" 
            avatarSrc="/images/user.jpg"
            name="You"
            time="9:01 AM"
        >
            Hi! I'm having trouble with my account login.
        </x-chat-bubble>
        
        <x-chat-bubble 
            :avatar="true" 
            avatarSrc="/images/support.jpg"
            name="Support Agent"
            time="9:02 AM"
        >
            I'd be happy to help you with that. Can you tell me what error message you're seeing?
        </x-chat-bubble>
        
        <x-chat-bubble 
            align="right" 
            color="blue"
            :avatar="true" 
            avatarSrc="/images/user.jpg"
            name="You"
            time="9:03 AM"
            :read="true"
        >
            It says "Invalid credentials" even though I'm sure my password is correct.
        </x-chat-bubble>
        
        <x-chat-bubble 
            :avatar="true" 
            avatarSrc="/images/support.jpg"
            name="Support Agent"
            time="9:04 AM"
        >
            Let me check your account. One moment please...
        </x-chat-bubble>
    </div>
</div>
```

### Group Chat

```blade
<div class="space-y-4">
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/alice.jpg"
        name="Alice"
        time="2:30 PM"
        color="purple"
    >
        Hey everyone! Who's up for lunch?
    </x-chat-bubble>
    
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/bob.jpg"
        name="Bob"
        time="2:31 PM"
        color="green"
    >
        I'm in! Where should we go?
    </x-chat-bubble>
    
    <x-chat-bubble 
        align="right" 
        color="blue"
        :avatar="true" 
        avatarSrc="/images/you.jpg"
        name="You"
        time="2:32 PM"
    >
        How about that new Italian place?
    </x-chat-bubble>
    
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/alice.jpg"
        name="Alice"
        time="2:33 PM"
        color="purple"
    >
        Perfect! See you there at 1 PM!
    </x-chat-bubble>
</div>
```

### System Messages

```blade
<div class="space-y-4">
    <x-chat-bubble>
        Welcome to the chat!
    </x-chat-bubble>
    
    <div class="text-center">
        <span class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 px-3 py-1 rounded-full">
            John joined the chat
        </span>
    </div>
    
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/john.jpg"
        name="John"
        time="3:00 PM"
    >
        Hi everyone!
    </x-chat-bubble>
    
    <div class="text-center">
        <span class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 px-3 py-1 rounded-full">
            Jane left the chat
        </span>
    </div>
</div>
```

### With Rich Content

```blade
<div class="space-y-4">
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/user.jpg"
        name="User"
        time="4:00 PM"
    >
        <div class="space-y-2">
            <p>Check out this image I found:</p>
            <img src="/images/photo.jpg" alt="Photo" class="rounded-lg max-w-full" />
        </div>
    </x-chat-bubble>
    
    <x-chat-bubble 
        align="right" 
        color="blue"
        time="4:01 PM"
    >
        <div class="space-y-2">
            <p>That's awesome! Here's a link:</p>
            <a href="#" class="underline">https://example.com</a>
        </div>
    </x-chat-bubble>
</div>
```

### Typing Indicator

```blade
<div class="space-y-4">
    <x-chat-bubble 
        align="right" 
        color="blue"
        time="5:00 PM"
    >
        Are you there?
    </x-chat-bubble>
    
    <x-chat-bubble 
        :avatar="true" 
        avatarSrc="/images/user.jpg"
        name="User"
    >
        <div class="flex gap-1">
            <span class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0ms"></span>
            <span class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 150ms"></span>
            <span class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 300ms"></span>
        </div>
    </x-chat-bubble>
</div>
```

### Customer Support Chat

```blade
<div class="max-w-2xl mx-auto">
    <div class="bg-blue-600 text-white p-4 rounded-t-lg">
        <div class="flex items-center gap-3">
            <img src="/images/support-avatar.jpg" alt="Support" class="w-10 h-10 rounded-full" />
            <div>
                <div class="font-semibold">Customer Support</div>
                <div class="text-sm text-blue-100">Online</div>
            </div>
        </div>
    </div>
    
    <div class="bg-gray-50 dark:bg-gray-900 p-4 space-y-4 min-h-[400px]">
        <x-chat-bubble 
            :avatar="true" 
            avatarSrc="/images/support-avatar.jpg"
            name="Support"
            time="Just now"
        >
            Hi! I'm here to help. What can I do for you today?
        </x-chat-bubble>
    </div>
    
    <div class="bg-white dark:bg-gray-800 p-4 rounded-b-lg border-t border-gray-200 dark:border-gray-700">
        <div class="flex gap-2">
            <input 
                type="text" 
                placeholder="Type your message..." 
                class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
            />
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Send
            </button>
        </div>
    </div>
</div>
```

## Styling Tips

### Custom Width

```blade
<x-chat-bubble class="max-w-lg">
    This message has a custom maximum width
</x-chat-bubble>
```

### Custom Padding

```blade
<x-chat-bubble class="px-6 py-3">
    Message with extra padding
</x-chat-bubble>
```

## Accessibility

The ChatBubble component uses semantic HTML and includes proper attributes:

```blade
<x-chat-bubble 
    :avatar="true" 
    avatarSrc="/images/user.jpg"
    name="John Doe"
    time="10:30 AM"
>
    Accessible message content
</x-chat-bubble>
```

## Browser Support

The ChatBubble component uses modern CSS features:
- Flexbox
- CSS pseudo-elements (for tail)
- Tailwind CSS utilities
- Dark mode support

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Avatar](./avatar.md) - User avatar component
- [Badge](./badge.md) - Badge component
- [Indicator](./indicator.md) - Status indicator

