# HStack

Horizontal stack layout component, a shortcut for Stack component in horizontal direction. HStack provides a convenient way to arrange items horizontally with consistent spacing and alignment. Perfect for creating navigation bars, button groups, and horizontal layouts.

## Basic Usage

```blade
<x-hstack>
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-hstack>
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
| `align` | `string` | `null` | Vertical alignment: `start`, `center`, `end`, `stretch`, `baseline` |
| `justify` | `string` | `null` | Horizontal alignment: `start`, `center`, `end`, `between`, `around`, `evenly` |

### Style Props

HStack supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Spacing

```blade
<x-hstack spacing="xs">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-hstack>

<x-hstack spacing="md">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-hstack>

<x-hstack spacing="xl">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-hstack>
```

## Alignment

```blade
<!-- Vertical center -->
<x-hstack align="center">
    <x-box h="20">Tall element</x-box>
    <x-box>Normal element</x-box>
</x-hstack>

<!-- Horizontal center -->
<x-hstack justify="center">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
</x-hstack>

<!-- Space between -->
<x-hstack justify="between">
    <x-box>Left</x-box>
    <x-box>Right</x-box>
</x-hstack>
```

## Divider

```blade
<x-hstack :divider="true" spacing="md">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-hstack>
```

## Common Patterns

### Navigation Bar

```blade
<x-hstack justify="between" align="center" p="4" bg="white" shadow="md">
    <x-text as="div" fontWeight="bold" fontSize="xl">Logo</x-text>
    <x-hstack spacing="md">
        <x-box as="a" href="#">Home</x-box>
        <x-box as="a" href="#">Products</x-box>
        <x-box as="a" href="#">About</x-box>
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
    <x-box flex="1">
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Name</x-box>
        <x-input />
    </x-box>
    <x-box flex="1">
        <x-box as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Email</x-box>
        <x-input type="email" />
    </x-box>
</x-hstack>
```

### Card Actions

```blade
<x-box p="6" bg="white" rounded="lg" shadow="md">
    <x-heading as="h3" fontSize="lg" fontWeight="semibold" mb="4">Card Title</x-heading>
    <x-text mb="4">Card content...</x-text>
    <x-hstack justify="end" spacing="sm">
        <x-button variant="outline">Cancel</x-button>
        <x-button>Confirm</x-button>
    </x-hstack>
</x-box>
```

### Icon with Text

```blade
<x-hstack spacing="sm" align="center">
    <x-icon name="mdi:check-circle" color="success" />
    <x-text>Success</x-text>
</x-hstack>
```

## Accessibility

The HStack component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation
- Preserves semantic meaning of child elements
- Should use appropriate semantic elements for content

