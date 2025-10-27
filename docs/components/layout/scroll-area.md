# ScrollArea

Scrollable container with customizable scrollbar behavior.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `height` | string | `null` | Fixed height (e.g., '400px', '50vh') |
| `max-height` | string | `null` | Maximum height |
| `scrollbar` | string | `'auto'` | Scrollbar visibility (auto, always, hidden) |

## Basic Usage

```blade
<x-scroll-area height="400px">
    <div>Long content that scrolls...</div>
</x-scroll-area>
```

## Examples

### Fixed Height

```blade
<x-scroll-area height="300px">
    @foreach($items as $item)
        <div class="p-4 border-b">{{ $item->name }}</div>
    @endforeach
</x-scroll-area>
```

### Max Height

```blade
<x-scroll-area max-height="500px">
    <article class="prose">
        <h1>Article Title</h1>
        <p>Long article content...</p>
    </article>
</x-scroll-area>
```

### Hidden Scrollbar

```blade
<x-scroll-area height="400px" scrollbar="hidden">
    <div>Content with hidden scrollbar</div>
</x-scroll-area>
```

## Common Patterns

### Chat Messages

```blade
<x-box shadow="lg" rounded="xl" class="overflow-hidden">
    <div class="p-4 bg-gray-100 border-b">
        <h3 class="font-bold">Chat</h3>
    </div>
    
    <x-scroll-area height="400px">
        <x-vstack spacing="sm" class="p-4">
            @foreach($messages as $message)
                <x-box 
                    p="3" 
                    :bg="$message->isOwn ? 'primary' : 'gray'" 
                    rounded="lg"
                    :class="$message->isOwn ? 'self-end text-white' : 'self-start'"
                >
                    {{ $message->text }}
                </x-box>
            @endforeach
        </x-vstack>
    </x-scroll-area>
    
    <div class="p-4 border-t">
        <x-input placeholder="Type a message..." />
    </div>
</x-box>
```

### Sidebar Navigation

```blade
<aside class="w-64 bg-gray-100 border-r">
    <div class="p-4 border-b">
        <h2 class="font-bold">Navigation</h2>
    </div>
    
    <x-scroll-area max-height="calc(100vh - 80px)">
        <x-vstack spacing="xs" class="p-4">
            @foreach($menuItems as $item)
                <a 
                    href="{{ $item->url }}" 
                    class="p-2 rounded hover:bg-gray-200 transition"
                >
                    {{ $item->name }}
                </a>
            @endforeach
        </x-vstack>
    </x-scroll-area>
</aside>
```

### Dropdown Menu

```blade
<x-box shadow="xl" rounded="lg" class="w-64">
    <x-scroll-area max-height="300px">
        <x-vstack spacing="0">
            @foreach($options as $option)
                <button class="w-full text-left px-4 py-2 hover:bg-gray-100 transition">
                    {{ $option }}
                </button>
            @endforeach
        </x-vstack>
    </x-scroll-area>
</x-box>
```

### Code Block

```blade
<x-box bg="gray" rounded="lg" class="overflow-hidden">
    <div class="px-4 py-2 bg-gray-800 text-white text-sm">
        example.php
    </div>
    
    <x-scroll-area max-height="400px">
        <pre class="p-4"><code>{{ $code }}</code></pre>
    </x-scroll-area>
</x-box>
```

### Notification List

```blade
<x-box shadow="lg" rounded="xl" class="w-96">
    <div class="p-4 border-b">
        <x-hstack justify="between" align="center">
            <h3 class="font-bold">Notifications</h3>
            <x-button variant="link" size="sm">Mark all read</x-button>
        </x-hstack>
    </div>
    
    <x-scroll-area max-height="500px">
        <x-vstack spacing="0">
            @foreach($notifications as $notification)
                <div class="p-4 border-b hover:bg-gray-50 cursor-pointer">
                    <x-hstack spacing="sm" align="start">
                        <x-icon 
                            name="heroicons:bell" 
                            :color="$notification->isRead ? 'gray' : 'primary'" 
                        />
                        <div class="flex-1">
                            <p class="text-sm">{{ $notification->message }}</p>
                            <span class="text-xs text-gray-500">{{ $notification->time }}</span>
                        </div>
                    </x-hstack>
                </div>
            @endforeach
        </x-vstack>
    </x-scroll-area>
</x-box>
```

### Data Table

```blade
<x-box shadow="lg" rounded="xl" class="overflow-hidden">
    <x-scroll-area max-height="600px">
        <table class="w-full">
            <thead class="bg-gray-100 sticky top-0">
                <tr>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2">{{ $user->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-scroll-area>
</x-box>
```

### Timeline

```blade
<x-scroll-area height="600px">
    <x-vstack spacing="lg" class="p-4">
        @foreach($events as $event)
            <x-hstack spacing="md" align="start">
                <div class="flex-shrink-0 w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white">
                    <x-icon name="heroicons:check" />
                </div>
                
                <x-vstack spacing="xs" class="flex-1">
                    <h4 class="font-bold">{{ $event->title }}</h4>
                    <p class="text-gray-600">{{ $event->description }}</p>
                    <span class="text-sm text-gray-500">{{ $event->date }}</span>
                </x-vstack>
            </x-hstack>
        @endforeach
    </x-vstack>
</x-scroll-area>
```

### Product List

```blade
<x-scroll-area height="500px">
    <x-vstack spacing="md" class="p-4">
        @foreach($products as $product)
            <x-hstack spacing="md" align="center" class="p-4 border rounded-lg">
                <img 
                    src="{{ $product->image }}" 
                    class="w-20 h-20 object-cover rounded"
                >
                
                <div class="flex-1">
                    <h4 class="font-bold">{{ $product->name }}</h4>
                    <p class="text-gray-600">${{ $product->price }}</p>
                </div>
                
                <x-button size="sm">Add</x-button>
            </x-hstack>
        @endforeach
    </x-vstack>
</x-scroll-area>
```

## Tips

- Use `height` for fixed-height containers
- Use `max-height` for flexible containers with a maximum
- Set `scrollbar="hidden"` for cleaner UI (content still scrollable)
- Perfect for chat interfaces, sidebars, and long lists
- Combine with sticky headers for better UX

