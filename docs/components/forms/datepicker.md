# Datepicker

Date picker component with Flowbite JS integration for selecting dates, date ranges, and inline date display.

## Components

- `<x-datepicker>` - Single date picker input
- `<x-date-range-picker>` - Date range picker with start and end dates
- `<x-inline-datepicker>` - Inline date picker display

## Requirements

The Datepicker component requires Flowbite JS to be included in your project:

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or if using npm:

```bash
npm install flowbite
```

```javascript
import 'flowbite';
```

## Basic Usage

### Single Datepicker

```blade
<x-datepicker 
    id="birthday" 
    name="birthday" 
    placeholder="Select your birthday"
/>
```

### Date Range Picker

```blade
<x-date-range-picker 
    start-name="start_date" 
    end-name="end_date"
/>
```

### Inline Datepicker

```blade
<x-inline-datepicker 
    id="calendar" 
    date="02/25/2024"
/>
```

## Props

### Datepicker Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | Auto-generated | Input ID |
| `name` | `string` | Same as `id` | Input name |
| `value` | `string` | `''` | Input value |
| `placeholder` | `string` | `'Select date'` | Placeholder text |
| `autohide` | `bool` | `false` | Whether to autohide after selection |
| `buttons` | `bool` | `false` | Whether to show action buttons (Today, Clear) |
| `format` | `string` | `'mm/dd/yyyy'` | Date format |
| `minDate` | `string` | `''` | Minimum selectable date |
| `maxDate` | `string` | `''` | Maximum selectable date |
| `orientation` | `string` | `'bottom'` | Orientation: `top`, `bottom`, `left`, `right` |
| `title` | `string` | `''` | Datepicker title |
| `showIcon` | `bool` | `true` | Whether to show calendar icon |
| `required` | `bool` | `false` | Whether the input is required |
| `disabled` | `bool` | `false` | Whether the input is disabled |
| `readonly` | `bool` | `false` | Whether the input is readonly |

### DateRangePicker Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | Auto-generated | Container ID |
| `startId` | `string` | Auto-generated | Start date input ID |
| `endId` | `string` | Auto-generated | End date input ID |
| `startName` | `string` | `'start'` | Start date input name |
| `endName` | `string` | `'end'` | End date input name |
| `startValue` | `string` | `''` | Start date value |
| `endValue` | `string` | `''` | End date value |
| `startPlaceholder` | `string` | `'Select date start'` | Start date placeholder |
| `endPlaceholder` | `string` | `'Select date end'` | End date placeholder |
| `showIcon` | `bool` | `true` | Whether to show calendar icon |
| `required` | `bool` | `false` | Whether the inputs are required |
| `disabled` | `bool` | `false` | Whether the inputs are disabled |
| `readonly` | `bool` | `false` | Whether the inputs are readonly |

### InlineDatepicker Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | Auto-generated | Container ID |
| `date` | `string` | `''` | Default date value |

## Examples

### Default Datepicker

```blade
<x-datepicker 
    id="default-datepicker" 
    name="date" 
    placeholder="Select date"
/>
```

### Datepicker with Autohide

```blade
<x-datepicker 
    id="autohide-datepicker" 
    name="date" 
    :autohide="true"
    placeholder="Select date"
/>
```

### Datepicker with Action Buttons

```blade
<x-datepicker 
    id="buttons-datepicker" 
    name="date" 
    :buttons="true"
    placeholder="Select date"
/>
```

### Datepicker with Custom Format

```blade
<!-- MM/DD/YYYY format -->
<x-datepicker 
    id="format-datepicker" 
    name="date" 
    format="mm/dd/yyyy"
    placeholder="MM/DD/YYYY"
/>

<!-- DD/MM/YYYY format -->
<x-datepicker 
    id="format-datepicker-2" 
    name="date" 
    format="dd/mm/yyyy"
    placeholder="DD/MM/YYYY"
/>

<!-- YYYY-MM-DD format -->
<x-datepicker 
    id="format-datepicker-3" 
    name="date" 
    format="yyyy-mm-dd"
    placeholder="YYYY-MM-DD"
/>
```

### Datepicker with Min and Max Dates

```blade
<x-datepicker 
    id="minmax-datepicker" 
    name="date" 
    min-date="06/04/2024"
    max-date="05/05/2025"
    placeholder="Select date"
/>
```

### Datepicker with Custom Orientation

```blade
<!-- Bottom Right -->
<x-datepicker 
    id="orientation-datepicker" 
    name="date" 
    orientation="bottom right"
    placeholder="Select date"
/>

<!-- Top Left -->
<x-datepicker 
    id="orientation-datepicker-2" 
    name="date" 
    orientation="top left"
    placeholder="Select date"
/>
```

### Datepicker with Title

```blade
<x-datepicker 
    id="title-datepicker" 
    name="date" 
    title="Select your appointment date"
    placeholder="Select date"
/>
```

### Datepicker without Icon

```blade
<x-datepicker 
    id="no-icon-datepicker" 
    name="date" 
    :show-icon="false"
    placeholder="Select date"
/>
```

### Required Datepicker

```blade
<x-datepicker 
    id="required-datepicker" 
    name="date" 
    :required="true"
    placeholder="Select date"
/>
```

### Disabled Datepicker

```blade
<x-datepicker 
    id="disabled-datepicker" 
    name="date" 
    value="01/15/2024"
    :disabled="true"
/>
```

