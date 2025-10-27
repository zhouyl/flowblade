# InputGroup

Input group components for combining inputs with addons and elements.

## Components

- **InputGroup**: Container for grouping input with addons/elements
- **InputAddon**: Text addon (prefix/suffix) outside the input
- **InputElement**: Element (icon/button) inside the input

## Basic Usage

### With Left Addon

```blade
<x-input-group>
    <x-input-addon placement="left">https://</x-input-addon>
    <x-input placeholder="example.com" />
</x-input-group>
```

### With Right Addon

```blade
<x-input-group>
    <x-input placeholder="Enter amount" />
    <x-input-addon placement="right">.00</x-input-addon>
</x-input-group>
```

### With Both Addons

```blade
<x-input-group>
    <x-input-addon placement="left">$</x-input-addon>
    <x-input placeholder="0.00" />
    <x-input-addon placement="right">USD</x-input-addon>
</x-input-group>
```

## InputGroup Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

## InputAddon Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placement` | `string` | `'left'` | Placement: `left`, `right` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

## InputElement Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placement` | `string` | `'left'` | Placement: `left`, `right` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

## With Input Element (Icon Inside)

```blade
<x-input-group>
    <x-input-element placement="left">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
    </x-input-element>
    <x-input placeholder="Username" class="pl-10" />
</x-input-group>
```

## Sizes

```blade
<!-- Extra Small -->
<x-input-group size="xs">
    <x-input-addon placement="left" size="xs">@</x-input-addon>
    <x-input size="xs" placeholder="username" />
</x-input-group>

<!-- Small -->
<x-input-group size="sm">
    <x-input-addon placement="left" size="sm">@</x-input-addon>
    <x-input size="sm" placeholder="username" />
</x-input-group>

<!-- Medium (default) -->
<x-input-group size="md">
    <x-input-addon placement="left" size="md">@</x-input-addon>
    <x-input size="md" placeholder="username" />
</x-input-group>

<!-- Large -->
<x-input-group size="lg">
    <x-input-addon placement="left" size="lg">@</x-input-addon>
    <x-input size="lg" placeholder="username" />
</x-input-group>

<!-- Extra Large -->
<x-input-group size="xl">
    <x-input-addon placement="left" size="xl">@</x-input-addon>
    <x-input size="xl" placeholder="username" />
</x-input-group>
```

## Common Patterns

### URL Input

```blade
<x-field label="Website">
    <x-input-group>
        <x-input-addon placement="left">https://</x-input-addon>
        <x-input placeholder="example.com" />
    </x-input-group>
</x-field>
```

### Email Input

```blade
<x-field label="Email">
    <x-input-group>
        <x-input placeholder="username" />
        <x-input-addon placement="right">@example.com</x-input-addon>
    </x-input-group>
</x-field>
```

### Phone Number

```blade
<x-field label="Phone">
    <x-input-group>
        <x-input-addon placement="left">+1</x-input-addon>
        <x-input type="tel" placeholder="(555) 000-0000" />
    </x-input-group>
</x-field>
```

### Price Input

```blade
<x-field label="Price">
    <x-input-group>
        <x-input-addon placement="left">$</x-input-addon>
        <x-input type="number" placeholder="0.00" />
        <x-input-addon placement="right">USD</x-input-addon>
    </x-input-group>
</x-field>
```

### Username with Icon

```blade
<x-field label="Username">
    <x-input-group>
        <x-input-element placement="left">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </x-input-element>
        <x-input placeholder="Enter username" class="pl-10" />
    </x-input-group>
</x-field>
```

### Search with Button

```blade
<x-input-group>
    <x-input placeholder="Search..." />
    <x-button>Search</x-button>
</x-input-group>
```

### Domain Input

```blade
<x-field label="Domain">
    <x-input-group>
        <x-input placeholder="mysite" />
        <x-input-addon placement="right">.example.com</x-input-addon>
    </x-input-group>
</x-field>
```

### Percentage Input

```blade
<x-field label="Discount">
    <x-input-group>
        <x-input type="number" placeholder="0" />
        <x-input-addon placement="right">%</x-input-addon>
    </x-input-group>
</x-field>
```

## With Button Addon

```blade
<x-input-group>
    <x-input placeholder="Enter email" />
    <x-button>Subscribe</x-button>
</x-input-group>
```

## With Dropdown

```blade
<x-input-group>
    <x-native-select class="rounded-r-none border-r-0">
        <option>USD</option>
        <option>EUR</option>
        <option>GBP</option>
    </x-native-select>
    <x-input type="number" placeholder="0.00" class="rounded-l-none" />
</x-input-group>
```

## Livewire Integration

```blade
<x-field label="Website">
    <x-input-group>
        <x-input-addon placement="left">https://</x-input-addon>
        <x-input 
            wire:model="website"
            placeholder="example.com"
        />
    </x-input-group>
</x-field>
```

## Alpine.js Integration

```blade
<div x-data="{ protocol: 'https://' }">
    <x-field label="URL">
        <x-input-group>
            <x-input-addon placement="left" x-text="protocol"></x-input-addon>
            <x-input placeholder="example.com" />
        </x-input-group>
    </x-field>
    
    <div class="mt-2">
        <label>
            <input type="radio" x-model="protocol" value="https://"> HTTPS
        </label>
        <label>
            <input type="radio" x-model="protocol" value="http://"> HTTP
        </label>
    </div>
</div>
```

## Accessibility

- Use proper labels with Field component
- Ensure addons have appropriate text contrast
- Icons should have proper aria-labels when interactive
- Maintain keyboard navigation support

