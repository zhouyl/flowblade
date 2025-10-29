# CloseButton

Close button component for dialogs, modals, notifications, etc. CloseButton provides a convenient way to create close buttons with consistent styling and accessibility.

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

### Style Props

CloseButton supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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
<x-box position="relative" p="6" bg="white" rounded="lg" class="shadow-lg">
    <x-close-button
        position="absolute"
        top="4"
        right="4"
        aria-label="Close dialog"
    />
    <x-heading as="h2">Dialog Title</x-heading>
    <x-text>Dialog content...</x-text>
</x-box>
```

### Notification Close Button

```blade
<x-flex align="start" gap="3" p="4" bg="blue.50" rounded="lg">
    <x-box flex="1">
        <x-heading as="h3" fontWeight="semibold">Notification Title</x-heading>
        <x-text fontSize="sm">Notification content...</x-text>
    </x-box>
    <x-close-button size="sm" />
</x-flex>
```

### Alert Close Button

```blade
<x-flex align="center" justify="between" p="4" bg="yellow.50" border="1" borderColor="yellow.200" rounded="md">
    <x-text as="span">This is a warning message</x-text>
    <x-close-button size="sm" />
</x-flex>
```

## Alpine.js Integration

```blade
<x-box x-data="{ show: true }" x-show="show">
    <x-box p="4" bg="white" rounded="md" class="shadow">
        <x-close-button @click="show = false" />
        <x-text>Closeable content</x-text>
    </x-box>
</x-box>
```

## Livewire Integration

```blade
<x-box>
    @if($showNotification)
        <x-box p="4" bg="green.50" rounded="md">
            <x-close-button wire:click="$set('showNotification', false)" />
            <x-text>Operation successful!</x-text>
        </x-box>
    @endif
</x-box>
```

