# PhoneInput Component

International phone number input with country code dropdown selector. Includes 120+ countries with dial codes and flag emojis.

## Features

- **Country Selector**: Dropdown with country flags and dial codes
- **Search Functionality**: Search countries by name, code, or ISO code
- **120+ Countries**: Comprehensive list of countries from config
- **Responsive Design**: Works on all screen sizes
- **Dark Mode Support**: Automatic dark mode styling
- **Validation States**: Support for invalid state
- **Disabled State**: Can be disabled
- **Size Variants**: Small, medium, and large sizes
- **Alpine.js Integration**: Reactive country selection

## Basic Usage

```blade
<x-phone-input />
```

## With Default Country

```blade
<x-phone-input default-country="GB" />
```

## Size Variants

```blade
{{-- Small --}}
<x-phone-input size="sm" />

{{-- Medium (default) --}}
<x-phone-input size="md" />

{{-- Large --}}
<x-phone-input size="lg" />
```

## With Placeholder

```blade
<x-phone-input placeholder="Enter your phone number" />
```

## Validation States

```blade
{{-- Invalid state --}}
<x-phone-input :invalid="true" />

{{-- Disabled state --}}
<x-phone-input :disabled="true" />
```

## With Custom ID

```blade
<x-phone-input id="contact-phone" />
```

## With Name Attribute

```blade
<x-phone-input name="phone" />
```

The component will also create a hidden input with name `{name}_country` for the selected country code.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'md'` | Input size: `'sm'`, `'md'`, `'lg'` |
| `defaultCountry` | string | `'US'` | Default country code (ISO 3166-1 alpha-2) |
| `disabled` | boolean | `false` | Whether input is disabled |
| `invalid` | boolean | `false` | Whether input has validation error |
| `placeholder` | string | `''` | Placeholder text for phone number |
| `id` | string | `''` | Input element ID (auto-generated if empty) |

## Supported Countries

The component supports 120+ countries loaded from `config/flowblade/countries.php`. Each country includes:

- **ISO Code**: Two-letter country code (e.g., 'US', 'GB', 'CN')
- **Name**: Full country name
- **Dial Code**: International dialing code (e.g., '+1', '+44', '+86')
- **Flag Emoji**: Country flag emoji

### Popular Countries

- United States (+1) 🇺🇸
- United Kingdom (+44) 🇬🇧
- China (+86) 🇨🇳
- India (+91) 🇮🇳
- Canada (+1) 🇨🇦
- Australia (+61) 🇦🇺
- Germany (+49) 🇩🇪
- France (+33) 🇫🇷
- Japan (+81) 🇯🇵
- And 110+ more...

## Configuration

Countries are configured in `config/flowblade/countries.php`. You can customize the list by editing this file.

### Adding Custom Countries

```php
// config/flowblade/countries.php
return [
    'countries' => [
        'XX' => [
            'name' => 'Custom Country',
            'code' => '+999',
            'flag' => '🏳️',
        ],
        // ... other countries
    ],
];
```

## Search Functionality

The component includes built-in search functionality that filters countries by:
- Country name
- Dial code
- ISO code

Users can type in the search box to quickly find their country.

## JavaScript Integration

The component uses Alpine.js for reactive behavior. The selected country data is available in the Alpine.js scope:

```javascript
{
    selectedCountry: 'US',  // ISO code
    selectedCode: '+1',     // Dial code
    selectedFlag: '🇺🇸'     // Flag emoji
}
```

## Styling

The component uses Flowbite styling and supports:
- Light and dark modes
- Focus states
- Hover states
- Disabled states
- Invalid states

## Accessibility

- Proper ARIA labels
- Keyboard navigation support
- Focus management
- Screen reader friendly

## Examples

### Contact Form

```blade
<form>
    <div class="mb-4">
        <label for="phone" class="block mb-2 text-sm font-medium">
            Phone Number
        </label>
        <x-phone-input 
            id="phone"
            name="phone"
            default-country="US"
            placeholder="(555) 123-4567"
        />
    </div>
</form>
```

### With Validation

```blade
<x-phone-input 
    name="phone"
    :invalid="$errors->has('phone')"
/>
@error('phone')
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
@enderror
```

