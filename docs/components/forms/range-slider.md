# RangeSlider

Range slider component for selecting a range of values.

## Basic Usage

```blade
<x-range-slider :min-value="25" :max-value="75" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `minValue` | `float\|int` | `0` | Minimum selected value |
| `maxValue` | `float\|int` | `100` | Maximum selected value |
| `min` | `float\|int` | `0` | Minimum allowed value |
| `max` | `float\|int` | `100` | Maximum allowed value |
| `step` | `float\|int` | `1` | Step increment |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `disabled` | `boolean` | `false` | Disabled state |
| `showValues` | `boolean` | `false` | Show current values |
| `showMarks` | `boolean` | `false` | Show min/max marks |
| `orientation` | `string` | `'horizontal'` | Orientation: `horizontal`, `vertical` |

## Events

| Event | Payload | Description |
|-------|---------|-------------|
| `range-slider-change` | `{ minValue, maxValue }` | Fired when values change |
| `range-slider-change-end` | `{ minValue, maxValue }` | Fired when dragging ends |

## With Custom Range

```blade
<x-range-slider 
    :min="0" 
    :max="1000" 
    :min-value="200" 
    :max-value="800" 
/>
```

## With Step

```blade
<x-range-slider 
    :min="0" 
    :max="100" 
    :step="5" 
    :min-value="20" 
    :max-value="80" 
/>
```

## Sizes

```blade
<x-range-slider size="xs" :min-value="20" :max-value="80" />
<x-range-slider size="sm" :min-value="20" :max-value="80" />
<x-range-slider size="md" :min-value="20" :max-value="80" />
<x-range-slider size="lg" :min-value="20" :max-value="80" />
<x-range-slider size="xl" :min-value="20" :max-value="80" />
```

## Colors

```blade
<x-range-slider color="primary" :min-value="20" :max-value="80" />
<x-range-slider color="secondary" :min-value="20" :max-value="80" />
<x-range-slider color="success" :min-value="20" :max-value="80" />
<x-range-slider color="warning" :min-value="20" :max-value="80" />
<x-range-slider color="danger" :min-value="20" :max-value="80" />
<x-range-slider color="info" :min-value="20" :max-value="80" />
```

## With Values Display

```blade
<x-range-slider :min-value="25" :max-value="75" show-values />
```

## With Marks

```blade
<x-range-slider 
    :min="0" 
    :max="100" 
    :min-value="25" 
    :max-value="75" 
    show-marks 
/>
```

## Disabled State

```blade
<x-range-slider :min-value="25" :max-value="75" disabled />
```

## Common Patterns

### Price Range Filter

```blade
<x-field label="Price Range">
    <x-range-slider 
        :min="0" 
        :max="1000" 
        :min-value="100" 
        :max-value="500" 
        :step="10"
        show-values
        show-marks
    />
</x-field>
```

### Age Range

```blade
<x-field label="Age Range">
    <x-range-slider 
        :min="18" 
        :max="100" 
        :min-value="25" 
        :max-value="65" 
        show-values
    />
</x-field>
```

### Date Range (Years)

```blade
<x-field label="Year Range">
    <x-range-slider 
        :min="2000" 
        :max="2024" 
        :min-value="2010" 
        :max-value="2020" 
        show-values
        show-marks
    />
</x-field>
```

### Temperature Range

```blade
<x-field label="Temperature Range (°C)">
    <x-range-slider 
        :min="0" 
        :max="40" 
        :min-value="18" 
        :max-value="26" 
        :step="0.5"
        color="danger"
        show-values
    />
</x-field>
```

### Percentage Range

```blade
<x-field label="Discount Range">
    <x-range-slider 
        :min="0" 
        :max="100" 
        :min-value="10" 
        :max-value="50" 
        :step="5"
        color="success"
        show-values
        show-marks
    />
