# Input Components

Input component family for text input and input groups. Input provides a flexible way to create text input fields with support for various sizes, variants, and states. Perfect for forms, search boxes, and user data collection.

## Overview

The Input component system consists of:
- **Input** - Basic text input component
- **InputGroup** - Container for grouping input with addons/elements
- **InputAddon** - Text addon (prefix/suffix) outside the input
- **InputElement** - Element (icon/button) inside the input

## Input Component

### Basic Input Usage

```blade
<x-input placeholder="Enter text" />
```

### Input Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `type` | `string` | `'text'` | Input type |
| `size` | `string` | `'md'` | Size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `readonly` | `boolean` | `false` | Read-only |
| `required` | `boolean` | `false` | Required |
| `invalid` | `boolean` | `false` | Invalid state |
| `placeholder` | `string` | `null` | Placeholder text |

### Input Style Props

Input supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

### Input Sizes

```blade
<x-input size="xs" placeholder="Extra small" />
<x-input size="sm" placeholder="Small" />
<x-input size="md" placeholder="Medium" />
<x-input size="lg" placeholder="Large" />
<x-input size="xl" placeholder="Extra large" />
```

### Input Variants

```blade
<!-- Outline -->
<x-input variant="outline" placeholder="Border style" />

<!-- Filled -->
<x-input variant="filled" placeholder="Filled style" />

<!-- Flushed -->
<x-input variant="flushed" placeholder="Bottom line style" />
```

### Input Types

```blade
<x-input type="text" placeholder="text" />
<x-input type="email" placeholder="Email" />
<x-input type="password" placeholder="Password" />
<x-input type="number" placeholder="Number" />
<x-input type="tel" placeholder="Phone" />
<x-input type="url" placeholder="URL" />
<x-input type="search" placeholder="Search" />
```

### Input States

```blade
<!-- Disabled -->
<x-input disabled placeholder="Disabled" />

<!-- Read-only -->
<x-input readonly value="Read-only" />

<!-- Required -->
<x-input required placeholder="Required field" />

<!-- Invalid -->
<x-input invalid placeholder="Invalid input" />
```

### Input Common Patterns

#### Form Fields

```blade
<x-vstack gap="4">
    <x-box>
        <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Username</x-text>
        <x-input name="username" placeholder="Enter username" />
    </x-box>

    <x-box>
        <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Email</x-text>
        <x-input type="email" name="email" placeholder="Enter email" />
    </x-box>
</x-vstack>
```

#### Search Box

```blade
<x-input
    type="search"
    placeholder="Search..."
    w="full"
/>
```

#### Input with Validation

```blade
<x-box>
    <x-input
        name="email"
        type="email"
        :invalid="$errors->has('email')"
        placeholder="Enter email"
    />
    @error('email')
        <x-text mt="1" fontSize="sm" color="red.600">{{ $message }}</x-text>
    @enderror
</x-box>
```

#### Livewire Integration

```blade
<x-input
    wire:model="username"
    placeholder="Username"
/>

<!-- Real-time Validation -->
<x-input
    wire:model.live="email"
    :invalid="!empty($errors->get('email'))"
    placeholder="Email"
/>
```

#### Alpine.js Integration

```blade
<x-box x-data="{ value: '' }">
    <x-input
        x-model="value"
        placeholder="Enter content"
    />
    <x-text as="p" x-text="value"></x-text>
</x-box>
```

---

## InputGroup Component

### Basic Usage

#### With Left Addon

```blade
<x-input-group>
    <x-input-addon placement="left">https://</x-input-addon>
    <x-input placeholder="example.com" />
</x-input-group>
```

### With Right Addon

```blade
<x-input-group>
    <x-input placeholder="Enter amount" />
    <x-input-addon placement="right">.00</x-input-addon>
</x-input-group>
```

### With Both Addons

```blade
<x-input-group>
    <x-input-addon placement="left">$</x-input-addon>
    <x-input placeholder="0.00" />
    <x-input-addon placement="right">USD</x-input-addon>
</x-input-group>
```

## InputGroup Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

## InputAddon Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placement` | `string` | `'left'` | Placement: `left`, `right` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

## InputElement Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placement` | `string` | `'left'` | Placement: `left`, `right` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

## With Input Element (Icon Inside)

```blade
<x-input-group>
    <x-input-element placement="left">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
    </x-input-element>
    <x-input placeholder="Username" class="pl-10" />
</x-input-group>
```

## Sizes

