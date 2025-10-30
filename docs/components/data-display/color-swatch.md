# ColorSwatch

Color swatch component for displaying color samples with optional labels and copy functionality. ColorSwatch provides a flexible way to display color samples with support for various sizes and variants. Perfect for color palettes, design systems, and color selection interfaces.

## Requirements

For copyable color swatches, this component requires **Alpine.js** to be installed in your project.

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Basic Usage

```blade
<x-color-swatch color="#3b82f6" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | `string` | `'#000000'` | Color value (hex, rgb, hsl, or named color) |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'square'` | Variant: `square`, `circle` |
| `withBorder` | `bool` | `true` | Whether to show border |
| `withShadow` | `bool` | `false` | Whether to show shadow |
| `label` | `string` | `null` | Optional label text |
| `showValue` | `bool` | `false` | Whether to show color value |
| `copyable` | `bool` | `false` | Whether the color value is copyable |

## Style Props

ColorSwatch supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Color Formats

### Hex Colors

```blade
<x-color-swatch color="#3b82f6" />
<x-color-swatch color="#ef4444" />
<x-color-swatch color="#10b981" />
```

### RGB Colors

```blade
<x-color-swatch color="rgb(59, 130, 246)" />
<x-color-swatch color="rgba(239, 68, 68, 0.8)" />
```

### HSL Colors

```blade
<x-color-swatch color="hsl(217, 91%, 60%)" />
<x-color-swatch color="hsla(0, 84%, 60%, 0.8)" />
```

### Named Colors

```blade
<x-color-swatch color="blue" />
<x-color-swatch color="red" />
<x-color-swatch color="green" />
```

## Sizes

```blade
<x-color-swatch color="#3b82f6" size="xs" />
<x-color-swatch color="#3b82f6" size="sm" />
<x-color-swatch color="#3b82f6" size="md" />
<x-color-swatch color="#3b82f6" size="lg" />
<x-color-swatch color="#3b82f6" size="xl" />
```

## Variants

### Square (Default)

```blade
<x-color-swatch color="#3b82f6" variant="square" />
```

### Circle

```blade
<x-color-swatch color="#3b82f6" variant="circle" />
```

## With Label

```blade
<x-color-swatch color="#3b82f6" label="Primary Blue" />
<x-color-swatch color="#ef4444" label="Error Red" />
<x-color-swatch color="#10b981" label="Success Green" />
```

## With Color Value

```blade
<x-color-swatch color="#3b82f6" :show-value="true" />
<x-color-swatch color="rgb(59, 130, 246)" :show-value="true" />
```

## With Label and Value

```blade
<x-color-swatch 
    color="#3b82f6" 
    label="Primary" 
    :show-value="true" 
/>
```

## Copyable Colors

```blade
<x-color-swatch 
    color="#3b82f6" 
    :copyable="true" 
    :show-value="true" 
/>
```

## Border and Shadow

### Without Border

```blade
<x-color-swatch color="#3b82f6" :with-border="false" />
```

### With Shadow

```blade
<x-color-swatch color="#3b82f6" :with-shadow="true" />
```

### Both

```blade
<x-color-swatch 
    color="#3b82f6" 
    :with-border="true" 
    :with-shadow="true" 
/>
```

## Common Patterns

### Color Palette

```blade
<div class="flex flex-wrap gap-4">
    @foreach([
        ['name' => 'Blue', 'color' => '#3b82f6'],
        ['name' => 'Red', 'color' => '#ef4444'],
        ['name' => 'Green', 'color' => '#10b981'],
        ['name' => 'Yellow', 'color' => '#f59e0b'],
        ['name' => 'Purple', 'color' => '#8b5cf6'],
        ['name' => 'Pink', 'color' => '#ec4899'],
    ] as $color)
    <x-color-swatch 
        :color="$color['color']" 
        :label="$color['name']"
        :show-value="true"
        :copyable="true"
    />
    @endforeach
</div>
```

### Brand Colors

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Brand Colors</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <x-color-swatch 
                color="#1e40af" 
                label="Primary"
                :show-value="true"
                :copyable="true"
                size="lg"
            />
            
            <x-color-swatch 
                color="#7c3aed" 
                label="Secondary"
                :show-value="true"
                :copyable="true"
                size="lg"
            />
            
            <x-color-swatch 
                color="#059669" 
                label="Success"
                :show-value="true"
                :copyable="true"
                size="lg"
            />
            
            <x-color-swatch 
                color="#dc2626" 
                label="Danger"
                :show-value="true"
                :copyable="true"
                size="lg"
            />
        </div>
    </x-card-body>