### Readonly Datepicker

```blade
<x-datepicker 
    id="readonly-datepicker" 
    name="date" 
    value="01/15/2024"
    :readonly="true"
/>
```

### Date Range Picker

```blade
<x-date-range-picker 
    id="date-range" 
    start-name="start_date" 
    end-name="end_date"
    start-placeholder="Start date"
    end-placeholder="End date"
/>
```

### Date Range Picker with Values

```blade
<x-date-range-picker 
    id="date-range-values" 
    start-name="start_date" 
    end-name="end_date"
    start-value="01/01/2024"
    end-value="01/31/2024"
/>
```

### Date Range Picker without Icons

```blade
<x-date-range-picker 
    id="date-range-no-icon" 
    start-name="start_date" 
    end-name="end_date"
    :show-icon="false"
/>
```

### Inline Datepicker

```blade
<x-inline-datepicker 
    id="inline-calendar" 
    date="02/25/2024"
/>
```

### Inline Datepicker without Default Date

```blade
<x-inline-datepicker 
    id="inline-calendar-empty"
/>
```

## Laravel Integration

### With Old Input

```blade
<x-datepicker 
    id="date" 
    name="date"
    value="{{ old('date') }}"
    :required="true"
/>

@error('date')
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
@enderror
```

### With Model Binding

```blade
<x-datepicker 
    id="birthday" 
    name="birthday"
    value="{{ $user->birthday }}"
/>
```

### Booking Form Example

```blade
<form method="POST" action="{{ route('bookings.store') }}" class="space-y-6">
    @csrf
    
    <div>
        <label for="check-in" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Check-in Date
        </label>
        <x-datepicker 
            id="check-in" 
            name="check_in_date"
            value="{{ old('check_in_date') }}"
            :required="true"
            min-date="{{ date('m/d/Y') }}"
        />
        @error('check_in_date')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="check-out" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Check-out Date
        </label>
        <x-datepicker 
            id="check-out" 
            name="check_out_date"
            value="{{ old('check_out_date') }}"
            :required="true"
            min-date="{{ date('m/d/Y') }}"
        />
        @error('check_out_date')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Book Now
    </button>
</form>
```

### Date Range Filter Example

```blade
<form method="GET" action="{{ route('reports.index') }}" class="space-y-4">
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Date Range
        </label>
        <x-date-range-picker
            id="report-date-range"
            start-name="start_date"
            end-name="end_date"
            start-value="{{ request('start_date') }}"
            end-value="{{ request('end_date') }}"
        />
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Filter Reports
    </button>
</form>
```

### Event Calendar Example

```blade
<div class="max-w-md mx-auto">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Event Calendar</h2>
    <x-inline-datepicker
        id="event-calendar"
        date="{{ date('m/d/Y') }}"
    />
</div>
```

## JavaScript API

You can programmatically control the datepicker using JavaScript:

```javascript
// Get datepicker instance
const datepickerEl = document.getElementById('my-datepicker');
const datepicker = FlowbiteInstances.getInstance('Datepicker', 'my-datepicker');

// Get currently selected date
const selectedDate = datepicker.getDate();

// Set date programmatically
datepicker.setDate('05/31/2024');

// Show datepicker
datepicker.show();

// Hide datepicker
datepicker.hide();

// Get parent datepicker instance with extended methods
const parentInstance = datepicker.getDatepickerInstance();
```

### Custom Initialization

```javascript
import { Datepicker } from 'flowbite';

const datepickerEl = document.getElementById('custom-datepicker');

const options = {
    autohide: true,
    format: 'yyyy-mm-dd',
    maxDate: '2025-12-31',
    minDate: '2024-01-01',
    orientation: 'bottom',
    buttons: true,
    autoSelectToday: 1,
    title: 'Select Date',
    onShow: () => {
        console.log('Datepicker shown');
    },
    onHide: () => {
        console.log('Datepicker hidden');
    }
};

const datepicker = new Datepicker(datepickerEl, options);
```

## Date Formats

Supported date formats:

- `mm/dd/yyyy` - Month/Day/Year (default)
- `dd/mm/yyyy` - Day/Month/Year
- `yyyy-mm-dd` - Year-Month-Day (ISO format)
- `dd-mm-yyyy` - Day-Month-Year
- `mm-dd-yyyy` - Month-Day-Year
- `yyyy/mm/dd` - Year/Month/Day

## Accessibility

The Datepicker component:
- Uses semantic HTML input elements
- Includes proper ARIA attributes
- Supports keyboard navigation
- Provides screen reader support
- Uses proper color contrast ratios
- Shows visual focus indicators

## Notes

- Requires Flowbite JS to be included in your project
- The `datepicker` attribute is required for Flowbite to initialize the component
- Date format must match the format specified in the `format` prop
- Min and max dates must be in the same format as the `format` prop
- Orientation can be combined (e.g., "bottom right", "top left")
- Action buttons show "Today" and "Clear" options
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported
- Responsive design

## Browser Support

- All modern browsers
- Requires JavaScript enabled
- Requires Flowbite JS library
- Responsive design
- Dark mode support
- Touch-friendly on mobile devices

## Related Components

- [FloatingLabel](floating-label.md) - Material Design style inputs
- [Input](input.md) - Basic input field
- [Field](field.md) - Form field with label and helper text