```blade
<!-- Extra Small -->
<x-input-group size="xs">
    <x-input-addon placement="left" size="xs">@</x-input-addon>
    <x-input size="xs" placeholder="username" />
</x-input-group>

<!-- Small -->
<x-input-group size="sm">
    <x-input-addon placement="left" size="sm">@</x-input-addon>
    <x-input size="sm" placeholder="username" />
</x-input-group>

<!-- Medium (default) -->
<x-input-group size="md">
    <x-input-addon placement="left" size="md">@</x-input-addon>
    <x-input size="md" placeholder="username" />
</x-input-group>

<!-- Large -->
<x-input-group size="lg">
    <x-input-addon placement="left" size="lg">@</x-input-addon>
    <x-input size="lg" placeholder="username" />
</x-input-group>

<!-- Extra Large -->
<x-input-group size="xl">
    <x-input-addon placement="left" size="xl">@</x-input-addon>
    <x-input size="xl" placeholder="username" />
</x-input-group>
```

## Common Patterns

### URL Input

```blade
<x-field label="Website">
    <x-input-group>
        <x-input-addon placement="left">https://</x-input-addon>
        <x-input placeholder="example.com" />
    </x-input-group>
</x-field>
```

### Email Input

```blade
<x-field label="Email">
    <x-input-group>
        <x-input placeholder="username" />
        <x-input-addon placement="right">@example.com</x-input-addon>
    </x-input-group>
</x-field>
```

### Phone Number

```blade
<x-field label="Phone">
    <x-input-group>
        <x-input-addon placement="left">+1</x-input-addon>
        <x-input type="tel" placeholder="(555) 000-0000" />
    </x-input-group>
</x-field>
```

### Price Input

```blade
<x-field label="Price">
    <x-input-group>
        <x-input-addon placement="left">$</x-input-addon>
        <x-input type="number" placeholder="0.00" />
        <x-input-addon placement="right">USD</x-input-addon>
    </x-input-group>
</x-field>
```

### Username with Icon

```blade
<x-field label="Username">
    <x-input-group>
        <x-input-element placement="left">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </x-input-element>
        <x-input placeholder="Enter username" class="pl-10" />
    </x-input-group>
</x-field>
```

### Search with Button

```blade
<x-input-group>
    <x-input placeholder="Search..." />
    <x-button>Search</x-button>
</x-input-group>
```

### Domain Input

```blade
<x-field label="Domain">
    <x-input-group>
        <x-input placeholder="mysite" />
        <x-input-addon placement="right">.example.com</x-input-addon>
    </x-input-group>
</x-field>
```

### Percentage Input

```blade
<x-field label="Discount">
    <x-input-group>
        <x-input type="number" placeholder="0" />
        <x-input-addon placement="right">%</x-input-addon>
    </x-input-group>
</x-field>
```

## With Button Addon

```blade
<x-input-group>
    <x-input placeholder="Enter email" />
    <x-button>Subscribe</x-button>
</x-input-group>
```

## With Dropdown

```blade
<x-input-group>
    <x-native-select class="rounded-r-none border-r-0">
        <option>USD</option>
        <option>EUR</option>
        <option>GBP</option>
    </x-native-select>
    <x-input type="number" placeholder="0.00" class="rounded-l-none" />
</x-input-group>
```

## Livewire Integration

```blade
<x-field label="Website">
    <x-input-group>
        <x-input-addon placement="left">https://</x-input-addon>
        <x-input 
            wire:model="website"
            placeholder="example.com"
        />
    </x-input-group>
</x-field>
```

## Alpine.js Integration

```blade
<div x-data="{ protocol: 'https://' }">
    <x-field label="URL">
        <x-input-group>
            <x-input-addon placement="left" x-text="protocol"></x-input-addon>
            <x-input placeholder="example.com" />
        </x-input-group>
    </x-field>

    <div class="mt-2">
        <label>
            <input type="radio" x-model="protocol" value="https://"> HTTPS
        </label>
        <label>
            <input type="radio" x-model="protocol" value="http://"> HTTP
        </label>
    </div>
</div>
```

---

## InputAddon Component

InputAddon component for adding prefix or suffix content to an input field. Commonly used for currency symbols, units, or icons. Perfect for providing context, improving user experience, and clarifying input requirements.

### InputAddon Props

InputAddon supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### InputAddon Examples

#### Currency Input

```blade
<x-input-group>
    <x-input-addon>$</x-input-addon>
    <x-input type="number" placeholder="0.00" />
</x-input-group>
```

#### Email Input

```blade
<x-input-group>
    <x-input-addon>@</x-input-addon>
    <x-input type="email" placeholder="example" />
    <x-input-addon>.com</x-input-addon>
</x-input-group>
```

#### Phone Number

```blade
<x-input-group>
    <x-input-addon>+1</x-input-addon>
    <x-input type="tel" placeholder="(555) 000-0000" />
</x-input-group>
```

#### With Icon

```blade
<x-input-group>
    <x-input-addon>
        <x-icon name="heroicons:magnifying-glass" class="w-4 h-4" />
    </x-input-addon>
    <x-input placeholder="Search..." />
</x-input-group>
```

#### URL Input

```blade
<x-input-group>
    <x-input-addon>https://</x-input-addon>
    <x-input placeholder="example.com" />
</x-input-group>
```