</x-card>
```

### Color Shades

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Blue Shades</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="flex flex-wrap gap-4">
            @foreach([
                ['shade' => '50', 'color' => '#eff6ff'],
                ['shade' => '100', 'color' => '#dbeafe'],
                ['shade' => '200', 'color' => '#bfdbfe'],
                ['shade' => '300', 'color' => '#93c5fd'],
                ['shade' => '400', 'color' => '#60a5fa'],
                ['shade' => '500', 'color' => '#3b82f6'],
                ['shade' => '600', 'color' => '#2563eb'],
                ['shade' => '700', 'color' => '#1d4ed8'],
                ['shade' => '800', 'color' => '#1e40af'],
                ['shade' => '900', 'color' => '#1e3a8a'],
            ] as $shade)
            <x-color-swatch 
                :color="$shade['color']" 
                :label="$shade['shade']"
                :show-value="true"
                :copyable="true"
            />
            @endforeach
        </div>
    </x-card-body>
</x-card>
```

### Theme Color Picker

```blade
<form method="POST" action="/settings/theme">
    @csrf
    
    <x-field label="Choose Theme Color">
        <div class="flex flex-wrap gap-4">
            @foreach($themeColors as $themeColor)
            <label class="cursor-pointer">
                <input 
                    type="radio" 
                    name="theme_color" 
                    value="{{ $themeColor->value }}"
                    class="sr-only peer"
                    {{ $themeColor->value === $currentTheme ? 'checked' : '' }}
                >
                <x-color-swatch 
                    :color="$themeColor->value"
                    :label="$themeColor->name"
                    size="lg"
                    class="peer-checked:ring-4 peer-checked:ring-blue-500"
                />
            </label>
            @endforeach
        </div>
    </x-field>
    
    <x-button type="submit" color="primary" class="mt-4">
        Save Theme
    </x-button>
</form>
```

### Product Color Options

```blade
<x-card>
    <x-card-body>
        <x-heading size="md" class="mb-4">{{ $product->name }}</x-heading>
        
        <x-text size="sm" weight="medium" class="mb-2">Available Colors:</x-text>
        
        <div class="flex gap-3">
            @foreach($product->colors as $color)
            <button 
                type="button"
                class="focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-full"
            >
                <x-color-swatch 
                    :color="$color->hex"
                    variant="circle"
                    size="lg"
                    :with-shadow="true"
                />
            </button>
            @endforeach
        </div>
    </x-card-body>
</x-card>
```

### Design System Documentation

```blade
<x-card>
    <x-card-header>
        <x-heading size="xl">Design System Colors</x-heading>
    </x-card-header>
    
    <x-card-body class="space-y-8">
        {{-- Primary Colors --}}
        <div>
            <x-heading size="lg" class="mb-4">Primary Colors</x-heading>
            <div class="grid grid-cols-5 gap-4">
                @foreach($designSystem['primary'] as $color)
                <x-color-swatch 
                    :color="$color['value']"
                    :label="$color['name']"
                    :show-value="true"
                    :copyable="true"
                    size="lg"
                />
                @endforeach
            </div>
        </div>
        
        {{-- Neutral Colors --}}
        <div>
            <x-heading size="lg" class="mb-4">Neutral Colors</x-heading>
            <div class="grid grid-cols-5 gap-4">
                @foreach($designSystem['neutral'] as $color)
                <x-color-swatch 
                    :color="$color['value']"
                    :label="$color['name']"
                    :show-value="true"
                    :copyable="true"
                    size="lg"
                />
                @endforeach
            </div>
        </div>
        
        {{-- Semantic Colors --}}
        <div>
            <x-heading size="lg" class="mb-4">Semantic Colors</x-heading>
            <div class="grid grid-cols-4 gap-4">
                @foreach($designSystem['semantic'] as $color)
                <x-color-swatch 
                    :color="$color['value']"
                    :label="$color['name']"
                    :show-value="true"
                    :copyable="true"
                    size="lg"
                />
                @endforeach
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Color Comparison

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Before & After</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="flex items-center gap-8">
            <div>
                <x-text size="sm" color="gray" class="mb-2">Before</x-text>
                <x-color-swatch 
                    color="#6b7280"
                    :show-value="true"
                    size="xl"
                />
            </div>
            
            <x-icon name="heroicons:arrow-right" class="w-6 h-6 text-gray-400" />
            
            <div>
                <x-text size="sm" color="gray" class="mb-2">After</x-text>
                <x-color-swatch 
                    color="#3b82f6"
                    :show-value="true"
                    size="xl"
                />
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Gradient Preview

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Gradient Colors</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="space-y-4">
            @foreach($gradients as $gradient)
            <div class="flex items-center gap-4">
                <x-text weight="medium" class="w-32">{{ $gradient->name }}</x-text>
                
                <div class="flex gap-2">
                    @foreach($gradient->colors as $color)
                    <x-color-swatch 
                        :color="$color"
                        :show-value="true"
                        :copyable="true"
                        size="sm"
                    />
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </x-card-body>
</x-card>
```

