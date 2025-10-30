# Checkbox

Checkbox component for selecting one or more options. Checkbox provides a flexible way to create checkbox inputs with support for various sizes, colors, and states. Perfect for multi-select options, agreements, and feature toggles.

## Basic Usage

```blade
<x-checkbox />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info` |
| `disabled` | `boolean` | `false` | Disabled state |
| `invalid` | `boolean` | `false` | Invalid state |
| `value` | `string` | `null` | Value |

### Style Props

Checkbox supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

```blade
<x-checkbox size="sm" />
<x-checkbox size="md" />
<x-checkbox size="lg" />
```

## Colors

```blade
<x-checkbox color="primary" checked />
<x-checkbox color="success" checked />
<x-checkbox color="warning" checked />
<x-checkbox color="danger" checked />
```

## States

```blade
<!-- Disabled -->
<x-checkbox disabled />

<!-- Invalid -->
<x-checkbox invalid />
```

## Common Patterns

### With Label

```blade
<x-flex as="label" align="center" gap="2">
    <x-checkbox name="agree" />
    <x-text as="span">I agree to the terms of service</x-text>
</x-flex>
```

### Checkbox Group

```blade
<x-vstack gap="2">
    <x-flex as="label" align="center" gap="2">
        <x-checkbox name="interests[]" value="reading" />
        <x-text as="span">Reading</x-text>
    </x-flex>
    <x-flex as="label" align="center" gap="2">
        <x-checkbox name="interests[]" value="music" />
        <x-text as="span">Music</x-text>
    </x-flex>
    <x-flex as="label" align="center" gap="2">
        <x-checkbox name="interests[]" value="sports" />
        <x-text as="span">Sports</x-text>
    </x-flex>
</x-vstack>
```

### Form Field

```blade
<x-box>
    <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="2">Select features</x-text>
    <x-vstack gap="2">
        <x-flex as="label" align="center" gap="2">
            <x-checkbox name="features[]" value="feature1" />
            <x-text as="span">Feature 1</x-text>
        </x-flex>
        <x-flex as="label" align="center" gap="2">
            <x-checkbox name="features[]" value="feature2" />
            <x-text as="span">Feature 2</x-text>
        </x-flex>
    </x-vstack>
</x-box>
```

## Livewire Integration

```blade
<x-flex as="label" align="center" gap="2">
    <x-checkbox wire:model="agreed" />
    <x-text as="span">I agree to the terms</x-text>
</x-flex>

<!-- Multiple selection -->
<x-vstack gap="2">
    @foreach($options as $option)
        <x-flex as="label" align="center" gap="2">
            <x-checkbox
                wire:model="selected"
                value="{{ $option->id }}"
            />
            <x-text as="span">{{ $option->name }}</x-text>
        </x-flex>
    @endforeach
</x-vstack>
```

## Alpine.js Integration

```blade
<x-box x-data="{ checked: false }">
    <x-flex as="label" align="center" gap="2">
        <x-checkbox x-model="checked" />
        <x-text as="span">Option</x-text>
    </x-flex>
    <x-text as="p" x-show="checked" mt="2" fontSize="sm" color="green.600">
        Selected
    </x-text>
</x-box>
```

## Accessibility

The Checkbox component:
- Uses semantic HTML structure with proper `<input type="checkbox">`
- Supports keyboard navigation (Space to toggle, Tab for focus)
- Works with screen readers
- Provides clear checked/unchecked states with ARIA attributes
- Should always be associated with a label element
- Announces state changes to screen readers
- Maintains focus management for keyboard users
- Provides visual feedback for focus and state
- Properly announces checked/unchecked state to screen readers
- Supports proper ARIA attributes for form validation

