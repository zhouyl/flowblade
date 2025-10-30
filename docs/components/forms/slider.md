# Slider

Slider component for selecting a value from a range. Perfect for volume controls, brightness adjustment, and value selection.

## Basic Usage

```blade
<x-slider :value="50" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `float\|int` | `0` | Current value |
| `min` | `float\|int` | `0` | Minimum value |
| `max` | `float\|int` | `100` | Maximum value |
| `step` | `float\|int` | `1` | Step increment |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `disabled` | `boolean` | `false` | Disabled state |
| `showValue` | `boolean` | `false` | Show current value |
| `showMarks` | `boolean` | `false` | Show min/max marks |
| `orientation` | `string` | `'horizontal'` | Orientation: `horizontal`, `vertical` |

## Events

| Event | Payload | Description |
|-------|---------|-------------|
| `slider-change` | `{ value }` | Fired when value changes |
| `slider-change-end` | `{ value }` | Fired when dragging ends |

## With Custom Range

```blade
<x-slider :min="0" :max="200" :value="100" />
```

## With Step

```blade
<x-slider :min="0" :max="100" :step="5" :value="50" />
```

## Sizes

```blade
<x-slider size="xs" :value="25" />
<x-slider size="sm" :value="35" />
<x-slider size="md" :value="50" />
<x-slider size="lg" :value="65" />
<x-slider size="xl" :value="75" />
```

## Colors

```blade
<x-slider color="primary" :value="50" />
<x-slider color="secondary" :value="50" />
<x-slider color="success" :value="50" />
<x-slider color="warning" :value="50" />
<x-slider color="danger" :value="50" />
<x-slider color="info" :value="50" />
```

## With Value Display

```blade
<x-slider :value="50" show-value />
```

## With Marks

```blade
<x-slider :min="0" :max="100" :value="50" show-marks />
```

## Disabled State

```blade
<x-slider :value="50" disabled />
```

## Common Patterns

### Volume Control

```blade
<x-field label="Volume">
    <x-slider 
        :min="0" 
        :max="100" 
        :value="75" 
        show-value
        show-marks
    />
</x-field>
```

### Brightness Control

```blade
<x-field label="Brightness">
    <x-slider 
        :min="0" 
        :max="100" 
        :value="80" 
        color="warning"
        show-value
    />
</x-field>
```

### Price Range

```blade
<x-field label="Max Price">
    <x-slider 
        :min="0" 
        :max="1000" 
        :step="10" 
        :value="500" 
        show-value
        show-marks
    />
</x-field>
```

### Temperature Control

```blade
<x-field label="Temperature (°C)">
    <x-slider 
        :min="16" 
        :max="30" 
        :step="0.5" 
        :value="22" 
        color="danger"
        show-value
    />
</x-field>
```

### Rating

```blade
<x-field label="Rating">
    <x-slider 
        :min="1" 
        :max="5" 
        :step="1" 
        :value="3" 
        color="warning"
        show-value
        show-marks
    />
</x-field>
```

## Livewire Integration

```blade
<div>
    <x-slider 
        :value="$volume"
        @slider-change="$wire.set('volume', $event.detail.value)"
        show-value
    />
    
    <p class="mt-2">Current volume: {{ $volume }}</p>
</div>
```

### Livewire Component Example

```php
class SliderDemo extends Component
{
    public $volume = 50;
    public $brightness = 75;
    
    public function render()
    {
        return view('livewire.slider-demo');
    }
}
```

```blade
<div>
    <x-field label="Volume">
        <x-slider 
            :value="$volume"
            @slider-change="$wire.set('volume', $event.detail.value)"
            show-value
        />
    </x-field>
    
    <x-field label="Brightness" class="mt-4">
        <x-slider 
            :value="$brightness"
            @slider-change="$wire.set('brightness', $event.detail.value)"
            color="warning"
            show-value
        />
    </x-field>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    volume: 50,
    brightness: 75
}">
    <x-field label="Volume">
        <x-slider 
            :value="volume"
            @slider-change="volume = $event.detail.value"
            show-value
        />
    </x-field>
    
    <x-field label="Brightness" class="mt-4">
        <x-slider 
            :value="brightness"
            @slider-change="brightness = $event.detail.value"
            color="warning"
            show-value
        />
    </x-field>
    
    <div class="mt-4 p-4 bg-gray-100 rounded">
        <p>Volume: <span x-text="volume"></span>%</p>
        <p>Brightness: <span x-text="brightness"></span>%</p>
    </div>
</div>
```

### With Debounced Updates

```blade
<div x-data="{ 
    value: 50,
    debouncedValue: 50,
    timeout: null,
    handleChange(newValue) {
        this.value = newValue;
        clearTimeout(this.timeout);
        this.timeout = setTimeout(() => {
            this.debouncedValue = newValue;
            // Save to server
            fetch('/api/save', {
                method: 'POST',
                body: JSON.stringify({ value: newValue })
            });
        }, 500);
    }
}">
    <x-slider 
        :value="value"
        @slider-change="handleChange($event.detail.value)"
        show-value
    />
    
    <p class="mt-2 text-sm text-gray-600">
        Saved value: <span x-text="debouncedValue"></span>
    </p>
</div>
```

### Multiple Sliders

```blade
<div x-data="{ 
    red: 255,
    green: 128,
    blue: 0,
    get color() {
        return `rgb(${this.red}, ${this.green}, ${this.blue})`;
    }
}">
    <x-field label="Red">
        <x-slider 
            :min="0" 
            :max="255" 
            :value="red"
            @slider-change="red = $event.detail.value"
            color="danger"
            show-value
        />
    </x-field>
    
    <x-field label="Green" class="mt-4">
        <x-slider 
            :min="0" 
            :max="255" 
            :value="green"
            @slider-change="green = $event.detail.value"
            color="success"
            show-value
        />
    </x-field>
    
    <x-field label="Blue" class="mt-4">
        <x-slider 
            :min="0" 
            :max="255" 
            :value="blue"
            @slider-change="blue = $event.detail.value"
            color="info"
            show-value
        />
    </x-field>
    
    <div class="mt-4 p-8 rounded" :style="`background-color: ${color}`"></div>
</div>
```

## Accessibility

The Slider component:
- Supports keyboard navigation (arrow keys, Tab)
- Provides visual feedback during interaction
- Shows current value when enabled
- Maintains proper focus management
- Works with screen readers
- Supports disabled state
- Announces value changes to screen readers
- Supports proper ARIA attributes for slider validation