</x-field>
```

## Livewire Integration

```blade
<div>
    <x-range-slider 
        :min-value="$minPrice"
        :max-value="$maxPrice"
        :min="0"
        :max="1000"
        @range-slider-change="
            $wire.set('minPrice', $event.detail.minValue);
            $wire.set('maxPrice', $event.detail.maxValue);
        "
        show-values
    />
    
    <p class="mt-2">
        Price range: ${{ $minPrice }} - ${{ $maxPrice }}
    </p>
</div>
```

### Livewire Component Example

```php
class RangeSliderDemo extends Component
{
    public $minPrice = 100;
    public $maxPrice = 500;
    public $minAge = 25;
    public $maxAge = 65;
    
    public function render()
    {
        return view('livewire.range-slider-demo');
    }
}
```

```blade
<div>
    <x-field label="Price Range">
        <x-range-slider 
            :min-value="$minPrice"
            :max-value="$maxPrice"
            :min="0"
            :max="1000"
            @range-slider-change="
                $wire.set('minPrice', $event.detail.minValue);
                $wire.set('maxPrice', $event.detail.maxValue);
            "
            show-values
        />
    </x-field>
    
    <x-field label="Age Range" class="mt-4">
        <x-range-slider 
            :min-value="$minAge"
            :max-value="$maxAge"
            :min="18"
            :max="100"
            @range-slider-change="
                $wire.set('minAge', $event.detail.minValue);
                $wire.set('maxAge', $event.detail.maxValue);
            "
            show-values
        />
    </x-field>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    minPrice: 100,
    maxPrice: 500
}">
    <x-field label="Price Range">
        <x-range-slider 
            :min-value="minPrice"
            :max-value="maxPrice"
            :min="0"
            :max="1000"
            @range-slider-change="
                minPrice = $event.detail.minValue;
                maxPrice = $event.detail.maxValue;
            "
            show-values
        />
    </x-field>
    
    <div class="mt-4 p-4 bg-gray-100 rounded">
        <p>Selected range: $<span x-text="minPrice"></span> - $<span x-text="maxPrice"></span></p>
    </div>
</div>
```

### With Filtering

```blade
<div x-data="{ 
    minPrice: 0,
    maxPrice: 1000,
    products: [
        { name: 'Product A', price: 150 },
        { name: 'Product B', price: 350 },
        { name: 'Product C', price: 750 },
        { name: 'Product D', price: 950 }
    ],
    get filteredProducts() {
        return this.products.filter(p => 
            p.price >= this.minPrice && p.price <= this.maxPrice
        );
    }
}">
    <x-field label="Price Filter">
        <x-range-slider 
            :min-value="minPrice"
            :max-value="maxPrice"
            :min="0"
            :max="1000"
            :step="50"
            @range-slider-change="
                minPrice = $event.detail.minValue;
                maxPrice = $event.detail.maxValue;
            "
            show-values
        />
    </x-field>
    
    <div class="mt-4">
        <p class="font-semibold mb-2">
            Showing <span x-text="filteredProducts.length"></span> products
        </p>
        <template x-for="product in filteredProducts" :key="product.name">
            <div class="p-3 bg-white border rounded mb-2">
                <span x-text="product.name"></span> - 
                $<span x-text="product.price"></span>
            </div>
        </template>
    </div>
</div>
```

### With Debounced API Call

```blade
<div x-data="{ 
    minValue: 0,
    maxValue: 100,
    timeout: null,
    handleChange(min, max) {
        this.minValue = min;
        this.maxValue = max;
        
        clearTimeout(this.timeout);
        this.timeout = setTimeout(() => {
            // Call API with new range
            fetch(`/api/filter?min=${min}&max=${max}`)
                .then(response => response.json())
                .then(data => console.log(data));
        }, 500);
    }
}">
    <x-range-slider 
        :min-value="minValue"
        :max-value="maxValue"
        @range-slider-change="handleChange($event.detail.minValue, $event.detail.maxValue)"
        show-values
    />
</div>
```

## Accessibility

The RangeSlider component:
- Supports keyboard navigation (arrow keys for each thumb)
- Provides visual feedback during interaction
- Shows current values when enabled
- Maintains proper focus management
- Works with screen readers
- Supports disabled state
- Prevents thumbs from crossing each other