### Color Accessibility Checker

```blade
<x-card>
    <x-card-body>
        <div class="grid grid-cols-2 gap-8">
            <div>
                <x-text weight="medium" class="mb-4">Foreground Color</x-text>
                <x-color-swatch 
                    :color="$foregroundColor"
                    :show-value="true"
                    :copyable="true"
                    size="xl"
                />
            </div>
            
            <div>
                <x-text weight="medium" class="mb-4">Background Color</x-text>
                <x-color-swatch 
                    :color="$backgroundColor"
                    :show-value="true"
                    :copyable="true"
                    size="xl"
                />
            </div>
        </div>
        
        <div class="mt-6 p-4 rounded-lg" style="background-color: {{ $backgroundColor }}; color: {{ $foregroundColor }};">
            <x-text>Sample text with selected colors</x-text>
        </div>
        
        <div class="mt-4">
            <x-text size="sm" weight="medium">Contrast Ratio: {{ $contrastRatio }}</x-text>
            <x-badge :color="$contrastRatio >= 4.5 ? 'success' : 'danger'" class="mt-2">
                {{ $contrastRatio >= 4.5 ? 'WCAG AA Compliant' : 'Not Compliant' }}
            </x-badge>
        </div>
    </x-card-body>
</x-card>
```

## Livewire Integration

```blade
<div>
    <x-field label="Select Color">
        <div class="flex flex-wrap gap-4">
            @foreach($colors as $color)
            <button 
                type="button"
                wire:click="selectColor('{{ $color }}')"
            >
                <x-color-swatch 
                    :color="$color"
                    size="lg"
                    :class="$selectedColor === $color ? 'ring-4 ring-blue-500' : ''"
                />
            </button>
            @endforeach
        </div>
    </x-field>
    
    @if($selectedColor)
    <x-text size="sm" color="gray" class="mt-4">
        Selected: {{ $selectedColor }}
    </x-text>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class ColorPicker extends Component
{
    public $selectedColor = null;
    public $colors = [
        '#3b82f6', '#ef4444', '#10b981', 
        '#f59e0b', '#8b5cf6', '#ec4899'
    ];
    
    public function selectColor($color)
    {
        $this->selectedColor = $color;
    }
    
    public function render()
    {
        return view('livewire.color-picker');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ selectedColor: '#3b82f6' }">
    <div class="flex flex-wrap gap-4 mb-4">
        @foreach(['#3b82f6', '#ef4444', '#10b981', '#f59e0b'] as $color)
        <button 
            type="button"
            @click="selectedColor = '{{ $color }}'"
        >
            <x-color-swatch 
                color="{{ $color }}"
                size="lg"
                :class="selectedColor === '{{ $color }}' ? 'ring-4 ring-blue-500' : ''"
                x-bind:class="selectedColor === '{{ $color }}' ? 'ring-4 ring-blue-500' : ''"
            />
        </button>
        @endforeach
    </div>
    
    <div 
        class="p-6 rounded-lg"
        :style="`background-color: ${selectedColor}`"
    >
        <x-text class="text-white">Preview with selected color</x-text>
    </div>
</div>
```

## Accessibility

The ColorSwatch component:
- Uses semantic HTML structure
- Provides keyboard navigation for copyable swatches
- Includes focus indicators for interactive elements
- Supports screen readers with proper ARIA attributes
- Maintains proper color contrast for labels
- Provides visual feedback on copy action
- Works with form submissions
- Supports various color formats (hex, rgb, hsl, named)
- Announces color values to screen readers
- Supports proper ARIA labels for color information

