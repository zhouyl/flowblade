# CloseButton

Close button component for dialogs, modals, notifications, etc.

## Basic Usage

```blade
<x-close-button />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | Button size：`xs`, `sm`, `md`, `lg`, `xl` |
| `disabled` | `boolean` | `false` | Disabled state |
| `ariaLabel` | `string` | `'Close'` | Accessibility label |

## Sizes

```blade
<x-close-button size="xs" />
<x-close-button size="sm" />
<x-close-button size="md" />
<x-close-button size="lg" />
<x-close-button size="xl" />
```

## States

```blade
<!-- Disabled -->
<x-close-button disabled />
```

## Common Patterns

### Dialog Close Button

```blade
<div class="relative p-6 bg-white rounded-lg shadow-lg">
    <x-close-button 
        class="absolute top-4 right-4"
        aria-label="Close dialog"
    />
    <h2>Dialog Title</h2>
    <p>Dialog content...</p>
</div>
```

### Notification Close Button

```blade
<div class="flex items-start gap-3 p-4 bg-blue-50 rounded-lg">
    <div class="flex-1">
        <h3 class="font-semibold">Notification Title</h3>
        <p class="text-sm">Notification content...</p>
    </div>
    <x-close-button size="sm" />
</div>
```

### Alert Close Button

```blade
<div class="flex items-center justify-between p-4 bg-yellow-50 border border-yellow-200 rounded">
    <span>This is a warning message</span>
    <x-close-button size="sm" />
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ show: true }" x-show="show">
    <div class="p-4 bg-white rounded shadow">
        <x-close-button @click="show = false" />
        <p>Closeable content</p>
    </div>
</div>
```

## Livewire Integration

```blade
<div>
    @if($showNotification)
        <div class="p-4 bg-green-50 rounded">
            <x-close-button wire:click="$set('showNotification', false)" />
            <p>Operation successful!</p>
        </div>
    @endif
</div>
```

