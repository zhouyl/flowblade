# Button

Versatile button component with multiple variants and states. Button provides a flexible way to create interactive buttons with support for various colors, sizes, variants, and states. Perfect for actions, submissions, and user interactions.

## Components

- `<x-button>` - Main button component
- `<x-icon-button>` - Icon-only button component
- `<x-close-button>` - Close button component
- `<x-button-group>` - Button group container

## Props

### Button Component

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

### IconButton Component

Icon button component for displaying icon-only buttons. IconButton provides a compact way to create icon-only buttons with support for various sizes, variants, and colors. Perfect for toolbars, action menus, and compact interfaces.

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

### CloseButton Component

Close button component for dialogs, modals, notifications, etc. CloseButton provides a convenient way to create close buttons with consistent styling and accessibility. Perfect for dismissible components and modal windows.

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | Button size：`xs`, `sm`, `md`, `lg`, `xl` |
| `disabled` | `boolean` | `false` | Disabled state |
| `ariaLabel` | `string` | `'Close'` | Accessibility label |

### ButtonGroup Component

Button group component for grouping multiple buttons together. ButtonGroup provides a way to group related buttons with support for horizontal and vertical layouts. Perfect for toolbars, segmented controls, and action groups.

| Prop | Type | Default | Description |
|------|------|--------|------|
| `orientation` | `string` | `'horizontal'` | Orientation: `horizontal`, `vertical` |
| `attached` | `boolean` | `true` | Connect buttons (no gap) |
| `spacing` | `string` | `null` | Spacing (only when `attached=false`)：`xs`, `sm`, `md`, `lg` |

### Style Props

Button, IconButton, CloseButton, and ButtonGroup support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## IconButton Examples

### Sizes

```blade
<x-icon-button icon="mdi:home" size="xs" />
<x-icon-button icon="mdi:home" size="sm" />
<x-icon-button icon="mdi:home" size="md" />
<x-icon-button icon="mdi:home" size="lg" />
<x-icon-button icon="mdi:home" size="xl" />
```

### Variants

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

### Colors

```blade
<x-icon-button icon="mdi:home" color="primary" />
<x-icon-button icon="mdi:home" color="secondary" />
<x-icon-button icon="mdi:home" color="success" />
<x-icon-button icon="mdi:home" color="warning" />
<x-icon-button icon="mdi:home" color="danger" />
```

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

## CloseButton Examples

### Sizes

```blade
<x-close-button size="xs" />
<x-close-button size="sm" />
<x-close-button size="md" />
<x-close-button size="lg" />
<x-close-button size="xl" />
```

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

## ButtonGroup Examples

### Horizontal Layout

```blade
<x-button-group>
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>
```

### Vertical Layout

```blade
<x-button-group orientation="vertical">
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>
```

### Separated Mode

```blade
<!-- Horizontal separated -->
<x-button-group :attached="false" spacing="sm">
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>

<!-- Vertical separated -->
<x-button-group orientation="vertical" :attached="false" spacing="md">
    <x-button>button 1</x-button>
    <x-button>button 2</x-button>
    <x-button>button 3</x-button>
</x-button-group>
```

### Toolbar

```blade
<x-button-group>
    <x-button variant="outline">
        <x-dynamic-component :component="'icon'" name="mdi:format-bold" />
    </x-button>
    <x-button variant="outline">
        <x-dynamic-component :component="'icon'" name="mdi:format-italic" />
    </x-button>
    <x-button variant="outline">
        <x-dynamic-component :component="'icon'" name="mdi:format-underline" />
    </x-button>
</x-button-group>
```

### Segmented Control

```blade
<x-button-group>
    <x-button variant="outline">Day</x-button>
    <x-button variant="outline">Week</x-button>
    <x-button variant="solid">Month</x-button>
    <x-button variant="outline">Year</x-button>
</x-button-group>
```

### Icon Button Group

```blade
<x-button-group>
    <x-icon-button icon="mdi:chevron-left" variant="outline" />
    <x-icon-button icon="mdi:chevron-right" variant="outline" />
</x-button-group>
```

## Accessibility

### Button
The Button component:
- Uses semantic HTML structure with proper `<button>` element
- Supports keyboard navigation (Tab, Enter, Space)
- Works with screen readers
- Provides clear button labels and descriptions
- Supports disabled state with proper ARIA attributes
- Announces state changes to screen readers
- Maintains focus management for keyboard users
- Provides visual feedback for focus and state
- Supports ARIA labels for icon-only buttons

### IconButton
The IconButton component:
- Uses semantic HTML button element
- Requires `aria-label` for screen reader users (icon-only buttons must have labels)
- Supports keyboard navigation (Tab, Enter, Space)
- Has clear focus indicators
- Provides visual feedback on hover and active states
- Should always have an accessible label via `aria-label` or `ariaLabel` prop
- Works with screen readers to announce button purpose
- Maintains proper color contrast ratios

### CloseButton
The CloseButton component:
- Uses semantic HTML button element
- Includes proper ARIA labels for screen readers
- Supports keyboard navigation (Tab, Enter, Space)
- Has clear focus indicators
- Provides visual feedback on hover and active states
- Should always have an accessible label (default: "Close")
- Works with screen readers to announce button purpose
- Maintains proper color contrast ratios

### ButtonGroup
The ButtonGroup component:
- Uses semantic HTML structure with proper button elements
- Supports keyboard navigation (Tab, Arrow keys)
- Works with screen readers
- Provides clear button labels and descriptions
- Maintains focus management for keyboard users
- Provides visual feedback for focus and state
- Supports ARIA attributes for button groups
- Announces button state changes to screen readers
- Supports role attributes for segmented controls or toolbars

```blade
<x-button aria-label="Close dialog">
    <x-icon name="heroicons:x-mark" />
</x-button>

<x-button :disabled="true" aria-disabled="true">
    Disabled Button
</x-button>
```

