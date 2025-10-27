# Box

Flexible layout container component with styling options.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `bg` | string | `null` | Background color (primary, secondary, success, warning, danger, info, gray) |
| `color` | string | `null` | Text color |
| `p` | string | `null` | Padding (0-16) |
| `m` | string | `null` | Margin (0-16) |
| `rounded` | string | `null` | Border radius (none, sm, md, lg, xl, full) |
| `shadow` | string | `null` | Shadow size (none, sm, md, lg, xl) |
| `border` | string | `null` | Border color |

## Basic Usage

```blade
<x-box p="6" bg="primary" rounded="lg" class="text-white">
    Content here
</x-box>
```

## Examples

### With Background Color

```blade
<x-box p="4" bg="success" rounded="md" class="text-white">
    Success message
</x-box>

<x-box p="4" bg="danger" rounded="md" class="text-white">
    Error message
</x-box>
```

### With Shadow

```blade
<x-box p="6" shadow="lg" rounded="md">
    Card-like box with shadow
</x-box>
```

### With Border

```blade
<x-box p="4" border="primary" rounded="lg">
    Bordered box
</x-box>
```

### Custom Element

```blade
<x-box as="section" p="8" bg="gray" rounded="xl">
    Section content
</x-box>
```

### Combining Props

```blade
<x-box 
    p="6" 
    m="4" 
    bg="info" 
    rounded="lg" 
    shadow="md" 
    class="text-white"
>
    Fully styled box
</x-box>
```

## With Livewire

```blade
<x-box 
    wire:click="handleClick" 
    p="4" 
    bg="primary" 
    rounded="md"
    class="cursor-pointer hover:bg-blue-700"
>
    Clickable box
</x-box>
```

## With Alpine.js

```blade
<div x-data="{ open: false }">
    <x-box 
        @click="open = !open" 
        p="4" 
        bg="secondary" 
        rounded="md"
        class="cursor-pointer"
    >
        Toggle content
    </x-box>
    
    <x-box x-show="open" p="4" bg="info" rounded="md" class="mt-2">
        Hidden content
    </x-box>
</div>
```

