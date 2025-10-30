# Stack / HStack / VStack

Layout components that stack elements with consistent spacing and comprehensive style props support. Stack components provide a convenient way to manage spacing and alignment of child elements with optional dividers. Perfect for flexible layouts and consistent spacing.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `direction` | string | `'vertical'` | Stack direction (vertical, horizontal) - Stack only |
| `spacing` | string | `'md'` | Spacing between items (2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl) |
| `divider` | bool | `false` | Whether to show dividers between items |

### Flex-Specific Props (via Style Props)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `null` | Align items (start, center, end, stretch, baseline) |
| `justify` | string | `null` | Justify content (start, center, end, between, around, evenly) |

### Style Props

Stack components support all style props from the HasStyleProps trait, including spacing, sizing, colors, borders, and more. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Components

- **Stack**: Generic stack with configurable direction
- **VStack**: Vertical stack (shortcut for Stack with direction="vertical")
- **HStack**: Horizontal stack (shortcut for Stack with direction="horizontal")

## Basic Usage

### Vertical Stack

```blade
<x-vstack spacing="md">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-vstack>
```

### Horizontal Stack

```blade
<x-hstack spacing="lg">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-hstack>
```

## Examples

### Different Spacing

```blade
{{-- Extra small spacing --}}
<x-vstack spacing="xs">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>

{{-- Large spacing --}}
<x-vstack spacing="lg">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>

{{-- Extra large spacing --}}
<x-vstack spacing="2xl">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-vstack>
```

### With Alignment

```blade
<x-vstack spacing="md" align="center">
    <x-box>Centered Item 1</x-box>
    <x-box>Centered Item 2</x-box>
</x-vstack>

<x-hstack spacing="md" align="center">
    <x-box h="20">Tall item</x-box>
    <x-box h="10">Short item</x-box>
</x-hstack>
```

### With Justification

```blade
<x-hstack spacing="md" justify="between" w="full">
    <x-box>Left</x-box>
    <x-box>Right</x-box>
</x-hstack>

<x-hstack spacing="md" justify="center">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-hstack>
```

### With Dividers

```blade
<x-vstack :divider="true" spacing="sm">
    <x-box>Section 1</x-box>
    <x-box>Section 2</x-box>
    <x-box>Section 3</x-box>
</x-vstack>

<x-hstack :divider="true" spacing="md">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-hstack>
```

## Common Patterns

### Form Layout

```blade
<x-vstack spacing="md">
    <x-box>
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium">Name</x-box>
        <x-input mt="1" />
    </x-box>

    <x-box>
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium">Email</x-box>
        <x-input type="email" mt="1" />
    </x-box>

    <x-box>
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium">Message</x-box>
        <x-textarea mt="1" />
    </x-box>

    <x-button color="primary">Submit</x-button>
</x-vstack>
```

### Card Content

```blade
<x-box p="6" shadow="lg" rounded="xl">
    <x-vstack spacing="md">
        <x-heading as="h2" fontSize="xl" fontWeight="bold">Card Title</x-heading>
        <x-text color="gray.600">Card description goes here...</x-text>

        <x-hstack spacing="sm" justify="end">
            <x-button variant="outline">Cancel</x-button>
            <x-button color="primary">Confirm</x-button>
        </x-hstack>
    </x-vstack>
</x-box>
```

### Navigation

```blade
<x-hstack spacing="lg" align="center" p="4">
    <x-text as="div" fontSize="xl" fontWeight="bold">Logo</x-text>

    <x-spacer />

    <x-hstack spacing="md">
        <x-box as="a" href="#">Home</x-box>
        <x-box as="a" href="#">About</x-box>
        <x-box as="a" href="#">Contact</x-box>
    </x-hstack>

    <x-button>Sign In</x-button>
</x-hstack>
```

### List Items

```blade
<x-vstack :divider="true" spacing="sm">
    @foreach($items as $item)
        <x-hstack spacing="md" align="center" py="2">
            <x-icon name="heroicons:check-circle" color="success" />
            <x-box flex="1">{{ $item->name }}</x-box>
            <x-badge>{{ $item->status }}</x-badge>
        </x-hstack>
    @endforeach
</x-vstack>
```

### Stat Cards

```blade
<x-hstack spacing="lg">
    <x-box p="6" shadow="md" rounded="lg" flex="1">
        <x-vstack spacing="xs">
            <x-text fontSize="sm" color="gray.600">Total Users</x-text>
            <x-text fontSize="3xl" fontWeight="bold">1,234</x-text>
            <x-text fontSize="sm" color="green.600">+12% from last month</x-text>
        </x-vstack>
    </x-box>

    <x-box p="6" shadow="md" rounded="lg" flex="1">
        <x-vstack spacing="xs">
            <x-text fontSize="sm" color="gray.600">Revenue</x-text>
            <x-text fontSize="3xl" fontWeight="bold">$12,345</x-text>
            <x-text fontSize="sm" color="green.600">+8% from last month</x-text>
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
<x-hstack spacing="0" minH="screen">
    {{-- Sidebar --}}
    <x-box as="aside" w="64" bg="gray.100">
        <x-vstack spacing="xs" p="4">
            <x-box as="a" href="#" p="2" rounded="md" class="hover:bg-gray-200">Dashboard</x-box>
            <x-box as="a" href="#" p="2" rounded="md" class="hover:bg-gray-200">Users</x-box>
            <x-box as="a" href="#" p="2" rounded="md" class="hover:bg-gray-200">Settings</x-box>
        </x-vstack>
    </x-box>

    {{-- Main Content --}}
    <x-box as="main" flex="1" p="8">
        <x-vstack spacing="lg">
            <h1 class="text-3xl font-bold">Page Title</h1>
            <div>Content goes here...</div>
        </x-vstack>
    </main>
</x-hstack>
```

## Accessibility

The Stack components:
- Maintain semantic HTML structure
- Preserve content accessibility
- Support keyboard navigation
- Support screen reader navigation
- Properly announce contained content
- Maintain proper reading order

