# Switch Component

Toggle switch component for binary on/off states, built with Flowbite styling.

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
| `label` | string | `''` | Label text |

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
    <span class="font-bold">Custom Label</span>
</x-switch>
```

### Form Integration

```blade
<form>
    <x-field label="Notification Settings">
        <div class="space-y-3">
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
        </div>
    </x-field>
    
    <x-button type="submit">Save Settings</x-button>
</form>
```

### Settings Panel

```blade
<div class="space-y-4">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="font-semibold">Dark Mode</h3>
            <p class="text-sm text-gray-500">Enable dark theme</p>
        </div>
        <x-switch name="dark_mode" />
    </div>
    
    <x-divider />
    
    <div class="flex items-center justify-between">
        <div>
            <h3 class="font-semibold">Auto-save</h3>
            <p class="text-sm text-gray-500">Automatically save changes</p>
        </div>
        <x-switch name="auto_save" checked />
    </div>
    
    <x-divider />
    
    <div class="flex items-center justify-between">
        <div>
            <h3 class="font-semibold">Two-factor Authentication</h3>
            <p class="text-sm text-gray-500">Add an extra layer of security</p>
        </div>
        <x-switch name="2fa" color="success" />
    </div>
</div>
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

## Accessibility

The Switch component:
- Uses semantic checkbox input with `sr-only` class
- Supports keyboard navigation (Space to toggle)
- Includes proper ARIA attributes
- Focus ring for keyboard users
- Disabled state properly indicated
- Label association for screen readers

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

