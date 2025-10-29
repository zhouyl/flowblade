# Field

Form field wrapper component that provides label, helper text, and error message support. Field provides a convenient way to wrap form inputs with labels and validation messages.

## Basic Usage

```blade
<x-field label="Email">
    <x-input type="email" />
</x-field>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Field label |
| `helperText` | `string` | `null` | Helper text below input |
| `errorText` | `string` | `null` | Error message text |
| `required` | `boolean` | `false` | Show required indicator |
| `invalid` | `boolean` | `false` | Invalid state |

### Style Props

Field supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## With Helper Text

```blade
<x-field label="Username" helper-text="Choose a unique username">
    <x-input />
</x-field>
```

## Required Field

```blade
<x-field label="Email" required>
    <x-input type="email" required />
</x-field>
```

## With Error

```blade
<x-field label="Email" invalid error-text="Please enter a valid email address">
    <x-input type="email" invalid />
</x-field>
```

## Common Patterns

### Login Form

```blade
<x-box as="form">
    <x-field label="Email" required>
        <x-input type="email" required />
    </x-field>

    <x-field label="Password" required>
        <x-password-input required />
    </x-field>

    <x-button type="submit" w="full">Sign In</x-button>
</x-box>
```

### Registration Form

```blade
<x-box as="form">
    <x-field label="Username" helper-text="3-20 characters, letters and numbers only" required>
        <x-input required />
    </x-field>

    <x-field label="Email" required>
        <x-input type="email" required />
    </x-field>

    <x-field label="Password" helper-text="At least 8 characters" required>
        <x-password-input required />
    </x-field>

    <x-button type="submit" w="full">Create Account</x-button>
</x-box>
```

### With Validation (Livewire)

```blade
<x-field 
    label="Email" 
    :invalid="$errors->has('email')"
    :error-text="$errors->first('email')"
    required
>
    <x-input 
        type="email" 
        wire:model="email"
        :invalid="$errors->has('email')"
        required
    />
</x-field>
```

### With Textarea

```blade
<x-field label="Description" helper-text="Tell us about yourself">
    <x-textarea rows="4" />
</x-field>
```

### With Select

```blade
<x-field label="Country" required>
    <x-native-select required>
        <option value="">Select a country</option>
        <option value="us">United States</option>
        <option value="uk">United Kingdom</option>
        <option value="ca">Canada</option>
    </x-native-select>
</x-field>
```

### With Checkbox

```blade
<x-field>
    <x-checkbox>
        I agree to the terms and conditions
    </x-checkbox>
</x-field>
```

## Livewire Integration

```blade
<form wire:submit.prevent="save">
    <x-field 
        label="Name" 
        :invalid="$errors->has('name')"
        :error-text="$errors->first('name')"
        required
    >
        <x-input 
            wire:model="name"
            :invalid="$errors->has('name')"
            required
        />
    </x-field>

    <x-button type="submit">Save</x-button>
</form>
```

## Alpine.js Integration

```blade
<div x-data="{ email: '', error: '' }">
    <x-field 
        label="Email" 
        :invalid="error !== ''"
        x-bind:error-text="error"
    >
        <x-input 
            type="email"
            x-model="email"
            @blur="validateEmail()"
        />
    </x-field>
</div>
```

