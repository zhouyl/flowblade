# FloatingSelect

FloatingSelect component for creating a select dropdown with a floating label. The label floats above the input when focused or when it has a value. Perfect for modern forms with elegant label animations.

## Basic Usage

```blade
<x-floating-select label="Select an option">
    <option value="">Choose...</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-floating-select>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Floating label text |
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `invalid` | `boolean` | `false` | Invalid state |

FloatingSelect also supports all common style props for flexible styling.

### Style Props

FloatingSelect supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### With Multiple Options

```blade
<x-floating-select label="Choose a category">
    <option value="">Select...</option>
    <option value="electronics">Electronics</option>
    <option value="clothing">Clothing</option>
    <option value="books">Books</option>
</x-floating-select>
```

### Disabled State

```blade
<x-floating-select label="Disabled select" disabled>
    <option value="">Choose...</option>
    <option value="1">Option 1</option>
</x-floating-select>
```

### Required Field

```blade
<x-floating-select label="Required field" required>
    <option value="">Select...</option>
    <option value="1">Option 1</option>
</x-floating-select>
```

### Invalid State

```blade
<x-floating-select label="Invalid select" invalid>
    <option value="">Choose...</option>
    <option value="1">Option 1</option>
</x-floating-select>
```

### Different Sizes

```blade
<x-floating-select label="Small" size="sm">
    <option value="">Choose...</option>
    <option value="1">Option 1</option>
</x-floating-select>

<x-floating-select label="Medium" size="md">
    <option value="">Choose...</option>
    <option value="1">Option 1</option>
</x-floating-select>

<x-floating-select label="Large" size="lg">
    <option value="">Choose...</option>
    <option value="1">Option 1</option>
</x-floating-select>
```

### In a Form

```blade
<x-form action="/submit" method="POST">
    <x-floating-select label="Country" name="country" required>
        <option value="">Select a country...</option>
        <option value="us">United States</option>
        <option value="uk">United Kingdom</option>
        <option value="ca">Canada</option>
    </x-floating-select>
    
    <x-button type="submit" class="mt-4">Submit</x-button>
</x-form>
```

## Accessibility

The FloatingSelect component:
- Uses semantic HTML structure with proper `<select>` element
- Supports keyboard navigation (Tab, Arrow keys, Enter)
- Works with screen readers
- Provides clear floating labels that are associated with the select
- Supports required field validation with ARIA attributes
- Includes proper error state indication
- Maintains focus management for keyboard users

