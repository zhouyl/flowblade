# Flex

Flexible box layout component with full control over flex properties. The Flex component provides a powerful flexbox layout system with comprehensive style props support for building responsive layouts.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `inline` | bool | `false` | Whether to use inline-flex instead of flex |

### Flex-Specific Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `direction` | string | `null` | Flex direction (row, col, row-reverse, col-reverse) |
| `align` | string | `null` | Align items (start, center, end, stretch, baseline) |
| `justify` | string | `null` | Justify content (start, center, end, between, around, evenly) |
| `wrap` | string | `null` | Flex wrap (wrap, nowrap, wrap-reverse) |
| `gap` | string | `null` | Gap between items (0-96) |

### Style Props

Flex component supports all style props from the HasStyleProps trait, including spacing, sizing, colors, borders, and more. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-flex direction="row" gap="4">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-flex>
```

## Examples

### Horizontal Layout

```blade
<x-flex direction="row" align="center" justify="between" gap="4">
    <x-box>Left</x-box>
    <x-box>Center</x-box>
    <x-box>Right</x-box>
</x-flex>
```

### Vertical Layout

```blade
<x-flex direction="col" gap="2">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-flex>
```

### Centered Content

```blade
<x-flex align="center" justify="center" h="64">
    <x-box>Centered</x-box>
</x-flex>
```

### Space Between

```blade
<x-flex justify="between" align="center">
    <x-heading as="h1">Title</x-heading>
    <x-button>Action</x-button>
</x-flex>
```

### Wrap Items

```blade
<x-flex wrap="wrap" gap="4">
    <x-box w="32" h="32" bg="blue.500"></x-box>
    <x-box w="32" h="32" bg="green.500"></x-box>
    <x-box w="32" h="32" bg="red.500"></x-box>
    <x-box w="32" h="32" bg="yellow.500"></x-box>
</x-flex>
```

### Reverse Direction

```blade
<x-flex direction="row-reverse" gap="4">
    <x-box>First (appears last)</x-box>
    <x-box>Second</x-box>
    <x-box>Third (appears first)</x-box>
</x-flex>
```

## Common Patterns

### Navigation Bar

```blade
<x-flex justify="between" align="center" p="4" bg="white" shadow="md">
    <x-text as="div" fontSize="xl" fontWeight="bold">Logo</x-text>

    <x-flex gap="6">
        <x-box as="a" href="#">Home</x-box>
        <x-box as="a" href="#">About</x-box>
        <x-box as="a" href="#">Contact</x-box>
    </x-flex>

    <x-button>Sign In</x-button>
</x-flex>
```

### Card Header

```blade
<x-flex justify="between" align="center" p="4" class="border-b">
    <x-heading as="h2" fontSize="lg" fontWeight="semibold">Card Title</x-heading>
    <x-button variant="ghost" size="sm">
        <x-icon name="heroicons:ellipsis-horizontal" />
    </x-button>
</x-flex>
```

### Form Actions

```blade
<x-flex justify="end" gap="3" mt="6">
    <x-button variant="outline">Cancel</x-button>
    <x-button color="primary">Save</x-button>
</x-flex>
```

### Grid Alternative

```blade
<x-flex wrap="wrap" gap="4">
    @foreach($items as $item)
        <x-box w="64">
            <x-box p="4" shadow="md" rounded="lg">
                {{ $item->name }}
            </x-box>
        </x-box>
    @endforeach
</x-flex>
```

### Sidebar Layout

```blade
<x-flex minH="screen">
    {{-- Sidebar --}}
    <x-box as="aside" w="64" bg="gray.100" p="4">
        Sidebar
    </x-box>

    {{-- Main Content --}}
    <x-box as="main" flex="1" p="8">
        Main Content
    </x-box>
</x-flex>
```

### Responsive Layout

```blade
<x-flex
    direction="col"
    gap="4"
    class="md:flex-row md:justify-between"
>
    <x-box>Content 1</x-box>
    <x-box>Content 2</x-box>
    <x-box>Content 3</x-box>
</x-flex>
```

