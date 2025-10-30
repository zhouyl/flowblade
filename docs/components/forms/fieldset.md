# Fieldset

Fieldset component for grouping related form fields. Perfect for organizing form sections, multi-step forms, and field grouping.

## Basic Usage

```blade
<x-fieldset legend="Personal Information">
    <x-field label="First Name">
        <x-input />
    </x-field>
    
    <x-field label="Last Name">
        <x-input />
    </x-field>
</x-fieldset>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `legend` | `string` | `null` | Legend text |
| `helperText` | `string` | `null` | Helper text |
| `disabled` | `boolean` | `false` | Disabled state |
| `invalid` | `boolean` | `false` | Invalid state |
| `errorText` | `string` | `null` | Error message text |

## With Helper Text

```blade
<x-fieldset legend="Contact Information" helper-text="We'll never share your information">
    <x-field label="Email">
        <x-input type="email" />
    </x-field>
    
    <x-field label="Phone">
        <x-input type="tel" />
    </x-field>
</x-fieldset>
```

## Disabled State

```blade
<x-fieldset legend="Disabled Section" disabled>
    <x-field label="Field 1">
        <x-input disabled />
    </x-field>
    
    <x-field label="Field 2">
        <x-input disabled />
    </x-field>
</x-fieldset>
```

## Invalid State

```blade
<x-fieldset 
    legend="Payment Information" 
    invalid 
    error-text="Please correct the errors below"
>
    <x-field label="Card Number" invalid error-text="Invalid card number">
        <x-input invalid />
    </x-field>
    
    <x-field label="CVV">
        <x-input />
    </x-field>
</x-fieldset>
```

## Common Patterns

### User Profile Form

```blade
<form>
    <x-fieldset legend="Basic Information">
        <x-field label="Username" required>
            <x-input required />
        </x-field>
        
        <x-field label="Email" required>
            <x-input type="email" required />
        </x-field>
        
        <x-field label="Bio">
            <x-textarea rows="3" />
        </x-field>
    </x-fieldset>
    
    <x-fieldset legend="Privacy Settings" class="mt-6">
        <x-checkbox>Make profile public</x-checkbox>
        <x-checkbox>Allow messages from other users</x-checkbox>
        <x-checkbox>Show email address</x-checkbox>
    </x-fieldset>
    
    <x-button type="submit" class="mt-6">Save Profile</x-button>
</form>
```

### Address Form

```blade
<x-fieldset legend="Shipping Address">
    <x-field label="Street Address" required>
        <x-input required />
    </x-field>
    
    <div class="grid grid-cols-2 gap-4">
        <x-field label="City" required>
            <x-input required />
        </x-field>
        
        <x-field label="State" required>
            <x-input required />
        </x-field>
    </div>
    
    <div class="grid grid-cols-2 gap-4">
        <x-field label="ZIP Code" required>
            <x-input required />
        </x-field>
        
        <x-field label="Country" required>
            <x-native-select required>
                <option value="">Select country</option>
                <option value="us">United States</option>
                <option value="uk">United Kingdom</option>
                <option value="ca">Canada</option>
            </x-native-select>
        </x-field>
    </div>
</x-fieldset>
```

### Payment Form

```blade
<x-fieldset legend="Payment Details">
    <x-field label="Card Number" required>
        <x-input type="text" placeholder="1234 5678 9012 3456" required />
    </x-field>
    
    <div class="grid grid-cols-3 gap-4">
        <x-field label="Expiry Month" required>
            <x-native-select required>
                <option value="">MM</option>
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                    </option>
                @endfor
            </x-native-select>
        </x-field>
        
        <x-field label="Expiry Year" required>
            <x-native-select required>
                <option value="">YYYY</option>
                @for($i = date('Y'); $i <= date('Y') + 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </x-native-select>
        </x-field>
        
        <x-field label="CVV" required>
            <x-input type="text" placeholder="123" required />
        </x-field>
    </div>
</x-fieldset>
```

### Preferences Form

```blade
<x-fieldset legend="Notification Preferences">
    <x-checkbox>Email notifications</x-checkbox>
    <x-checkbox>Push notifications</x-checkbox>
    <x-checkbox>SMS notifications</x-checkbox>
</x-fieldset>

<x-fieldset legend="Display Preferences" class="mt-6">
    <x-field label="Language">
        <x-native-select>
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="fr">French</option>
        </x-native-select>
    </x-field>
    
    <x-field label="Timezone">
        <x-native-select>
            <option value="UTC">UTC</option>
            <option value="EST">Eastern Time</option>
            <option value="PST">Pacific Time</option>
        </x-native-select>
    </x-field>
</x-fieldset>
```

## Livewire Integration

```blade
<x-fieldset 
    legend="User Information"
    :invalid="$errors->any()"
    :error-text="$errors->any() ? 'Please correct the errors below' : null"
>
    <x-field 
        label="Name" 
        :invalid="$errors->has('name')"
        :error-text="$errors->first('name')"
    >
        <x-input 
            wire:model="name"
            :invalid="$errors->has('name')"
        />
    </x-field>
    
    <x-field 
        label="Email" 
        :invalid="$errors->has('email')"
        :error-text="$errors->first('email')"
    >
        <x-input 
            type="email"
            wire:model="email"
            :invalid="$errors->has('email')"
        />
    </x-field>
</x-fieldset>
```

## Alpine.js Integration

```blade
<div x-data="{ section: 'personal' }">
    <div class="flex gap-2 mb-4">
        <x-button @click="section = 'personal'" :variant="section === 'personal' ? 'solid' : 'outline'">
            Personal
        </x-button>
        <x-button @click="section = 'contact'" :variant="section === 'contact' ? 'solid' : 'outline'">
            Contact
        </x-button>
    </div>
    
    <x-fieldset legend="Personal Information" x-show="section === 'personal'">
        <x-field label="First Name">
            <x-input />
        </x-field>
        <x-field label="Last Name">
            <x-input />
        </x-field>
    </x-fieldset>
    
    <x-fieldset legend="Contact Information" x-show="section === 'contact'" style="display: none;">
        <x-field label="Email">
            <x-input type="email" />
        </x-field>
        <x-field label="Phone">
            <x-input type="tel" />
        </x-field>
    </x-fieldset>
</div>
```

## Accessibility

The Fieldset component:
- Uses semantic `<fieldset>` and `<legend>` elements
- Properly groups related form controls
- Supports disabled state for all child inputs
- Provides clear error messaging
- Maintains proper focus management
- Announces fieldset grouping to screen readers
- Supports proper ARIA attributes for form organization

