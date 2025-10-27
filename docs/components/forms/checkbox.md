# Checkbox

Checkbox component.

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
<label class="flex items-center gap-2">
    <x-checkbox name="agree" />
    <span>I agree to the terms of service</span>
</label>
```

### Checkbox Group

```blade
<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-checkbox name="interests[]" value="reading" />
        <span>Reading</span>
    </label>
    <label class="flex items-center gap-2">
        <x-checkbox name="interests[]" value="music" />
        <span>Music</span>
    </label>
    <label class="flex items-center gap-2">
        <x-checkbox name="interests[]" value="sports" />
        <span>Sports</span>
    </label>
</div>
```

### Form Field

```blade
<div>
    <label class="block text-sm font-medium mb-2">Select features</label>
    <div class="space-y-2">
        <label class="flex items-center gap-2">
            <x-checkbox name="features[]" value="feature1" />
            <span>Feature 1</span>
        </label>
        <label class="flex items-center gap-2">
            <x-checkbox name="features[]" value="feature2" />
            <span>Feature 2</span>
        </label>
    </div>
</div>
```

## Livewire Integration

```blade
<label class="flex items-center gap-2">
    <x-checkbox wire:model="agreed" />
    <span>I agree to the terms</span>
</label>

<!-- Multiple selection -->
<div class="space-y-2">
    @foreach($options as $option)
        <label class="flex items-center gap-2">
            <x-checkbox 
                wire:model="selected"
                value="{{ $option->id }}"
            />
            <span>{{ $option->name }}</span>
        </label>
    @endforeach
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ checked: false }">
    <label class="flex items-center gap-2">
        <x-checkbox x-model="checked" />
        <span>Option</span>
    </label>
    <p x-show="checked" class="mt-2 text-sm text-green-600">
        Selected
    </p>
</div>
```

