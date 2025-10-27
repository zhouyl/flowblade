# Stack / HStack / VStack

Layout components that stack elements with consistent spacing.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `direction` | string | `'vertical'` | Stack direction (vertical, horizontal) - Stack only |
| `spacing` | string | `'md'` | Spacing between items (2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl) |
| `align` | string | `null` | Align items (start, center, end, stretch, baseline) |
| `justify` | string | `null` | Justify content (start, center, end, between, around, evenly) |
| `divider` | bool | `false` | Whether to show dividers between items |

## Components

- **Stack**: Generic stack with configurable direction
- **VStack**: Vertical stack (shortcut for Stack with direction="vertical")
- **HStack**: Horizontal stack (shortcut for Stack with direction="horizontal")

## Basic Usage

### Vertical Stack

```blade
<x-vstack spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-vstack>
```

### Horizontal Stack

```blade
<x-hstack spacing="lg">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-hstack>
```

## Examples

### Different Spacing

```blade
{{-- Extra small spacing --}}
<x-vstack spacing="xs">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

{{-- Large spacing --}}
<x-vstack spacing="lg">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

{{-- Extra large spacing --}}
<x-vstack spacing="2xl">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>
```

### With Alignment

```blade
<x-vstack spacing="md" align="center">
    <div>Centered Item 1</div>
    <div>Centered Item 2</div>
</x-vstack>

<x-hstack spacing="md" align="center">
    <div class="h-20">Tall item</div>
    <div class="h-10">Short item</div>
</x-hstack>
```

### With Justification

```blade
<x-hstack spacing="md" justify="between" class="w-full">
    <div>Left</div>
    <div>Right</div>
</x-hstack>

<x-hstack spacing="md" justify="center">
    <div>Item 1</div>
    <div>Item 2</div>
</x-hstack>
```

### With Dividers

```blade
<x-vstack :divider="true" spacing="sm">
    <div>Section 1</div>
    <div>Section 2</div>
    <div>Section 3</div>
</x-vstack>

<x-hstack :divider="true" spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-hstack>
```

## Common Patterns

### Form Layout

```blade
<x-vstack spacing="md">
    <div>
        <label class="block text-sm font-medium">Name</label>
        <x-input class="mt-1" />
    </div>
    
    <div>
        <label class="block text-sm font-medium">Email</label>
        <x-input type="email" class="mt-1" />
    </div>
    
    <div>
        <label class="block text-sm font-medium">Message</label>
        <x-textarea class="mt-1" />
    </div>
    
    <x-button color="primary">Submit</x-button>
</x-vstack>
```

### Card Content

```blade
<x-box p="6" shadow="lg" rounded="xl">
    <x-vstack spacing="md">
        <h2 class="text-xl font-bold">Card Title</h2>
        <p class="text-gray-600">Card description goes here...</p>
        
        <x-hstack spacing="sm" justify="end">
            <x-button variant="outline">Cancel</x-button>
            <x-button color="primary">Confirm</x-button>
        </x-hstack>
    </x-vstack>
</x-box>
```

### Navigation

```blade
<x-hstack spacing="lg" align="center" class="p-4">
    <div class="text-xl font-bold">Logo</div>
    
    <x-spacer />
    
    <x-hstack spacing="md">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </x-hstack>
    
    <x-button>Sign In</x-button>
</x-hstack>
```

### List Items

```blade
<x-vstack :divider="true" spacing="sm">
    @foreach($items as $item)
        <x-hstack spacing="md" align="center" class="py-2">
            <x-icon name="heroicons:check-circle" color="success" />
            <div class="flex-1">{{ $item->name }}</div>
            <x-badge>{{ $item->status }}</x-badge>
        </x-hstack>
    @endforeach
</x-vstack>
```

### Stat Cards

```blade
<x-hstack spacing="lg">
    <x-box p="6" shadow="md" rounded="lg" class="flex-1">
        <x-vstack spacing="xs">
            <div class="text-sm text-gray-600">Total Users</div>
            <div class="text-3xl font-bold">1,234</div>
            <div class="text-sm text-green-600">+12% from last month</div>
        </x-vstack>
    </x-box>
    
    <x-box p="6" shadow="md" rounded="lg" class="flex-1">
        <x-vstack spacing="xs">
            <div class="text-sm text-gray-600">Revenue</div>
            <div class="text-3xl font-bold">$12,345</div>
            <div class="text-sm text-green-600">+8% from last month</div>
        </x-vstack>
    </x-box>
</x-hstack>
```

### Button Group

```blade
<x-hstack spacing="sm">
    <x-button variant="outline">
        <x-icon name="heroicons:arrow-left" />
        Previous
    </x-button>
    
    <x-spacer />
    
    <x-button color="primary">
        Next
        <x-icon name="heroicons:arrow-right" />
    </x-button>
</x-hstack>
```

### Sidebar Layout

```blade
<x-hstack spacing="0" class="min-h-screen">
    {{-- Sidebar --}}
    <aside class="w-64 bg-gray-100">
        <x-vstack spacing="xs" class="p-4">
            <a href="#" class="p-2 rounded hover:bg-gray-200">Dashboard</a>
            <a href="#" class="p-2 rounded hover:bg-gray-200">Users</a>
            <a href="#" class="p-2 rounded hover:bg-gray-200">Settings</a>
        </x-vstack>
    </aside>
    
    {{-- Main Content --}}
    <main class="flex-1 p-8">
        <x-vstack spacing="lg">
            <h1 class="text-3xl font-bold">Page Title</h1>
            <div>Content goes here...</div>
        </x-vstack>
    </main>
</x-hstack>
```

