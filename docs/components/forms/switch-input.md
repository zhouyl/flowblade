# SwitchInput

SwitchInput component for creating a toggle switch. Provides a user-friendly way to toggle between two states (on/off). Perfect for settings, preferences, and boolean options.

## Basic Usage

```blade
<x-switch-input />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `checked` | `boolean` | `false` | Initial checked state |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |

SwitchInput also supports all common style props for flexible styling.

### Style Props

SwitchInput supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Toggle

```blade
<x-switch-input />
```

### Pre-checked

```blade
<x-switch-input checked />
```

### With Label

```blade
<x-field label="Enable notifications">
    <x-switch-input />
</x-field>
```

### Different Sizes

```blade
<x-switch-input size="sm" />
<x-switch-input size="md" />
<x-switch-input size="lg" />
```

### Disabled State

```blade
<x-switch-input disabled />
<x-switch-input checked disabled />
```

### In a Form

```blade
<x-form action="/settings" method="POST">
    <x-field label="Email Notifications">
        <x-switch-input name="email_notifications" />
    </x-field>
    
    <x-field label="SMS Notifications">
        <x-switch-input name="sms_notifications" />
    </x-field>
    
    <x-field label="Push Notifications">
        <x-switch-input name="push_notifications" checked />
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

The SwitchInput component:
- Uses semantic HTML structure with proper `<input type="checkbox">`
- Supports keyboard navigation (Space/Enter to toggle, Tab for focus)
- Works with screen readers
- Provides clear on/off states with ARIA attributes
- Supports required field validation
- Announces state changes to screen readers
- Maintains focus management for keyboard users
- Provides visual feedback for focus and state
- Supports proper ARIA attributes for switch validation

