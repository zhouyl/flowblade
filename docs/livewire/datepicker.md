# Livewire Datepicker Component

The Livewire Datepicker component provides an enhanced date picker with calendar navigation, date validation, and formatting capabilities.

## Features

- **Calendar navigation**: Navigate between months and years
- **Date validation**: Validate dates with min/max constraints
- **Date formatting**: Customize date display format
- **Disabled dates**: Disable specific dates from selection
- **Real-time binding**: Automatically sync selected date with server
- **Responsive**: Adapts to different screen sizes

## Basic Usage

```blade
<livewire:datepicker wire:model="selectedDate" />
```

## Properties

### Data Properties

- `value` (string|null): Selected date (YYYY-MM-DD format)
- `format` (string): Date storage format (default: 'Y-m-d')
- `displayFormat` (string): Date display format (default: 'd/m/Y')
- `minDate` (string|null): Minimum selectable date (YYYY-MM-DD)
- `maxDate` (string|null): Maximum selectable date (YYYY-MM-DD)
- `disabledDates` (array): Array of disabled dates (YYYY-MM-DD format)

### Display Properties

- `label` (string|null): Label text
- `placeholder` (string|null): Placeholder text (default: 'Select a date')
- `disabled` (boolean): Disable the datepicker (default: false)
- `required` (boolean): Mark as required (default: false)
- `invalid` (boolean): Show validation error state (default: false)
- `errorText` (string|null): Error message text

### State Properties

- `currentMonth` (string): Current month being displayed (YYYY-MM format)
- `isOpen` (boolean): Whether datepicker is open

## Methods

### Date Selection

```php
public function selectDate(string $date): void
public function clearDate(): void
```

Select a date or clear the current selection.

### Navigation

```php
public function previousMonth(): void
public function nextMonth(): void
```

Navigate to previous or next month.

### Datepicker Control

```php
public function toggleDatepicker(): void
public function openDatepicker(): void
public function closeDatepicker(): void
```

Control the datepicker visibility.

## Examples

### Basic Datepicker

```blade
<livewire:datepicker wire:model="selectedDate" />
```

### With Date Range

```blade
<livewire:datepicker 
    wire:model="startDate"
    minDate="{{ now()->format('Y-m-d') }}"
    maxDate="{{ now()->addMonths(3)->format('Y-m-d') }}"
/>
```

### With Disabled Dates

```php
// In your Livewire component
public function mount()
{
    $this->disabledDates = [
        now()->format('Y-m-d'),
        now()->addDay()->format('Y-m-d'),
        now()->addDays(2)->format('Y-m-d'),
    ];
}
```

```blade
<livewire:datepicker 
    wire:model="selectedDate"
    :disabledDates="$disabledDates"
/>
```

### With Custom Format

```blade
<livewire:datepicker 
    wire:model="selectedDate"
    displayFormat="m/d/Y"
/>
```

### With Validation

```blade
<livewire:datepicker 
    wire:model="selectedDate"
    label="Birth Date"
    :invalid="$errors->has('selectedDate')"
    :errorText="$errors->first('selectedDate')"
/>
```

### Complete Example

```blade
<div>
    <form wire:submit="save">
        <div class="mb-4">
            <livewire:datepicker 
                wire:model="form.startDate"
                label="Start Date"
                minDate="{{ now()->format('Y-m-d') }}"
                :invalid="$errors->has('form.startDate')"
                :errorText="$errors->first('form.startDate')"
            />
        </div>

        <div class="mb-4">
            <livewire:datepicker 
                wire:model="form.endDate"
                label="End Date"
                minDate="{{ $form['startDate'] ?? now()->format('Y-m-d') }}"
                :invalid="$errors->has('form.endDate')"
                :errorText="$errors->first('form.endDate')"
            />
        </div>

        <button type="submit">Save</button>
    </form>
</div>
```

## Styling

The datepicker component uses Flowbite styling by default. The calendar is displayed in a modal overlay that can be customized through CSS.

## Events

The datepicker component dispatches the following events:

- `date-selected`: Fired when a date is selected
- `date-cleared`: Fired when date is cleared
- `month-changed`: Fired when month changes

## Tips and Tricks

1. **Date ranges**: Use `minDate` and `maxDate` to restrict selectable dates
2. **Disabled dates**: Disable specific dates like weekends or holidays
3. **Custom formats**: Use PHP date format strings for custom display formats
4. **Keyboard navigation**: Use arrow keys to navigate the calendar
5. **Quick selection**: Click on month/year to jump to specific month/year

## Performance

For optimal performance:

1. Limit the number of disabled dates
2. Use date range constraints to reduce calendar rendering
3. Cache frequently used date calculations
4. Debounce date selection events if needed

## Troubleshooting

### Calendar not displaying

Ensure the datepicker is properly mounted and that the `currentMonth` property is initialized.

### Date not updating

Check that `wire:model` is properly configured and that the date format matches the expected format.

### Disabled dates not working

Ensure disabled dates are in the correct format (YYYY-MM-DD) and that they match the date being checked.

### Navigation not working

Check that `previousMonth()` and `nextMonth()` methods are being called correctly.

