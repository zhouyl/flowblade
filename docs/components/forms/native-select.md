# NativeSelect

NativeSelect component for creating a native HTML select dropdown. Uses the browser's native select element for better accessibility and performance. Perfect for simple dropdowns and mobile-friendly forms.

## Basic Usage

```blade
<x-native-select>
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-native-select>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `invalid` | `boolean` | `false` | Invalid state |

NativeSelect also supports all common style props for flexible styling.

## Examples

### With Multiple Options

```blade
<x-native-select name="category">
    <option value="">Select a category...</option>
    <option value="electronics">Electronics</option>
    <option value="clothing">Clothing</option>
    <option value="books">Books</option>
    <option value="food">Food</option>
</x-native-select>
```

### Different Sizes

```blade
<x-native-select size="sm">
    <option value="">Small</option>
    <option value="1">Option 1</option>
</x-native-select>

<x-native-select size="md">
    <option value="">Medium</option>
    <option value="1">Option 1</option>
</x-native-select>

<x-native-select size="lg">
    <option value="">Large</option>
    <option value="1">Option 1</option>
</x-native-select>
```

### Different Variants

```blade
<!-- Outline -->
<x-native-select variant="outline">
    <option value="">Outline</option>
    <option value="1">Option 1</option>
</x-native-select>

<!-- Filled -->
<x-native-select variant="filled">
    <option value="">Filled</option>
    <option value="1">Option 1</option>
</x-native-select>

<!-- Flushed -->
<x-native-select variant="flushed">
    <option value="">Flushed</option>
    <option value="1">Option 1</option>
</x-native-select>
```

### Disabled State

```blade
<x-native-select disabled>
    <option value="">Disabled</option>
    <option value="1">Option 1</option>
</x-native-select>
```

### Required Field

```blade
<x-native-select required>
    <option value="">Select an option...</option>
    <option value="1">Option 1</option>
</x-native-select>
```

### In a Form

```blade
<x-form action="/submit" method="POST">
    <x-field label="Country">
        <x-native-select name="country" required>
            <option value="">Select a country...</option>
            <option value="us">United States</option>
            <option value="uk">United Kingdom</option>
            <option value="ca">Canada</option>
        </x-native-select>
    </x-field>
    
    <x-button type="submit">Submit</x-button>
</x-form>
```

## Accessibility

The NativeSelect component:
- Uses native HTML select element
- Supports keyboard navigation (Tab, Arrow keys, Enter)
- Works with screen readers
- Provides clear option labels
- Supports required field validation
- Announces selected option to screen readers
- Supports proper ARIA attributes for select validation

