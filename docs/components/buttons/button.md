# Button

Versatile button component with multiple variants and states. Button provides a flexible way to create interactive buttons with support for various colors, sizes, variants, and states.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | string | `'primary'` | Color scheme (primary, secondary, success, warning, danger, info, gray) |
| `size` | string | `'md'` | Button size (2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl) |
| `variant` | string | `'solid'` | Button style (solid, outline, ghost, link, subtle) |
| `rounded` | string | `'md'` | Border radius (none, sm, md, lg, xl, full) |
| `disabled` | bool | `false` | Disabled state |
| `loading` | bool | `false` | Loading state with spinner |
| `left-icon` | string | `null` | Icon name for left side |
| `right-icon` | string | `null` | Icon name for right side |
| `type` | string | `'button'` | Button type (button, submit, reset) |

### Style Props

Button supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-button>Click Me</x-button>
```

## Examples

### Colors

```blade
<x-button color="primary">Primary</x-button>
<x-button color="secondary">Secondary</x-button>
<x-button color="success">Success</x-button>
<x-button color="warning">Warning</x-button>
<x-button color="danger">Danger</x-button>
<x-button color="info">Info</x-button>
<x-button color="gray">Gray</x-button>
```

### Sizes

```blade
<x-button size="2xs">2XS</x-button>
<x-button size="xs">XS</x-button>
<x-button size="sm">Small</x-button>
<x-button size="md">Medium</x-button>
<x-button size="lg">Large</x-button>
<x-button size="xl">XL</x-button>
<x-button size="2xl">2XL</x-button>
<x-button size="3xl">3XL</x-button>
<x-button size="4xl">4XL</x-button>
```

### Variants

```blade
<x-button variant="solid">Solid</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
<x-button variant="link">Link</x-button>
<x-button variant="subtle">Subtle</x-button>
```

### With Icons

```blade
<x-button left-icon="heroicons:home">Home</x-button>
<x-button right-icon="heroicons:arrow-right">Next</x-button>
<x-button left-icon="heroicons:check" color="success">Confirm</x-button>
<x-button left-icon="heroicons:trash" color="danger" variant="outline">Delete</x-button>
```

### States

```blade
<x-button :loading="true">Loading...</x-button>
<x-button :disabled="true">Disabled</x-button>
<x-button color="success" :loading="true">Processing</x-button>
```

### Rounded

```blade
<x-button rounded="none">Square</x-button>
<x-button rounded="sm">Small Radius</x-button>
<x-button rounded="md">Medium Radius</x-button>
<x-button rounded="lg">Large Radius</x-button>
<x-button rounded="full">Pill</x-button>
```

### Button Types

```blade
<x-box as="form">
    <x-button type="submit" color="primary">Submit</x-button>
    <x-button type="reset" variant="outline">Reset</x-button>
    <x-button type="button">Button</x-button>
</x-box>
```

## Common Patterns

### Form Actions

```blade
<x-hstack spacing="sm" justify="end">
    <x-button variant="outline">Cancel</x-button>
    <x-button color="primary" type="submit">Save</x-button>
</x-hstack>
```

### Call to Action

```blade
<x-button
    color="primary"
    size="xl"
    right-icon="heroicons:arrow-right"
    w="full"
    class="md:w-auto"
>
    Get Started
</x-button>
```

### Icon Buttons

```blade
<x-button variant="ghost" size="sm" left-icon="heroicons:pencil">
    Edit
</x-button>

<x-button variant="ghost" size="sm" left-icon="heroicons:trash" color="danger">
    Delete
</x-button>
```

### Loading State

```blade
<x-button 
    :loading="$isProcessing" 
    color="primary"
    wire:click="process"
>
    Process Payment
</x-button>
```

### Button Group

```blade
<x-hstack spacing="0" class="inline-flex">
    <x-button rounded="none" class="rounded-l-md">Left</x-button>
    <x-button rounded="none" class="border-l-0">Middle</x-button>
    <x-button rounded="none" class="rounded-r-md border-l-0">Right</x-button>
</x-hstack>
```

### Social Buttons

```blade
<x-button
    left-icon="fa:github"
    variant="outline"
    w="full"
>
    Continue with GitHub
</x-button>

<x-button
    left-icon="fa:google"
    variant="outline"
    w="full"
>
    Continue with Google
</x-button>
```

### Download Button

```blade
<x-button 
    left-icon="heroicons:arrow-down-tray" 
    color="success"
    as="a"
    href="/download"
>
    Download
</x-button>
```

## With Livewire

```blade
<x-button wire:click="save" color="primary">
    Save Changes
</x-button>

<x-button 
    wire:click="delete" 
    wire:confirm="Are you sure?"
    color="danger"
>
    Delete
</x-button>

<x-button 
    wire:click="submit" 
    :loading="$isSubmitting"
    :disabled="$isSubmitting"
>
    Submit
</x-button>
```

## With Alpine.js

```blade
<div x-data="{ count: 0 }">
    <x-button @click="count++">
        Increment
    </x-button>
    
    <span x-text="count"></span>
    
    <x-button @click="count--">
        Decrement
    </x-button>
</div>
```

## Accessibility

```blade
<x-button aria-label="Close dialog">
    <x-icon name="heroicons:x-mark" />
</x-button>

<x-button :disabled="true" aria-disabled="true">
    Disabled Button
</x-button>
```

