# HStack

Horizontal stack layout component, a shortcut for Stack component in horizontal direction.

## Basic Usage

```blade
<x-hstack>
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-hstack>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | `string` | `'div'` | HTML tag |
| `spacing` | `string` | `null` | Spacing: `xs`, `sm`, `md`, `lg`, `xl` |
| `align` | `string` | `null` | Vertical alignment: `start`, `center`, `end`, `stretch`, `baseline` |
| `justify` | `string` | `null` | Horizontal alignment: `start`, `center`, `end`, `between`, `around`, `evenly` |
| `divider` | `boolean` | `false` | Show divider between items |

## Spacing

```blade
<x-hstack spacing="xs">
    <div>Item 1</div>
    <div>Item 2</div>
</x-hstack>

<x-hstack spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
</x-hstack>

<x-hstack spacing="xl">
    <div>Item 1</div>
    <div>Item 2</div>
</x-hstack>
```

## Alignment

```blade
<!-- Vertical center -->
<x-hstack align="center">
    <div class="h-20">Tall element</div>
    <div>Normal element</div>
</x-hstack>

<!-- Horizontal center -->
<x-hstack justify="center">
    <div>Item 1</div>
    <div>Item 2</div>
</x-hstack>

<!-- Space between -->
<x-hstack justify="between">
    <div>Left</div>
    <div>Right</div>
</x-hstack>
```

## Divider

```blade
<x-hstack divider spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-hstack>
```

## Common Patterns

### Navigation Bar

```blade
<x-hstack justify="between" align="center" class="p-4 bg-white shadow">
    <div class="font-bold text-xl">Logo</div>
    <x-hstack spacing="md">
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About</a>
    </x-hstack>
</x-hstack>
```

### Button Group

```blade
<x-hstack spacing="sm">
    <x-button>Save</x-button>
    <x-button variant="outline">Cancel</x-button>
</x-hstack>
```

### Form Row

```blade
<x-hstack spacing="md" align="end">
    <div class="flex-1">
        <label class="block text-sm font-medium mb-1">Name</label>
        <x-input />
    </div>
    <div class="flex-1">
        <label class="block text-sm font-medium mb-1">Email</label>
        <x-input type="email" />
    </div>
</x-hstack>
```

### Card Actions

```blade
<div class="p-6 bg-white rounded-lg shadow">
    <h3 class="text-lg font-semibold mb-4">Card Title</h3>
    <p class="mb-4">Card content...</p>
    <x-hstack justify="end" spacing="sm">
        <x-button variant="outline">Cancel</x-button>
        <x-button>Confirm</x-button>
    </x-hstack>
</div>
```

### Icon with Text

```blade
<x-hstack spacing="sm" align="center">
    <x-icon name="mdi:check-circle" class="text-green-500" />
    <span>Success</span>
</x-hstack>
```

