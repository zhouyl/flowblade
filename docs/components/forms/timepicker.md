# Timepicker

Time picker component based on HTML5 time input with clock icon and validation support.

## Basic Usage

```blade
<x-timepicker 
    id="appointment-time" 
    name="appointment_time"
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | Auto-generated | Input ID |
| `name` | `string` | Same as `id` | Input name |
| `value` | `string` | `''` | Input value (HH:MM format) |
| `placeholder` | `string` | `''` | Placeholder text |
| `min` | `string` | `''` | Minimum time (HH:MM format) |
| `max` | `string` | `''` | Maximum time (HH:MM format) |
| `step` | `string` | `''` | Step interval in seconds |
| `showIcon` | `bool` | `true` | Whether to show clock icon |
| `required` | `bool` | `false` | Whether the input is required |
| `disabled` | `bool` | `false` | Whether the input is disabled |
| `readonly` | `bool` | `false` | Whether the input is readonly |

## Examples

### Default Timepicker

```blade
<x-timepicker 
    id="time" 
    name="time"
/>
```

### Timepicker with Default Value

```blade
<x-timepicker 
    id="time" 
    name="time"
    value="14:30"
/>
```

### Timepicker with Min and Max

```blade
<x-timepicker 
    id="business-hours" 
    name="business_hours"
    min="09:00"
    max="18:00"
/>
```

### Timepicker with Step

```blade
<!-- 15-minute intervals -->
<x-timepicker 
    id="appointment" 
    name="appointment"
    step="900"
/>

<!-- 30-minute intervals -->
<x-timepicker 
    id="meeting" 
    name="meeting"
    step="1800"
/>

<!-- 1-hour intervals -->
<x-timepicker 
    id="shift" 
    name="shift"
    step="3600"
/>
```

### Timepicker without Icon

```blade
<x-timepicker 
    id="time-no-icon" 
    name="time"
    :show-icon="false"
/>
```

### Required Timepicker

```blade
<x-timepicker 
    id="required-time" 
    name="time"
    :required="true"
/>
```

### Disabled Timepicker

```blade
<x-timepicker 
    id="disabled-time" 
    name="time"
    value="10:00"
    :disabled="true"
/>
```

### Readonly Timepicker

```blade
<x-timepicker 
    id="readonly-time" 
    name="time"
    value="15:30"
    :readonly="true"
/>
```

### Timepicker with Label

```blade
<div>
    <label for="appointment-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Appointment Time
    </label>
    <x-timepicker 
        id="appointment-time" 
        name="appointment_time"
        :required="true"
    />
</div>
```

### Timepicker with Helper Text

```blade
<div>
    <label for="meeting-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Meeting Time
    </label>
    <x-timepicker 
        id="meeting-time" 
        name="meeting_time"
        min="09:00"
        max="17:00"
    />
    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
        Select a time between 9:00 AM and 5:00 PM
    </p>
</div>
```

## Laravel Integration

### With Old Input

```blade
<x-timepicker 
    id="time" 
    name="time"
    value="{{ old('time') }}"
    :required="true"
/>

@error('time')
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
@enderror
```

### With Model Binding

```blade
<x-timepicker 
    id="opening-time" 
    name="opening_time"
    value="{{ $store->opening_time }}"
/>
```

### Appointment Booking Form

```blade
<form method="POST" action="{{ route('appointments.store') }}" class="space-y-6">
    @csrf
    
    <div>
        <label for="appointment-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Appointment Date
        </label>
        <x-datepicker 
            id="appointment-date" 
            name="appointment_date"
            value="{{ old('appointment_date') }}"
            :required="true"
            min-date="{{ date('m/d/Y') }}"
        />
        @error('appointment_date')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="appointment-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Appointment Time
        </label>
        <x-timepicker 
            id="appointment-time" 
            name="appointment_time"
            value="{{ old('appointment_time') }}"
            :required="true"
            min="09:00"
            max="17:00"
            step="900"
        />
        @error('appointment_time')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
            Available times: 9:00 AM - 5:00 PM (15-minute intervals)
        </p>
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Book Appointment
    </button>
