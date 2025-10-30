# NumberInput

NumberInput component for numeric input with increment/decrement buttons. Provides a user-friendly interface for entering and adjusting numeric values.

## Basic Usage

```blade
<x-number-input />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `number` | `0` | Initial numeric value |
| `min` | `number` | `null` | Minimum value |
| `max` | `number` | `null` | Maximum value |
| `step` | `number` | `1` | Step increment/decrement |
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |

NumberInput also supports all common style props for flexible styling.

## Examples

### With Min and Max

```blade
<x-number-input 
    value="5"
    min="0"
    max="10"
/>
```

### With Custom Step

```blade
<x-number-input 
    value="0"
    step="0.5"
    min="0"
    max="100"
/>
```

### Different Sizes

```blade
<x-number-input size="sm" />
<x-number-input size="md" />
<x-number-input size="lg" />
```

### Disabled State

```blade
<x-number-input 
    value="42"
    disabled
/>
```

### Required Field

```blade
<x-number-input 
    required
    placeholder="Enter a number"
/>
```

### In a Form

```blade
<x-form action="/submit" method="POST">
    <x-field label="Quantity">
        <x-number-input 
            name="quantity"
            value="1"
            min="1"
            max="100"
            required
        />
    </x-field>
    
    <x-button type="submit">Add to Cart</x-button>
</x-form>
```

### Price Input

```blade
<x-number-input 
    value="0.00"
    step="0.01"
    min="0"
    placeholder="0.00"
/>
```

## Accessibility

The NumberInput component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear increment/decrement buttons
- Supports min/max validation

