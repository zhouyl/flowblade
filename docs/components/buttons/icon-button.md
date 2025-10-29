# IconButton

Icon button component for displaying icon-only buttons. IconButton provides a compact way to create icon-only buttons with support for various sizes, variants, and colors.

## Basic Usage

```blade
<x-icon-button icon="mdi:home" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `icon` | `string` | - | Icon name (required) |
| `size` | `string` | `'md'` | Button size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `variant` | `string` | `'solid'` | Button variant: `solid`, `outline`, `ghost`, `link` |
| `color` | `string` | `'primary'` | Color theme: `primary`, `secondary`, `success`, `warning`, `danger`, `info` |
| `rounded` | `boolean` | `false` | Rounded button |
| `disabled` | `boolean` | `false` | Disabled state |
| `loading` | `boolean` | `false` | Loading state |
| `type` | `string` | `'button'` | Button type |
| `ariaLabel` | `string` | `null` | Accessibility label |

### Style Props

IconButton supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

```blade
<x-icon-button icon="mdi:home" size="xs" />
<x-icon-button icon="mdi:home" size="sm" />
<x-icon-button icon="mdi:home" size="md" />
<x-icon-button icon="mdi:home" size="lg" />
<x-icon-button icon="mdi:home" size="xl" />
```

## Variants

```blade
<!-- Solid -->
<x-icon-button icon="mdi:home" variant="solid" />

<!-- Outline -->
<x-icon-button icon="mdi:home" variant="outline" />

<!-- Ghost -->
<x-icon-button icon="mdi:home" variant="ghost" />

<!-- Link -->
<x-icon-button icon="mdi:home" variant="link" />
```

## Colors

```blade
<x-icon-button icon="mdi:home" color="primary" />
<x-icon-button icon="mdi:home" color="secondary" />
<x-icon-button icon="mdi:home" color="success" />
<x-icon-button icon="mdi:home" color="warning" />
<x-icon-button icon="mdi:home" color="danger" />
```

## Rounded Button

```blade
<x-icon-button icon="mdi:home" rounded />
<x-icon-button icon="mdi:plus" rounded color="success" />
```

## States

```blade
<!-- Disabled -->
<x-icon-button icon="mdi:home" disabled />

<!-- Loading -->
<x-icon-button icon="mdi:home" loading />
```

## Accessibility

```blade
<x-icon-button 
    icon="mdi:close" 
    aria-label="Close dialog"
/>
```

## Common Patterns

### Toolbar Buttons

```blade
<x-flex gap="2">
    <x-icon-button icon="mdi:content-save" aria-label="Save" />
    <x-icon-button icon="mdi:printer" aria-label="Print" />
    <x-icon-button icon="mdi:share" aria-label="Share" />
</x-flex>
```

### Action Buttons

```blade
<x-flex gap="1">
    <x-icon-button icon="mdi:pencil" size="sm" variant="ghost" />
    <x-icon-button icon="mdi:delete" size="sm" variant="ghost" color="danger" />
</x-flex>
```

## Livewire Integration

```blade
<x-icon-button 
    icon="mdi:refresh" 
    wire:click="refresh"
    :loading="$isRefreshing"
/>
```

