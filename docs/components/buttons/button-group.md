# ButtonGroup

Button group component for grouping multiple buttons together.

## Basic Usage

```blade
<x-button-group>
    <x-button>Left</x-button>
    <x-button>Center</x-button>
    <x-button>Right</x-button>
</x-button-group>
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `orientation` | `string` | `'horizontal'` | Orientation: `horizontal`, `vertical` |
| `attached` | `boolean` | `true` | Connect buttons (no gap) |
| `spacing` | `string` | `null` | Spacing (only when `attached=false`)：`xs`, `sm`, `md`, `lg` |

## Horizontal Layout

```blade
<x-button-group>
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>
```

## Vertical Layout

```blade
<x-button-group orientation="vertical">
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>
```

## Separated Mode

```blade
<!-- Horizontal separated -->
<x-button-group :attached="false" spacing="sm">
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>

<!-- Vertical separated -->
<x-button-group orientation="vertical" :attached="false" spacing="md">
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>
```

## Common Patterns

### Toolbar

```blade
<x-button-group>
    <x-button variant="outline">
        <x-icon name="mdi:format-bold" />
    </x-button>
    <x-button variant="outline">
        <x-icon name="mdi:format-italic" />
    </x-button>
    <x-button variant="outline">
        <x-icon name="mdi:format-underline" />
    </x-button>
</x-button-group>
```

### Segmented Control

```blade
<x-button-group>
    <x-button variant="outline">Day</x-button>
    <x-button variant="outline">Week</x-button>
    <x-button variant="solid">Month</x-button>
    <x-button variant="outline">Year</x-button>
</x-button-group>
```

### Action Group

```blade
<x-button-group>
    <x-button color="success">Save</x-button>
    <x-button variant="outline">Cancel</x-button>
</x-button-group>
```

### Icon Button Group

```blade
<x-button-group>
    <x-icon-button icon="mdi:chevron-left" variant="outline" />
    <x-icon-button icon="mdi:chevron-right" variant="outline" />
</x-button-group>
```

## Combined with Other Variants

```blade
<!-- Different colors -->
<x-button-group>
    <x-button color="primary">Primary</x-button>
    <x-button color="secondary">Secondary</x-button>
    <x-button color="success">Success</x-button>
</x-button-group>

<!-- Different sizes -->
<x-button-group>
    <x-button size="sm">Small</x-button>
    <x-button size="sm">Center</x-button>
    <x-button size="sm">Large</x-button>
</x-button-group>
```

## Alpine.js Integration

```blade
<div x-data="{ active: 'tab1' }">
    <x-button-group>
        <x-button 
            @click="active = 'tab1'"
            :variant="active === 'tab1' ? 'solid' : 'outline'"
        >
            Tag 1
        </x-button>
        <x-button 
            @click="active = 'tab2'"
            :variant="active === 'tab2' ? 'solid' : 'outline'"
        >
            Tag 2
        </x-button>
        <x-button 
            @click="active = 'tab3'"
            :variant="active === 'tab3' ? 'solid' : 'outline'"
        >
            Tag 3
        </x-button>
    </x-button-group>
</div>
```

