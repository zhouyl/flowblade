# VStack

Vertical stack layout component, a shortcut for Stack component in vertical direction. VStack provides a convenient way to arrange items vertically with consistent spacing and alignment.

## Basic Usage

```blade
<x-vstack>
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-vstack>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | `string` | `'div'` | HTML element to render |
| `spacing` | `string` | `'md'` | Spacing between items (2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl) |
| `divider` | `boolean` | `false` | Show divider between items |

### Flex-Specific Props (via Style Props)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | `string` | `null` | Horizontal alignment: `start`, `center`, `end`, `stretch` |
| `justify` | `string` | `null` | Vertical alignment: `start`, `center`, `end`, `between`, `around`, `evenly` |

### Style Props

VStack supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Spacing

```blade
<x-vstack spacing="xs">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>

<x-vstack spacing="md">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>

<x-vstack spacing="xl">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>
```

## Alignment

```blade
<!-- Horizontal center -->
<x-vstack align="center">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>

<!-- Vertical center -->
<x-vstack justify="center" h="64">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>

<!-- Space between -->
<x-vstack justify="between" h="64">
    <x-box>Top</x-box>
    <x-box>Bottom</x-box>
</x-vstack>
```

## Divider

```blade
<x-vstack :divider="true" spacing="md">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-vstack>
```

## Common Patterns

### Form Layout

```blade
<x-vstack spacing="md">
    <x-box>
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Username</x-box>
        <x-input />
    </x-box>
    <x-box>
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Email</x-box>
        <x-input type="email" />
    </x-box>
    <x-box>
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Password</x-box>
        <x-input type="password" />
    </x-box>
</x-vstack>
```

### Card List

```blade
<x-vstack spacing="md">
    <x-box p="4" bg="white" rounded="lg" shadow="md">
        <x-heading as="h3" fontWeight="semibold">Card 1</x-heading>
        <x-text fontSize="sm" color="gray.600">Content...</x-text>
    </x-box>
    <x-box p="4" bg="white" rounded="lg" shadow="md">
        <x-heading as="h3" fontWeight="semibold">Card 2</x-heading>
        <x-text fontSize="sm" color="gray.600">Content...</x-text>
    </x-box>
</x-vstack>
```

### Sidebar Menu

```blade
<x-vstack spacing="xs" w="64" p="4" bg="gray.50">
    <x-box as="a" href="#" px="3" py="2" rounded="md" class="hover:bg-gray-200">Home</x-box>
    <x-box as="a" href="#" px="3" py="2" rounded="md" class="hover:bg-gray-200">Products</x-box>
    <x-box as="a" href="#" px="3" py="2" rounded="md" class="hover:bg-gray-200">Services</x-box>
    <x-box as="a" href="#" px="3" py="2" rounded="md" class="hover:bg-gray-200">About</x-box>
</x-vstack>
```

### Timeline

```blade
<x-vstack spacing="lg" :divider="true">
    <x-box>
        <x-text fontWeight="semibold">2024-01-01</x-text>
        <x-text fontSize="sm" color="gray.600">Event 1</x-text>
    </x-box>
    <x-box>
        <x-text fontWeight="semibold">2024-01-02</x-text>
        <x-text fontSize="sm" color="gray.600">Event 2</x-text>
    </x-box>
</x-vstack>
```

### Page Layout

```blade
<x-vstack spacing="lg" minH="screen">
    <x-box as="header" p="4" bg="white" shadow="md">
        Navigation
    </x-box>
    <x-box as="main" flex="1" p="4">
        Main content
    </x-box>
    <x-box as="footer" p="4" bg="gray.100">
        Footer
    </x-box>
</x-vstack>
```

