# InlineDatepicker

InlineDatepicker component for displaying an inline calendar picker. Useful for date selection without a separate input field.

## Basic Usage

```blade
<x-inline-datepicker />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | `''` | Container element ID (auto-generated if empty) |
| `value` | `string` | `''` | Selected date value |
| `minDate` | `string` | `''` | Minimum selectable date |
| `maxDate` | `string` | `''` | Maximum selectable date |
| `disabled` | `boolean` | `false` | Disabled state |

InlineDatepicker also supports all common style props for flexible styling.

## Examples

### With Pre-selected Date

```blade
<x-inline-datepicker value="2024-06-15" />
```

### With Date Range Limits

```blade
<x-inline-datepicker 
    minDate="2024-01-01"
    maxDate="2024-12-31"
/>
```

### Disabled State

```blade
<x-inline-datepicker 
    disabled
    value="2024-06-15"
/>
```

### In a Modal

```blade
<x-dialog title="Select a Date">
    <x-inline-datepicker />
    
    <x-dialog-footer>
        <x-button variant="outline">Cancel</x-button>
        <x-button>Confirm</x-button>
    </x-dialog-footer>
</x-dialog>
```

### With Custom Styling

```blade
<x-inline-datepicker 
    bg="blue.50"
    p="4"
    rounded="lg"
/>
```

## Accessibility

The InlineDatepicker component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear date selection interface
- Supports date range validation

