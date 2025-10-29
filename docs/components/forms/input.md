# Input

Input component for text input. Input provides a flexible way to create text input fields with support for various sizes, variants, and states.

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

### Style Props

Input supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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
<x-vstack gap="4">
    <x-box>
        <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Username</x-text>
        <x-input name="username" placeholder="Enter username" />
    </x-box>

    <x-box>
        <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Email</x-text>
        <x-input type="email" name="email" placeholder="Enter email" />
    </x-box>
</x-vstack>
```

### Search Box

```blade
<x-input
    type="search"
    placeholder="Search..."
    w="full"
/>
```

### Input with Validation

```blade
<x-box>
    <x-input
        name="email"
        type="email"
        :invalid="$errors->has('email')"
        placeholder="Enter email"
    />
    @error('email')
        <x-text mt="1" fontSize="sm" color="red.600">{{ $message }}</x-text>
    @enderror
</x-box>
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
<x-box x-data="{ value: '' }">
    <x-input
        x-model="value"
        placeholder="Enter content"
    />
    <x-text as="p" x-text="value"></x-text>
</x-box>
```

