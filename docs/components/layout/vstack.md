# VStack

Vertical stack layout component, a shortcut for Stack component in vertical direction.

## Basic Usage

```blade
<x-vstack>
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-vstack>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | `string` | `'div'` | HTML tag |
| `spacing` | `string` | `null` | Spacing: `xs`, `sm`, `md`, `lg`, `xl` |
| `align` | `string` | `null` | Horizontal alignment: `start`, `center`, `end`, `stretch` |
| `justify` | `string` | `null` | Vertical alignment: `start`, `center`, `end`, `between`, `around`, `evenly` |
| `divider` | `boolean` | `false` | Show divider between items |

## Spacing

```blade
<x-vstack spacing="xs">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

<x-vstack spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

<x-vstack spacing="xl">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>
```

## Alignment

```blade
<!-- Horizontal center -->
<x-vstack align="center">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

<!-- Vertical center -->
<x-vstack justify="center" class="h-64">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

<!-- Space between -->
<x-vstack justify="between" class="h-64">
    <div>Top</div>
    <div>Bottom</div>
</x-vstack>
```

## Divider

```blade
<x-vstack divider spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-vstack>
```

## Common Patterns

### Form Layout

```blade
<x-vstack spacing="md">
    <div>
        <label class="block text-sm font-medium mb-1">Username</label>
        <x-input />
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <x-input type="email" />
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Password</label>
        <x-input type="password" />
    </div>
</x-vstack>
```

### Card List

```blade
<x-vstack spacing="md">
    <div class="p-4 bg-white rounded-lg shadow">
        <h3 class="font-semibold">Card 1</h3>
        <p class="text-sm text-gray-600">Content...</p>
    </div>
    <div class="p-4 bg-white rounded-lg shadow">
        <h3 class="font-semibold">Card 2</h3>
        <p class="text-sm text-gray-600">Content...</p>
    </div>
</x-vstack>
```

### Sidebar Menu

```blade
<x-vstack spacing="xs" class="w-64 p-4 bg-gray-50">
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">Home</a>
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">Products</a>
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">Services</a>
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">About</a>
</x-vstack>
```

### Timeline

```blade
<x-vstack spacing="lg" divider>
    <div>
        <div class="font-semibold">2024-01-01</div>
        <div class="text-sm text-gray-600">Event 1</div>
    </div>
    <div>
        <div class="font-semibold">2024-01-02</div>
        <div class="text-sm text-gray-600">Event 2</div>
    </div>
</x-vstack>
```

### Page Layout

```blade
<x-vstack spacing="lg" class="min-h-screen">
    <header class="p-4 bg-white shadow">
        Navigation
    </header>
    <main class="flex-1 p-4">
        Main content
    </main>
    <footer class="p-4 bg-gray-100">
        Footer
    </footer>
</x-vstack>
```

