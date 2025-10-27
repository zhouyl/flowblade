# Flex

Flexible box layout component with full control over flex properties.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `direction` | string | `null` | Flex direction (row, col, row-reverse, col-reverse) |
| `align` | string | `null` | Align items (start, center, end, stretch, baseline) |
| `justify` | string | `null` | Justify content (start, center, end, between, around, evenly) |
| `wrap` | string | `null` | Flex wrap (wrap, nowrap, wrap-reverse) |
| `gap` | string | `null` | Gap between items (0-16) |
| `inline` | bool | `false` | Whether to use inline-flex |

## Basic Usage

```blade
<x-flex direction="row" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-flex>
```

## Examples

### Horizontal Layout

```blade
<x-flex direction="row" align="center" justify="between" gap="4">
    <div>Left</div>
    <div>Center</div>
    <div>Right</div>
</x-flex>
```

### Vertical Layout

```blade
<x-flex direction="col" gap="2">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-flex>
```

### Centered Content

```blade
<x-flex align="center" justify="center" class="h-64">
    <div>Centered</div>
</x-flex>
```

### Space Between

```blade
<x-flex justify="between" align="center">
    <h1>Title</h1>
    <x-button>Action</x-button>
</x-flex>
```

### Wrap Items

```blade
<x-flex wrap="wrap" gap="4">
    <div class="w-32 h-32 bg-blue-500"></div>
    <div class="w-32 h-32 bg-green-500"></div>
    <div class="w-32 h-32 bg-red-500"></div>
    <div class="w-32 h-32 bg-yellow-500"></div>
</x-flex>
```

### Reverse Direction

```blade
<x-flex direction="row-reverse" gap="4">
    <div>First (appears last)</div>
    <div>Second</div>
    <div>Third (appears first)</div>
</x-flex>
```

## Common Patterns

### Navigation Bar

```blade
<x-flex justify="between" align="center" class="p-4 bg-white shadow">
    <div class="text-xl font-bold">Logo</div>
    
    <x-flex gap="6">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </x-flex>
    
    <x-button>Sign In</x-button>
</x-flex>
```

### Card Header

```blade
<x-flex justify="between" align="center" class="p-4 border-b">
    <h2 class="text-lg font-semibold">Card Title</h2>
    <x-button variant="ghost" size="sm">
        <x-icon name="heroicons:ellipsis-horizontal" />
    </x-button>
</x-flex>
```

### Form Actions

```blade
<x-flex justify="end" gap="3" class="mt-6">
    <x-button variant="outline">Cancel</x-button>
    <x-button color="primary">Save</x-button>
</x-flex>
```

### Grid Alternative

```blade
<x-flex wrap="wrap" gap="4">
    @foreach($items as $item)
        <div class="w-64">
            <x-box p="4" shadow="md" rounded="lg">
                {{ $item->name }}
            </x-box>
        </div>
    @endforeach
</x-flex>
```

### Sidebar Layout

```blade
<x-flex class="min-h-screen">
    {{-- Sidebar --}}
    <aside class="w-64 bg-gray-100 p-4">
        Sidebar
    </aside>
    
    {{-- Main Content --}}
    <main class="flex-1 p-8">
        Main Content
    </main>
</x-flex>
```

### Responsive Layout

```blade
<x-flex 
    direction="col" 
    gap="4" 
    class="md:flex-row md:justify-between"
>
    <div>Content 1</div>
    <div>Content 2</div>
    <div>Content 3</div>
</x-flex>
```

