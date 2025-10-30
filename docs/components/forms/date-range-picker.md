# DateRangePicker

DateRangePicker component for selecting a date range with start and end dates. Powered by Flowbite JavaScript for interactive date selection. Perfect for date range filters, booking systems, and report date ranges.

## Basic Usage

```blade
<x-date-range-picker />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | `''` | Container element ID (auto-generated if empty) |
| `startId` | `string` | `''` | Start date input ID (auto-generated if empty) |
| `endId` | `string` | `''` | End date input ID (auto-generated if empty) |
| `startName` | `string` | `'start'` | Start date input name attribute |
| `endName` | `string` | `'end'` | End date input name attribute |
| `startValue` | `string` | `''` | Selected start date value |
| `endValue` | `string` | `''` | Selected end date value |
| `startPlaceholder` | `string` | `'Select date start'` | Placeholder for start date input |
| `endPlaceholder` | `string` | `'Select date end'` | Placeholder for end date input |
| `showIcon` | `boolean` | `true` | Whether to display calendar icons |
| `required` | `boolean` | `false` | Whether both dates are required |
| `disabled` | `boolean` | `false` | Whether both inputs are disabled |
| `readonly` | `boolean` | `false` | Whether both inputs are read-only |

DateRangePicker also supports all common style props for flexible styling.

## Examples

### With Custom Placeholders

```blade
<x-date-range-picker 
    startPlaceholder="From date"
    endPlaceholder="To date"
/>
```

### With Pre-selected Dates

```blade
<x-date-range-picker 
    startValue="2024-01-01"
    endValue="2024-12-31"
/>
```

### With Custom Names

```blade
<x-date-range-picker 
    startName="check_in"
    endName="check_out"
/>
```

### Required Date Range

```blade
<x-date-range-picker 
    required
    startPlaceholder="Check-in date"
    endPlaceholder="Check-out date"
/>
```

### Disabled State

```blade
<x-date-range-picker 
    disabled
    startValue="2024-01-01"
    endValue="2024-12-31"
/>
```

### Without Icons

```blade
<x-date-range-picker 
    showIcon="false"
/>
```

### In a Form

```blade
<x-form action="/search" method="GET">
    <x-field label="Date Range">
        <x-date-range-picker 
            startName="start_date"
            endName="end_date"
            required
        />
    </x-field>
    
    <x-button type="submit">Search</x-button>
</x-form>
```

## Accessibility

The DateRangePicker component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Arrow keys, Enter)
- Works with screen readers
- Provides clear date input labels
- Supports required field validation
- Announces selected date range to screen readers
- Supports proper ARIA attributes for date input validation

