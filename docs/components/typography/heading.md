# Heading

Heading component for displaying headings at various levels. Heading provides semantic heading elements with support for various sizes, weights, and colors. Perfect for page titles, section headers, and content organization.

## Basic Usage

```blade
<x-heading>This is a heading</x-heading>
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `as` | `string` | `'h2'` | HTML tag：`h1`, `h2`, `h3`, `h4`, `h5`, `h6` |
| `size` | `string` | `null` | Text size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `weight` | `string` | `null` | Font weight: `normal`, `medium`, `semibold`, `bold`, `extrabold` |
| `color` | `string` | `null` | Text color |

### Style Props

Heading supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Heading level

```blade
<x-heading as="h1">Heading Level 1</x-heading>
<x-heading as="h2">Heading Level 2</x-heading>
<x-heading as="h3">Heading Level 3</x-heading>
<x-heading as="h4">Heading Level 4</x-heading>
<x-heading as="h5">Heading Level 5</x-heading>
<x-heading as="h6">Heading Level 6</x-heading>
```

## Custom Sizes

```blade
<x-heading size="4xl">Extra large heading</x-heading>
<x-heading size="3xl">Very large heading</x-heading>
<x-heading size="2xl">Large heading</x-heading>
<x-heading size="xl">Larger heading</x-heading>
<x-heading size="lg">Medium heading</x-heading>
```

## Font Weight

```blade
<x-heading weight="normal">Normal weight</x-heading>
<x-heading weight="medium">Medium weight</x-heading>
<x-heading weight="semibold">Semibold</x-heading>
<x-heading weight="bold">Bold</x-heading>
<x-heading weight="extrabold">Extra bold</x-heading>
```

## Colors

```blade
<x-heading color="primary">Primary heading</x-heading>
<x-heading color="success">Success heading</x-heading>
<x-heading color="danger">Danger heading</x-heading>
```

## Common Patterns

### Page Heading

```blade
<x-heading as="h1" size="4xl" mb="4">
    Welcome to Flowblade
</x-heading>
<x-text size="lg" color="gray">
    Laravel Blade component library based on Tailwind CSS
</x-text>
```

### Section Heading

```blade
<x-heading as="h2" size="2xl" mb="3">
    Features
</x-heading>
<x-text>
    Flowblade provides rich components...
</x-text>
```

### Card Heading

```blade
<x-box p="6" bg="white" rounded="lg" class="shadow">
    <x-heading as="h3" size="lg" mb="2">
        Card Heading
    </x-heading>
    <x-text>Card content...</x-text>
</x-box>
```

## Accessibility

The Heading component:
- Uses semantic HTML heading elements (h1-h6)
- Maintains proper heading hierarchy
- Works with screen readers
- Announces heading level to assistive technologies
- Supports proper ARIA attributes for headings
- Provides clear visual distinction for heading levels