#### Percentage Input

```blade
<x-input-group>
    <x-input type="number" placeholder="0" />
    <x-input-addon>%</x-input-addon>
</x-input-group>
```

#### Price Input with Currency

```blade
<x-field label="Price">
    <x-input-group>
        <x-input-addon bg="gray.100">$</x-input-addon>
        <x-input type="number" placeholder="0.00" step="0.01" />
    </x-input-group>
</x-field>
```

#### Search with Icon

```blade
<x-input-group>
    <x-input-addon>
        <x-icon name="heroicons:magnifying-glass" class="w-5 h-5 text-gray-400" />
    </x-input-addon>
    <x-input placeholder="Search products..." />
</x-input-group>
```

#### Domain Input

```blade
<x-field label="Website">
    <x-input-group>
        <x-input-addon bg="gray.100">https://</x-input-addon>
        <x-input placeholder="example.com" />
    </x-input-group>
</x-field>
```

#### Discount Percentage

```blade
<x-field label="Discount">
    <x-input-group>
        <x-input type="number" placeholder="0" min="0" max="100" />
        <x-input-addon bg="gray.100">%</x-input-addon>
    </x-input-group>
</x-field>
```

---

## InputElement Component

InputElement component for adding custom elements inside an input group. Useful for buttons, icons, or other interactive elements. Perfect for search inputs, filters, action buttons, and custom input controls.

### InputElement Props

InputElement supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### InputElement Examples

#### With Button

```blade
<x-input-group>
    <x-input placeholder="Enter email" type="email" />
    <x-input-element>
        <x-button size="sm">Subscribe</x-button>
    </x-input-element>
</x-input-group>
```

#### With Icon Button

```blade
<x-input-group>
    <x-input placeholder="Search..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:magnifying-glass" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

#### With Clear Button

```blade
<x-input-group>
    <x-input placeholder="Type something..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:x-mark" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

#### With Multiple Elements

```blade
<x-input-group>
    <x-input placeholder="Enter amount" type="number" />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:arrow-up" class="w-4 h-4" />
        </x-button>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:arrow-down" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

#### With Dropdown

```blade
<x-input-group>
    <x-input placeholder="Select option..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:chevron-down" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

#### Search with Submit

```blade
<x-field label="Search">
    <x-input-group>
        <x-input placeholder="Search products..." />
        <x-input-element>
            <x-button size="sm" color="primary">Search</x-button>
        </x-input-element>
    </x-input-group>
</x-field>
```

#### Password Visibility Toggle

```blade
<x-field label="Password">
    <x-input-group>
        <x-input type="password" placeholder="Enter password" />
        <x-input-element>
            <x-button variant="ghost" size="sm">
                <x-icon name="heroicons:eye" class="w-4 h-4" />
            </x-button>
        </x-input-element>
    </x-input-group>
</x-field>
```

#### Quantity Selector

```blade
<x-field label="Quantity">
    <x-input-group>
        <x-input type="number" value="1" min="1" />
        <x-input-element>
            <x-button variant="ghost" size="sm">
                <x-icon name="heroicons:plus" class="w-4 h-4" />
            </x-button>
        </x-input-element>
    </x-input-group>
</x-field>
```

---

## Accessibility

### Input Component

The Input component:
- Uses semantic HTML structure with proper `<input>` element
- Supports keyboard navigation (Tab, Shift+Tab, Arrow keys, Enter)
- Works with screen readers
- Provides clear placeholder text and labels
- Supports required field validation
- Announces state changes to screen readers
- Maintains focus management for keyboard users
- Provides visual feedback for focus and state
- Supports various input types with appropriate keyboards on mobile devices
- Supports proper ARIA attributes for input validation

### InputGroup Component

The InputGroup component:
- Uses semantic HTML structure
- Works with screen readers
- Supports keyboard navigation (Tab, Enter)
- Use proper labels with Field component
- Ensure addons have appropriate text contrast
- Icons should have proper aria-labels when interactive
- Maintain keyboard navigation support
- Announces input group structure to screen readers
- Supports proper ARIA attributes for grouped inputs

### InputAddon Component

The InputAddon component:
- Uses semantic HTML structure
- Works with screen readers
- Supports keyboard navigation (Tab, Enter)
- Provides clear input context
- Should be used within InputGroup for proper structure
- Announces addon content to screen readers
- Supports proper ARIA attributes for input context

### InputElement Component

The InputElement component:
- Uses semantic HTML structure
- Works with screen readers
- Supports keyboard navigation (Tab, Enter)
- Provides clear interactive elements
- Should be used within InputGroup for proper structure
- Announces element content to screen readers
- Supports proper ARIA attributes for interactive elements

## Related Components

- [Field](field.md) - Form field wrapper component
- [Button](../buttons/button.md) - Button component for input elements
- [NativeSelect](native-select.md) - Native select component

