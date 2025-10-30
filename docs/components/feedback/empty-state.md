# EmptyState

Empty state component for displaying empty or no-data states with optional actions. EmptyState provides a flexible way to display empty states. Perfect for lists, tables, and search results with no data.

## Basic Usage

```blade
<x-empty-state
    icon="heroicons:inbox"
    title="No messages"
    description="You don't have any messages yet."
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `icon` | `string` | `null` | Icon name for the empty state |
| `title` | `string` | `null` | Title text |
| `description` | `string` | `null` | Description text |
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |

### Style Props

EmptyState supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

### Small Size

```blade
<x-empty-state 
    icon="heroicons:inbox"
    title="No messages"
    description="You don't have any messages yet."
    size="sm"
/>
```

### Medium Size (Default)

```blade
<x-empty-state 
    icon="heroicons:inbox"
    title="No messages"
    description="You don't have any messages yet."
    size="md"
/>
```

### Large Size

```blade
<x-empty-state 
    icon="heroicons:inbox"
    title="No messages"
    description="You don't have any messages yet."
    size="lg"
/>
```

## With Action Button

```blade
<x-empty-state 
    icon="heroicons:inbox"
    title="No messages"
    description="You don't have any messages yet."
>
    <x-button color="primary">
        Compose Message
    </x-button>
</x-empty-state>
```

## With Multiple Actions

```blade
<x-empty-state 
    icon="heroicons:folder-open"
    title="No projects"
    description="Get started by creating a new project."
>
    <div class="flex gap-3">
        <x-button color="primary">
            Create Project
        </x-button>
        <x-button variant="outline">
            Import Project
        </x-button>
    </div>
</x-empty-state>
```

## Without Icon

```blade
<x-empty-state 
    title="No results found"
    description="Try adjusting your search or filter to find what you're looking for."
/>
```

## Without Description

```blade
<x-empty-state 
    icon="heroicons:document-text"
    title="No documents"
>
    <x-button color="primary">
        Upload Document
    </x-button>
</x-empty-state>
```

## Common Patterns

### Empty Inbox

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:inbox"
            title="Your inbox is empty"
            description="When you receive messages, they will appear here."
        />
    </x-card-body>
</x-card>
```

### No Search Results

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:magnifying-glass"
            title="No results found"
            description="We couldn't find anything matching your search. Try different keywords."
        >
            <x-button variant="outline" @click="clearSearch()">
                Clear Search
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### Empty Shopping Cart

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:shopping-cart"
            title="Your cart is empty"
            description="Add items to your cart to get started."
        >
            <x-button color="primary" href="/products">
                Continue Shopping
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### No Notifications

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:bell"
            title="No notifications"
            description="You're all caught up! Check back later for updates."
            size="sm"
        />
    </x-card-body>
</x-card>
```

### Empty File List

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:document"
            title="No files uploaded"
            description="Upload your first file to get started."
        >
            <div class="flex gap-3">
                <x-button color="primary">
                    Upload File
                </x-button>
                <x-button variant="outline">
                    Create Folder
                </x-button>
            </div>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### No Team Members

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:user-group"
            title="No team members yet"
            description="Invite team members to collaborate on projects."
        >
            <x-button color="primary">
                Invite Team Member
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### Empty Favorites

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:star"
            title="No favorites"
            description="Items you mark as favorite will appear here."
        >
            <x-button variant="outline" href="/browse">
                Browse Items
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### No Data Available

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:chart-bar"
            title="No data available"
            description="There's no data to display yet. Data will appear here once available."
        />
    </x-card-body>
</x-card>
```

### Empty Task List

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:clipboard-document-check"
            title="All tasks completed!"
            description="Great job! You've completed all your tasks."
        >
            <x-button color="primary">
                Create New Task
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### No Comments

```blade
<div class="border rounded-lg p-6">
    <x-empty-state 
        icon="heroicons:chat-bubble-left-right"
        title="No comments yet"
        description="Be the first to share your thoughts."
        size="sm"
    >
        <x-button color="primary" size="sm">
            Add Comment
        </x-button>
    </x-empty-state>
</div>
```

### Empty Gallery

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:photo"
            title="No photos"
            description="Upload photos to create your gallery."
        >
            <x-button color="primary">
                Upload Photos
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### No Bookmarks

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:bookmark"
            title="No bookmarks"
            description="Save your favorite pages for quick access."
        />
    </x-card-body>
</x-card>
```

### Empty Calendar

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:calendar"
            title="No events scheduled"
            description="Your calendar is clear. Add events to stay organized."
        >
            <x-button color="primary">
                Create Event
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### No Connections

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:link"
            title="No connections"
            description="Connect with others to expand your network."
        >
            <x-button color="primary">
                Find Connections
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

### Empty Playlist

```blade
<x-card>
    <x-card-body>
        <x-empty-state 
            icon="heroicons:musical-note"
            title="Empty playlist"
            description="Add songs to create your perfect playlist."
        >
            <x-button color="primary">
                Browse Music
            </x-button>
        </x-empty-state>
    </x-card-body>
</x-card>
```

## With Table

```blade
<x-card>
    <x-card-body>
        @if($users->isEmpty())
        <x-empty-state 
            icon="heroicons:users"
            title="No users found"
            description="There are no users matching your criteria."
        >
            <x-button color="primary">
                Add User
            </x-button>
        </x-empty-state>
        @else
        <x-table>
            <!-- Table content -->
        </x-table>
        @endif
    </x-card-body>
</x-card>
```

## Livewire Integration

```blade
<div>
    @if($items->isEmpty())
    <x-empty-state 
        icon="heroicons:inbox"
        title="No items"
        description="You don't have any items yet."
    >
        <x-button wire:click="createItem" color="primary">
            Create Item
        </x-button>
    </x-empty-state>
    @else
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($items as $item)
        <x-card>
            <x-card-body>
                {{ $item->name }}
            </x-card-body>
        </x-card>
        @endforeach
    </div>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class ItemList extends Component
{
    public $items = [];
    
    public function mount()
    {
        $this->items = auth()->user()->items;
    }
    
    public function createItem()
    {
        // Create new item logic
        $this->items->push(/* new item */);
    }
    
    public function render()
    {
        return view('livewire.item-list');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    items: [],
    addItem() {
        this.items.push({ id: Date.now(), name: 'New Item' });
    }
}">
    <template x-if="items.length === 0">
        <x-empty-state 
            icon="heroicons:inbox"
            title="No items"
            description="Add your first item to get started."
        >
            <x-button @click="addItem()" color="primary">
                Add Item
            </x-button>
        </x-empty-state>
    </template>
    
    <template x-if="items.length > 0">
        <div class="space-y-2">
            <template x-for="item in items" :key="item.id">
                <x-card>
                    <x-card-body>
                        <span x-text="item.name"></span>
                    </x-card-body>
                </x-card>
            </template>
        </div>
    </template>
</div>
```

## Accessibility

The EmptyState component:
- Uses semantic HTML structure with proper heading elements
- Provides clear and descriptive text for empty states
- Supports keyboard navigation for action buttons (Tab, Enter, Space)
- Maintains proper heading hierarchy
- Uses appropriate color contrast ratios
- Works well with screen readers
- Provides meaningful empty state messages
- Supports custom content via slots
- Announces empty state to screen readers
- Supports ARIA labels for icons and actions

