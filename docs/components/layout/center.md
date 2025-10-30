# Center

Centers its child elements using flexbox. The Center component provides a convenient way to center content both vertically and horizontally with comprehensive style props support. Perfect for creating centered layouts, modals, and hero sections.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `inline` | bool | `false` | Whether to use inline-flex |

### Style Props

Center supports all style props from the HasStyleProps trait, including spacing, sizing, colors, borders, and more. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-center>
    <x-box>Centered Content</x-box>
</x-center>
```

## Examples

### Full Height Centering

```blade
<x-center h="screen">
    <x-box textAlign="center">
        <x-heading as="h1" fontSize="4xl" fontWeight="bold">Welcome</x-heading>
        <x-text mt="4">Vertically and horizontally centered</x-text>
    </x-box>
</x-center>
```

### Inline Center

```blade
<x-center :inline="true" w="32" h="32" bg="gray.100">
    <x-text as="span">Inline</x-text>
</x-center>
```

### Custom Element

```blade
<x-center as="section" minH="screen" bg="gray.50">
    <x-box>Section content</x-box>
</x-center>
```

### Loading State

```blade
<x-center h="64">
    <x-spinner size="lg" />
</x-center>
```

### Empty State

```blade
<x-center h="96">
    <x-box textAlign="center">
        <x-icon name="heroicons:inbox" size="48px" color="gray.400" />
        <x-text mt="4" color="gray.600">No items found</x-text>
    </x-box>
</x-center>
```

### Modal Content

```blade
<x-center position="fixed" inset="0" bg="black" class="bg-opacity-50">
    <x-box p="6" bg="white" rounded="lg" shadow="xl" class="max-w-md">
        <x-heading as="h2" fontSize="xl" fontWeight="bold">Modal Title</x-heading>
        <x-text mt="2">Modal content...</x-text>
    </x-box>
</x-center>
```

## Common Patterns

### Hero Section

```blade
<x-center h="screen" class="bg-gradient-to-r from-blue-500 to-purple-600">
    <x-box textAlign="center" color="white">
        <x-heading as="h1" fontSize="6xl" fontWeight="bold">Your App</x-heading>
        <x-text mt="4" fontSize="xl">Amazing tagline</x-text>
        <x-button color="white" size="lg" mt="8">
            Get Started
        </x-button>
    </x-box>
</x-center>
```

### Card Center

```blade
<x-center p="8">
    <x-box p="8" shadow="lg" rounded="xl" class="max-w-md w-full">
        <x-heading as="h2" fontSize="2xl" fontWeight="bold">Sign In</x-heading>
        <x-box as="form" mt="6">
            <!-- Form fields -->
        </x-box>
    </x-box>
</x-center>
```

## Accessibility

The Center component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation
- Preserves semantic meaning of child elements
- Should use appropriate semantic elements (e.g., `as="section"`, `as="main"`)

