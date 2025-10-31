# Switch Component

Toggle switch component for binary on/off states, built with Flowbite styling. Switch provides a flexible way to create toggle switches with support for various sizes, colors, and states. Perfect for settings, preferences, and feature toggles.

**Note**: The component class is named `Switch_` because `switch` is a reserved keyword in PHP. However, it is registered as `<x-switch>` in Blade templates.

## Basic Usage

```blade
<x-switch label="Toggle me" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'md'` | Size: `sm`, `md`, `lg` |
| `color` | string | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `purple`, `teal`, `orange` |
| `disabled` | bool | `false` | Whether the switch is disabled |
| `label` | string | `''` | Label text displayed next to the switch |
| `checked` | `boolean` | `false` | Initial checked state |
| `required` | `boolean` | `false` | Required field |

### Style Props

Switch supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Switch

```blade
<x-switch label="Toggle me" />
```

### Checked State

```blade
<x-switch label="Checked toggle" checked />
```

### Disabled State

```blade
<x-switch label="Disabled toggle" disabled />

<x-switch label="Disabled checked" checked disabled />
```

### Colors

```blade
<x-switch label="Primary" color="primary" checked />

<x-switch label="Secondary" color="secondary" checked />

<x-switch label="Success" color="success" checked />

<x-switch label="Warning" color="warning" checked />

<x-switch label="Danger" color="danger" checked />

<x-switch label="Info" color="info" checked />

<x-switch label="Purple" color="purple" checked />

<x-switch label="Teal" color="teal" checked />

<x-switch label="Orange" color="orange" checked />
```

### Sizes

```blade
<x-switch label="Small toggle" size="sm" />

<x-switch label="Default toggle" size="md" />

<x-switch label="Large toggle" size="lg" />
```

### Without Label

```blade
<x-switch />
```

### With Slot Content

```blade
<x-switch>
    <x-text as="span" fontWeight="bold">Custom Label</x-text>
</x-switch>
```

### Form Integration

```blade
<x-box as="form">
    <x-field label="Notification Settings">
        <x-vstack gap="3">
            <x-switch
                name="email_notifications"
                label="Email notifications"
                checked
            />

            <x-switch
                name="push_notifications"
                label="Push notifications"
            />

            <x-switch
                name="sms_notifications"
                label="SMS notifications"
            />
        </x-vstack>
    </x-field>

    <x-button type="submit">Save Settings</x-button>
</x-box>
```

### Settings Panel

```blade
<x-vstack gap="4">
    <x-flex align="center" justify="between">
        <x-box>
            <x-heading as="h3" fontWeight="semibold">Dark Mode</x-heading>
            <x-text fontSize="sm" color="gray.500">Enable dark theme</x-text>
        </x-box>
        <x-switch name="dark_mode" />
    </x-flex>

    <x-divider />

    <x-flex align="center" justify="between">
        <x-box>
            <x-heading as="h3" fontWeight="semibold">Auto-save</x-heading>
            <x-text fontSize="sm" color="gray.500">Automatically save changes</x-text>
        </x-box>
        <x-switch name="auto_save" checked />
    </x-flex>

    <x-divider />

    <x-flex align="center" justify="between">
        <x-box>
            <x-heading as="h3" fontWeight="semibold">Two-factor Authentication</x-heading>
            <x-text fontSize="sm" color="gray.500">Add an extra layer of security</x-text>
        </x-box>
        <x-switch name="2fa" color="success" />
    </x-flex>
</x-vstack>
```

### Privacy Settings

```blade
<div class="space-y-4">
    <h2 class="text-xl font-bold">Privacy Settings</h2>
    
    <x-switch 
        label="Make profile public" 
        name="public_profile" 
    />
    
    <x-switch 
        label="Show email address" 
        name="show_email" 
    />
    
    <x-switch 
        label="Allow search engines to index profile" 
        name="search_indexing" 
    />
    
    <x-switch 
        label="Receive marketing emails" 
        name="marketing_emails" 
        checked 
    />
</div>
```

