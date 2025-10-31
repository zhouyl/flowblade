# Text

Text component for displaying paragraph text. Text provides a flexible way to render text content with support for various sizes, weights, colors, and alignment options. Perfect for body text, descriptions, and content paragraphs.

## Basic Usage

```blade
<x-text>This is a paragraph of text</x-text>
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `as` | `string` | `'p'` | HTML tag |
| `size` | `string` | `null` | Text size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `weight` | `string` | `null` | Font weight: `normal`, `medium`, `semibold`, `bold` |
| `color` | `string` | `null` | Text color |
| `align` | `string` | `null` | Alignment: `left`, `center`, `right`, `justify` |
| `truncate` | `boolean` | `false` | Truncate text |
| `lineClamp` | `string` | `null` | Line clamp: `1`, `2`, `3`, `4`, `5`, `6` |

### Style Props

Text supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

```blade
<x-text size="xs">Extra small text</x-text>
<x-text size="sm">Small text</x-text>
<x-text size="md">Medium text</x-text>
<x-text size="lg">Large text</x-text>
<x-text size="xl">Extra large text</x-text>
```

## Font Weight

```blade
<x-text weight="normal">Normal weight</x-text>
<x-text weight="medium">Medium weight</x-text>
<x-text weight="semibold">Semibold</x-text>
<x-text weight="bold">Bold</x-text>
```

## Colors

```blade
<x-text color="primary">Primary text</x-text>
<x-text color="success">Success text</x-text>
<x-text color="warning">Warning text</x-text>
<x-text color="danger">Danger text</x-text>
<x-text color="gray">Gray text</x-text>
```

## Alignment

```blade
<x-text align="left">Left aligned</x-text>
<x-text align="center">Center aligned</x-text>
<x-text align="right">Right aligned</x-text>
<x-text align="justify">Justified</x-text>
```

## Truncation

```blade
<!-- Single line truncation -->
<x-text truncate w="64">
    This is a very long text that will be truncated with ellipsis when it exceeds the container width
</x-text>

<!-- Multi-line truncation -->
<x-text line-clamp="2" w="64">
    This is a very long text that will be truncated at the end of the second line with ellipsis.
    Content beyond will be hidden.
</x-text>
```

## Common Patterns

### Paragraph Text

```blade
<x-text mb="4">
    Flowblade is a Laravel Blade component library based on Tailwind CSS,
    providing rich UI components to help you quickly build modern web applications.
</x-text>
```

### Description text

```blade
<x-text size="sm" color="gray">
    Last updated on 2024-01-01
</x-text>
```

### Leading text

```blade
<x-text size="lg" mb="6">
    Welcome to our product, let's get started!
</x-text>
```

## Accessibility

The Text component:
- Uses semantic HTML paragraph elements
- Maintains proper text hierarchy
- Works with screen readers
- Supports proper text contrast
- Provides clear text formatting
- Announces text content to screen readers
- Supports proper ARIA attributes for text content

