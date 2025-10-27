# Input

Input component for text input.

## Basic Usage

```blade
<x-input placeholder="Enter text" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `type` | `string` | `'text'` | Input type |
| `size` | `string` | `'md'` | Size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `readonly` | `boolean` | `false` | Read-only |
| `required` | `boolean` | `false` | Required |
| `invalid` | `boolean` | `false` | Invalid state |
| `placeholder` | `string` | `null` | Placeholder text |

## Sizes

```blade
<x-input size="xs" placeholder="Extra small" />
<x-input size="sm" placeholder="Small" />
<x-input size="md" placeholder="Medium" />
<x-input size="lg" placeholder="Large" />
<x-input size="xl" placeholder="Extra large" />
```

## Variants

```blade
<!-- Outline -->
<x-input variant="outline" placeholder="Border style" />

<!-- Filled -->
<x-input variant="filled" placeholder="Filled style" />

<!-- Flushed -->
<x-input variant="flushed" placeholder="Bottom line style" />
```

## Input Types

```blade
<x-input type="text" placeholder="text" />
<x-input type="email" placeholder="Email" />
<x-input type="password" placeholder="Password" />
<x-input type="number" placeholder="Number" />
<x-input type="tel" placeholder="Phone" />
<x-input type="url" placeholder="URL" />
<x-input type="search" placeholder="Search" />
```

## States

```blade
<!-- Disabled -->
<x-input disabled placeholder="Disabled" />

<!-- Read-only -->
<x-input readonly value="Read-only" />

<!-- Required -->
<x-input required placeholder="Required field" />

<!-- Invalid -->
<x-input invalid placeholder="Invalid input" />
```

## Common Patterns

### Form Fields

```blade
<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium mb-1">Username</label>
        <x-input name="username" placeholder="Enter username" />
    </div>
    
    <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <x-input type="email" name="email" placeholder="Enter email" />
    </div>
</div>
```

### Search Box

```blade
<x-input 
    type="search" 
    placeholder="Search..." 
    class="w-full"
/>
```

### Input with Validation

```blade
<div>
    <x-input 
        name="email"
        type="email"
        :invalid="$errors->has('email')"
        placeholder="Enter email"
    />
    @error('email')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
```

## Livewire Integration

```blade
<x-input 
    wire:model="username"
    placeholder="Username"
/>

<!-- Real-time Validation -->
<x-input 
    wire:model.live="email"
    :invalid="!empty($errors->get('email'))"
    placeholder="Email"
/>
```

## Alpine.js Integration

```blade
<div x-data="{ value: '' }">
    <x-input 
        x-model="value"
        placeholder="Enter content"
    />
    <p x-text="value"></p>
</div>
```

