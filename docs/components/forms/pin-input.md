# PinInput

PinInput component for entering PIN codes or verification codes. Provides a series of input fields for entering individual digits. Perfect for two-factor authentication, email verification, and secure code entry.

## Basic Usage

```blade
<x-pin-input />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `length` | `integer` | `4` | Number of PIN input fields |
| `type` | `string` | `'numeric'` | Input type: `numeric`, `alphanumeric` |
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |

PinInput also supports all common style props for flexible styling.

### Style Props

PinInput supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### 4-Digit PIN

```blade
<x-pin-input length="4" />
```

### 6-Digit Code

```blade
<x-pin-input length="6" />
```

### Alphanumeric Code

```blade
<x-pin-input 
    length="6"
    type="alphanumeric"
/>
```

### Different Sizes

```blade
<x-pin-input length="4" size="sm" />
<x-pin-input length="4" size="md" />
<x-pin-input length="4" size="lg" />
```

### Disabled State

```blade
<x-pin-input 
    length="4"
    disabled
/>
```

### Required Field

```blade
<x-pin-input 
    length="6"
    required
/>
```

### Verification Code Form

```blade
<x-form action="/verify" method="POST">
    <x-field label="Verification Code">
        <x-text size="sm" color="gray" class="mb-3">
            Enter the 6-digit code sent to your email
        </x-text>
        <x-pin-input 
            name="code"
            length="6"
            required
        />
    </x-field>
    
    <x-button type="submit" class="mt-4">Verify</x-button>
</x-form>
```

### Two-Factor Authentication

```blade
<x-form action="/2fa" method="POST">
    <x-field label="Two-Factor Code">
        <x-text size="sm" color="gray" class="mb-3">
            Enter the code from your authenticator app
        </x-text>
        <x-pin-input 
            name="totp"
            length="6"
            type="numeric"
            required
        />
    </x-field>
    
    <x-button type="submit">Verify</x-button>
</x-form>
```

## Accessibility

The PinInput component:
- Uses semantic HTML structure with proper input elements
- Supports keyboard navigation (Tab, Arrow keys, Backspace)
- Works with screen readers
- Provides clear input fields with proper labels
- Auto-focuses next field on input for seamless entry
- Announces field count and current position to screen readers
- Supports paste functionality for accessibility
- Maintains focus management for keyboard users

