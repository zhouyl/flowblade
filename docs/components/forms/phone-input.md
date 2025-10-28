# PhoneInput Component

Phone number input with country code selector, auto-formatting, and validation support.

## Basic Usage

```blade
<x-phone-input name="phone" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'md'` | Size: `sm`, `md`, `lg` |
| `defaultCountry` | string | `'US'` | Default country code (e.g., 'US', 'GB', 'CN') |
| `disabled` | bool | `false` | Whether the input is disabled |
| `invalid` | bool | `false` | Whether the input is invalid |
| `placeholder` | string | `''` | Placeholder text |
| `id` | string | auto-generated | Input ID |

## Supported Countries

The component includes 30+ popular countries with their dial codes and flag emojis:
- United States (+1 🇺🇸)
- United Kingdom (+44 🇬🇧)
- China (+86 🇨🇳)
- India (+91 🇮🇳)
- Canada (+1 🇨🇦)
- Australia (+61 🇦🇺)
- Germany (+49 🇩🇪)
- France (+33 🇫🇷)
- Japan (+81 🇯🇵)
- And many more...

## Examples

### Basic Phone Input

```blade
<x-phone-input name="phone" placeholder="Enter phone number" />
```

### With Default Country

```blade
{{-- United Kingdom --}}
<x-phone-input name="phone" default-country="GB" />

{{-- China --}}
<x-phone-input name="phone" default-country="CN" />

{{-- India --}}
<x-phone-input name="phone" default-country="IN" />
```

### Sizes

```blade
<x-phone-input name="phone" size="sm" placeholder="Small" />

<x-phone-input name="phone" size="md" placeholder="Medium" />

<x-phone-input name="phone" size="lg" placeholder="Large" />
```

### Disabled State

```blade
<x-phone-input name="phone" disabled />
```

### Invalid State

```blade
<x-phone-input name="phone" invalid />
```

### With Field Component

```blade
<x-field label="Phone Number" helper="Enter your phone number with country code">
    <x-phone-input name="phone" />
</x-field>
```

### Registration Form

```blade
<form>
    <x-field label="Full Name" required>
        <x-input name="name" placeholder="John Doe" />
    </x-field>
    
    <x-field label="Email" required>
        <x-input type="email" name="email" placeholder="john@example.com" />
    </x-field>
    
    <x-field label="Phone Number" required>
        <x-phone-input name="phone" default-country="US" />
    </x-field>
    
    <x-button type="submit">Register</x-button>
</form>
```

### Contact Form

```blade
<form>
    <div class="grid grid-cols-2 gap-4">
        <x-field label="First Name">
            <x-input name="first_name" />
        </x-field>
        
        <x-field label="Last Name">
            <x-input name="last_name" />
        </x-field>
    </div>
    
    <x-field label="Email">
        <x-input type="email" name="email" />
    </x-field>
    
    <x-field label="Phone">
        <x-phone-input name="phone" />
    </x-field>
    
    <x-field label="Message">
        <x-textarea name="message" rows="4" />
    </x-field>
    
    <x-button type="submit">Send Message</x-button>
</form>
```

### Profile Settings

```blade
<div class="space-y-4">
    <h2 class="text-xl font-bold">Contact Information</h2>
    
    <x-field label="Primary Phone">
        <x-phone-input name="primary_phone" default-country="US" />
    </x-field>
    
    <x-field label="Secondary Phone (Optional)">
        <x-phone-input name="secondary_phone" default-country="US" />
    </x-field>
    
    <x-field label="Work Phone (Optional)">
        <x-phone-input name="work_phone" default-country="US" />
    </x-field>
</div>
```

### With Validation

```blade
<form>
    <x-field 
        label="Phone Number" 
        :error="$errors->first('phone')"
        required
    >
        <x-phone-input 
            name="phone" 
            :invalid="$errors->has('phone')"
            value="{{ old('phone') }}"
        />
    </x-field>
    
    <x-button type="submit">Submit</x-button>
</form>
```

### International Business Form

```blade
<form>
    <x-field label="Business Name">
        <x-input name="business_name" />
    </x-field>
    
    <x-field label="Country">
        <x-native-select name="country">
            <option value="US">United States</option>
            <option value="GB">United Kingdom</option>
            <option value="CN">China</option>
            <option value="IN">India</option>
        </x-native-select>
    </x-field>
    
    <x-field label="Business Phone">
        <x-phone-input name="business_phone" default-country="US" />
    </x-field>
    
    <x-field label="Mobile Phone">
        <x-phone-input name="mobile_phone" default-country="US" />
    </x-field>
</form>
```

### With Livewire

```blade
<x-field label="Phone Number">
    <x-phone-input 
        name="phone" 
        wire:model="phone"
        :invalid="$errors->has('phone')"
    />
</x-field>

@error('phone')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
```

### Multiple Countries

```blade
<div class="space-y-4">
    <x-field label="US Phone">
        <x-phone-input name="us_phone" default-country="US" />
    </x-field>
    
    <x-field label="UK Phone">
        <x-phone-input name="uk_phone" default-country="GB" />
    </x-field>
    
    <x-field label="China Phone">
        <x-phone-input name="cn_phone" default-country="CN" />
    </x-field>
</div>
```

### Emergency Contact Form

```blade
<div class="space-y-4">
    <h3 class="font-semibold">Emergency Contact</h3>
    
    <x-field label="Contact Name">
        <x-input name="emergency_name" />
    </x-field>
    
    <x-field label="Relationship">
        <x-input name="emergency_relationship" placeholder="e.g., Spouse, Parent" />
    </x-field>
    
    <x-field label="Contact Phone">
        <x-phone-input name="emergency_phone" />
    </x-field>
</div>
```

## Features

### Auto-formatting

The component automatically formats phone numbers as you type:
- Removes non-digit characters
- Formats in (XXX) XXX-XXXX pattern for US/CA style
- Can be customized for different country formats

### Country Search

The country dropdown includes a search feature:
- Search by country name
- Search by dial code
- Search by country code
- Real-time filtering

### Flag Emojis

Each country is displayed with its flag emoji for easy visual identification.

### Hidden Country Input

The component automatically creates a hidden input field with the selected country code:
- Field name: `{name}_country`
- Value: Country code (e.g., 'US', 'GB', 'CN')

## Laravel Validation

```php
// In your controller or form request
public function rules()
{
    return [
        'phone' => ['required', 'string', 'regex:/^\(\d{3}\) \d{3}-\d{4}$/'],
        'phone_country' => ['required', 'string', 'size:2'],
    ];
}
```

## Accessibility

The PhoneInput component:
- Uses semantic HTML with proper input types
- Supports keyboard navigation
- Includes proper ARIA attributes
- Focus management for dropdown
- Screen reader friendly
- Disabled state properly indicated

## Browser Support

The PhoneInput component uses:
- Alpine.js for interactivity
- CSS transitions
- Flexbox layout
- Tailwind CSS utilities

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Input](./input.md) - Text input
- [Field](./field.md) - Form field wrapper
- [Select](./select.md) - Select dropdown