### Feature Toggles

```blade
<div class="grid grid-cols-2 gap-4">
    <div class="border rounded-lg p-4">
        <x-switch 
            label="Beta Features" 
            color="purple" 
        />
        <p class="text-sm text-gray-500 mt-2">
            Enable experimental features
        </p>
    </div>
    
    <div class="border rounded-lg p-4">
        <x-switch 
            label="Analytics" 
            color="info" 
            checked 
        />
        <p class="text-sm text-gray-500 mt-2">
            Help us improve by sharing usage data
        </p>
    </div>
    
    <div class="border rounded-lg p-4">
        <x-switch 
            label="Notifications" 
            color="success" 
            checked 
        />
        <p class="text-sm text-gray-500 mt-2">
            Receive app notifications
        </p>
    </div>
    
    <div class="border rounded-lg p-4">
        <x-switch 
            label="Auto-update" 
            color="warning" 
        />
        <p class="text-sm text-gray-500 mt-2">
            Automatically install updates
        </p>
    </div>
</div>
```

### With Livewire

```blade
<x-switch 
    label="Enable feature" 
    wire:model.live="featureEnabled" 
/>
```

### With Alpine.js

```blade
<div x-data="{ enabled: false }">
    <x-switch 
        label="Toggle feature" 
        x-model="enabled" 
    />
    
    <p x-show="enabled" class="mt-2 text-green-600">
        Feature is enabled!
    </p>
</div>
```

### Accessibility Example

```blade
<x-switch 
    label="Enable accessibility features" 
    name="accessibility" 
    aria-describedby="accessibility-description" 
/>
<p id="accessibility-description" class="text-sm text-gray-500 mt-1">
    Turn on screen reader support and keyboard navigation enhancements
</p>
```

## Additional Examples

### Without Label

```blade
<x-switch />
```

### Pre-checked

```blade
<x-switch checked />
```

### With Field Wrapper

```blade
<x-field label="Enable notifications">
    <x-switch />
</x-field>
```

### Different Sizes

```blade
<x-switch size="sm" />
<x-switch size="md" />
<x-switch size="lg" />
```

### In a Form

```blade
<x-form action="/settings" method="POST">
    <x-field label="Email Notifications">
        <x-switch name="email_notifications" />
    </x-field>

    <x-field label="SMS Notifications">
        <x-switch name="sms_notifications" />
    </x-field>

    <x-field label="Push Notifications">
        <x-switch name="push_notifications" checked />
    </x-field>

    <x-button type="submit" class="mt-4">Save Settings</x-button>
</x-form>
```

### Settings Panel

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Preferences</x-heading>
    </x-card-header>

    <x-card-body class="space-y-4">
        <div class="flex items-center justify-between">
            <div>
                <x-text weight="medium">Dark Mode</x-text>
                <x-text size="sm" color="gray">Use dark theme</x-text>
            </div>
            <x-switch-input />
        </div>

        <x-separator />

        <div class="flex items-center justify-between">
            <div>
                <x-text weight="medium">Notifications</x-text>
                <x-text size="sm" color="gray">Receive notifications</x-text>
            </div>
            <x-switch-input checked />
        </div>
    </x-card-body>
</x-card>
```

## Accessibility

The Switch component:
- Uses semantic checkbox input with `sr-only` class for screen readers
- Supports keyboard navigation (Space to toggle, Tab for focus)
- Includes proper ARIA attributes for validation
- Focus ring for keyboard users
- Disabled state properly indicated
- Label association for screen readers
- Announces switch state to screen readers
- Provides clear on/off states with visual feedback
- Maintains focus management for keyboard users
- Supports required field validation

## Browser Support

The Switch component uses:
- CSS pseudo-elements (::after)
- Tailwind CSS peer utilities
- CSS transitions
- RTL support

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Checkbox](./checkbox.md) - Checkbox input
- [Radio](./radio.md) - Radio button
- [Field](./field.md) - Form field wrapper

