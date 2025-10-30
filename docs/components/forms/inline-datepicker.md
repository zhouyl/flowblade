# InlineDatepicker

InlineDatepicker component for displaying an inline calendar picker. Useful for date selection without a separate input field. Perfect for booking systems, event scheduling, and date range selection.

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

### Style Props

InlineDatepicker supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### Hotel Booking

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Select Your Dates</x-heading>
    </x-card-header>

    <x-card-body>
        <x-inline-datepicker
            minDate="2024-01-01"
            maxDate="2024-12-31"
        />
    </x-card-body>
</x-card>
```

### Event Scheduling

```blade
<x-vstack spacing="4">
    <x-heading size="md">Schedule Event</x-heading>

    <x-inline-datepicker
        minDate="2024-01-01"
        value="2024-06-15"
    />

    <x-button>Confirm Date</x-button>
</x-vstack>
```

### Appointment Selection

```blade
<x-dialog title="Book Appointment">
    <x-text mb="4">Please select your preferred date:</x-text>

    <x-inline-datepicker
        minDate="2024-01-01"
        maxDate="2024-12-31"
    />

    <x-dialog-footer mt="6">
        <x-button variant="outline">Cancel</x-button>
        <x-button>Book</x-button>
    </x-dialog-footer>
</x-dialog>
```

## Accessibility

The InlineDatepicker component:
- Uses semantic HTML structure
- Supports keyboard navigation (Arrow keys, Enter, Tab)
- Works with screen readers
- Provides clear date selection interface
- Supports date range validation
- Announces selected dates to assistive technologies
- Supports proper ARIA attributes for date selection
- Maintains proper focus management for keyboard users