</form>
```

### Business Hours Form

```blade
<form method="POST" action="{{ route('settings.business-hours') }}" class="space-y-6">
    @csrf
    
    <div class="grid grid-cols-2 gap-6">
        <div>
            <label for="opening-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Opening Time
            </label>
            <x-timepicker 
                id="opening-time" 
                name="opening_time"
                value="{{ old('opening_time', $settings->opening_time) }}"
                :required="true"
            />
            @error('opening_time')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="closing-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Closing Time
            </label>
            <x-timepicker 
                id="closing-time" 
                name="closing_time"
                value="{{ old('closing_time', $settings->closing_time) }}"
                :required="true"
            />
            @error('closing_time')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Save Business Hours
    </button>
</form>
```

### Event Schedule Form

```blade
<form method="POST" action="{{ route('events.store') }}" class="space-y-6">
    @csrf
    
    <div>
        <label for="event-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Event Name
        </label>
        <x-input 
            id="event-name" 
            name="name"
            value="{{ old('name') }}"
            :required="true"
        />
    </div>
    
    <div class="grid grid-cols-2 gap-6">
        <div>
            <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Start Time
            </label>
            <x-timepicker 
                id="start-time" 
                name="start_time"
                value="{{ old('start_time') }}"
                :required="true"
            />
        </div>
        
        <div>
            <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                End Time
            </label>
            <x-timepicker 
                id="end-time" 
                name="end_time"
                value="{{ old('end_time') }}"
                :required="true"
            />
        </div>
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Create Event
    </button>
</form>
```

## Time Format

The timepicker uses the HTML5 time input format:
- **24-hour format**: `HH:MM` (e.g., `14:30` for 2:30 PM)
- Hours: `00` to `23`
- Minutes: `00` to `59`
- Seconds (optional): `00` to `59`

## Step Values

The `step` attribute specifies the interval in seconds:
- `60` - 1-minute intervals
- `300` - 5-minute intervals
- `900` - 15-minute intervals
- `1800` - 30-minute intervals
- `3600` - 1-hour intervals

## Validation

### Laravel Validation Rules

```php
// In your controller or form request
public function rules()
{
    return [
        'appointment_time' => ['required', 'date_format:H:i'],
        'opening_time' => ['required', 'date_format:H:i', 'before:closing_time'],
        'closing_time' => ['required', 'date_format:H:i', 'after:opening_time'],
    ];
}
```

### Custom Validation Messages

```php
public function messages()
{
    return [
        'appointment_time.required' => 'Please select an appointment time.',
        'appointment_time.date_format' => 'Invalid time format.',
        'opening_time.before' => 'Opening time must be before closing time.',
        'closing_time.after' => 'Closing time must be after opening time.',
    ];
}
```

## Accessibility

The Timepicker component:
- Uses semantic HTML5 time input element
- Includes proper label associations
- Supports keyboard navigation
- Provides screen reader support
- Uses proper color contrast ratios
- Shows visual focus indicators
- Supports required field indicators

## Notes

- Based on native HTML5 time input
- Time format is always `HH:MM` (24-hour format)
- Browser support varies for time input styling
- Some browsers show AM/PM picker, others show 24-hour picker
- The `step` attribute controls the granularity of time selection
- Min and max times must be in `HH:MM` format
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported
- Responsive design

## Browser Support

- All modern browsers support HTML5 time input
- Styling may vary between browsers
- Mobile devices typically show native time pickers
- Desktop browsers may show different UI controls
- Fallback to text input in older browsers

## Related Components

- [Datepicker](datepicker.md) - Date picker component
- [FloatingLabel](floating-label.md) - Material Design style inputs
- [Input](input.md) - Basic input field
- [Field](field.md) - Form field with label and helper text

