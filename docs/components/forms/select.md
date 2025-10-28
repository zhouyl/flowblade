# Select

Enhanced select component with search, multi-select, and custom styling capabilities.

## Requirements

The searchable variant requires **Alpine.js** to be installed in your project for interactive functionality.

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

Or install via npm:

```bash
npm install alpinejs
```

## Basic Usage

```blade
<x-select label="Country" name="country">
    <option value="">Choose a country</option>
    <option value="us">United States</option>
    <option value="ca">Canada</option>
    <option value="fr">France</option>
    <option value="de">Germany</option>
</x-select>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string\|null` | `null` | Label text |
| `placeholder` | `string\|null` | `'Choose an option'` | Placeholder text |
| `size` | `string\|null` | `'md'` | Size: `sm`, `md`, `lg` |
| `variant` | `string\|null` | `'default'` | Variant: `default`, `underline` |
| `multiple` | `bool` | `false` | Allow multiple selections |
| `searchable` | `bool` | `false` | Enable search functionality |
| `disabled` | `bool` | `false` | Disable the select |
| `required` | `bool` | `false` | Mark as required |
| `invalid` | `bool` | `false` | Show error state |
| `helperText` | `string\|null` | `null` | Helper text below select |
| `errorText` | `string\|null` | `null` | Error message text |

## Sizes

### Small

```blade
<x-select label="Small Select" size="sm" name="small">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
</x-select>
```

### Medium (Default)

```blade
<x-select label="Medium Select" size="md" name="medium">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
</x-select>
```

### Large

```blade
<x-select label="Large Select" size="lg" name="large">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
</x-select>
```

## Variants

### Default

```blade
<x-select label="Default Select" variant="default" name="default">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-select>
```

### Underline

```blade
<x-select label="Underline Select" variant="underline" name="underline">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-select>
```

## Multiple Selection

```blade
<x-select 
    label="Select Multiple Countries" 
    name="countries[]" 
    :multiple="true"
>
    <option value="us">United States</option>
    <option value="ca">Canada</option>
    <option value="fr">France</option>
    <option value="de">Germany</option>
    <option value="uk">United Kingdom</option>
</x-select>
```

## Searchable Select

Requires Alpine.js for interactive search functionality.

```blade
<x-select 
    label="Search Country" 
    name="country" 
    :searchable="true"
>
    <option value="us">United States</option>
    <option value="ca">Canada</option>
    <option value="fr">France</option>
    <option value="de">Germany</option>
    <option value="uk">United Kingdom</option>
    <option value="jp">Japan</option>
    <option value="cn">China</option>
    <option value="in">India</option>
</x-select>
```

## Searchable Multi-Select

```blade
<x-select 
    label="Select Multiple Countries" 
    name="countries[]" 
    :searchable="true"
    :multiple="true"
>
    <option value="us">United States</option>
    <option value="ca">Canada</option>
    <option value="fr">France</option>
    <option value="de">Germany</option>
    <option value="uk">United Kingdom</option>
    <option value="jp">Japan</option>
    <option value="cn">China</option>
    <option value="in">India</option>
</x-select>
```

## States

### Disabled

```blade
<x-select label="Disabled Select" name="disabled" :disabled="true">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-select>
```

### Required

```blade
<x-select label="Required Select" name="required" :required="true">
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-select>
```

### Invalid

```blade
<x-select 
    label="Invalid Select" 
    name="invalid" 
    :invalid="true"
    error-text="Please select a valid option"
>
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</x-select>
```

## With Helper Text

```blade
<x-select 
    label="Country" 
    name="country"
    helper-text="Select your country of residence"
>
    <option value="">Choose a country</option>
    <option value="us">United States</option>
    <option value="ca">Canada</option>
    <option value="fr">France</option>
</x-select>
```

## Disabled Options

```blade
<x-select label="Select Option" name="option">
    <option value="">Choose an option</option>
    <option value="1">Available Option</option>
    <option value="2" disabled>Disabled Option</option>
    <option value="3">Another Available Option</option>
</x-select>
```

## Option Groups

```blade
<x-select label="Select Vehicle" name="vehicle">
    <option value="">Choose a vehicle</option>
    <optgroup label="Cars">
        <option value="sedan">Sedan</option>
        <option value="suv">SUV</option>
        <option value="coupe">Coupe</option>
    </optgroup>
    <optgroup label="Motorcycles">
        <option value="sport">Sport Bike</option>
        <option value="cruiser">Cruiser</option>
        <option value="touring">Touring</option>
    </optgroup>
</x-select>
```

## Livewire Integration

### Basic Livewire

```blade
<x-select 
    label="Category" 
    wire:model="category"
>
    <option value="">Select category</option>
    <option value="tech">Technology</option>
    <option value="health">Health</option>
    <option value="finance">Finance</option>
</x-select>
```

### Livewire with Live Update

```blade
<x-select 
    label="Status" 
    wire:model.live="status"
>
    <option value="">Select status</option>
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
    <option value="pending">Pending</option>
</x-select>
```

### Livewire Multi-Select

```blade
<x-select 
    label="Tags" 
    wire:model="tags"
    :multiple="true"
>
    <option value="laravel">Laravel</option>
    <option value="php">PHP</option>
    <option value="javascript">JavaScript</option>
    <option value="vue">Vue.js</option>
</x-select>
```

## Form Integration

```blade
<form action="/submit" method="POST">
    @csrf
    
    <x-select 
        label="Country" 
        name="country"
        :required="true"
        :invalid="$errors->has('country')"
        :error-text="$errors->first('country')"
    >
        <option value="">Choose a country</option>
        <option value="us" {{ old('country') == 'us' ? 'selected' : '' }}>United States</option>
        <option value="ca" {{ old('country') == 'ca' ? 'selected' : '' }}>Canada</option>
        <option value="fr" {{ old('country') == 'fr' ? 'selected' : '' }}>France</option>
    </x-select>
    
    <x-button type="submit" class="mt-4">Submit</x-button>
</form>
```

## Accessibility

The Select component:
- Uses semantic HTML `<select>` element
- Supports keyboard navigation (Arrow keys, Enter, Escape)
- Provides proper label association with `for` attribute
- Includes ARIA attributes for screen readers
- Supports required and disabled states
- Shows visual focus indicators
- Announces errors to screen readers
- Maintains focus management in searchable variant

## Notes

- Standard select uses native browser dropdown
- Searchable select requires Alpine.js
- Multiple selection works with both standard and searchable variants
- Use `name="field[]"` for multiple selections to receive array in backend
- Searchable variant syncs with hidden native select for form submission
- All Livewire directives (`wire:model`, `wire:change`, etc.) are supported
- Custom attributes are passed through to the underlying select element
- Underline variant is best for minimal designs
- Consider using searchable variant for long option lists (10+ options)

## Browser Support

- Standard select: All modern browsers
- Searchable select: Requires JavaScript enabled and Alpine.js support
- Multiple select: All modern browsers with native support

