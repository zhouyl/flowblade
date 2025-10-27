# PasswordInput

Password input component with show/hide toggle functionality.

## Basic Usage

```blade
<x-password-input placeholder="Enter password" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `invalid` | `boolean` | `false` | Invalid state |
| `readonly` | `boolean` | `false` | Read-only state |
| `placeholder` | `string` | `null` | Placeholder text |
| `showToggle` | `boolean` | `true` | Show visibility toggle button |

## Sizes

```blade
<x-password-input size="xs" placeholder="Extra small" />
<x-password-input size="sm" placeholder="Small" />
<x-password-input size="md" placeholder="Medium" />
<x-password-input size="lg" placeholder="Large" />
<x-password-input size="xl" placeholder="Extra large" />
```

## Variants

```blade
<!-- Outline (default) -->
<x-password-input variant="outline" placeholder="Outline variant" />

<!-- Filled -->
<x-password-input variant="filled" placeholder="Filled variant" />

<!-- Flushed -->
<x-password-input variant="flushed" placeholder="Flushed variant" />
```

## Without Toggle

```blade
<x-password-input :show-toggle="false" placeholder="No toggle button" />
```

## States

```blade
<!-- Disabled -->
<x-password-input disabled placeholder="Disabled" />

<!-- Required -->
<x-password-input required placeholder="Required field" />

<!-- Invalid -->
<x-password-input invalid placeholder="Invalid input" />

<!-- Read-only -->
<x-password-input readonly value="readonly-password" />
```

## Common Patterns

### Login Form

```blade
<form>
    <x-field label="Email" required>
        <x-input type="email" required />
    </x-field>

    <x-field label="Password" required>
        <x-password-input required />
    </x-field>

    <x-button type="submit" class="w-full">Sign In</x-button>
</form>
```

### Registration Form

```blade
<form>
    <x-field label="Password" helper-text="At least 8 characters" required>
        <x-password-input required />
    </x-field>

    <x-field label="Confirm Password" required>
        <x-password-input required />
    </x-field>

    <x-button type="submit" class="w-full">Create Account</x-button>
</form>
```

### Change Password Form

```blade
<form>
    <x-field label="Current Password" required>
        <x-password-input required />
    </x-field>

    <x-field label="New Password" helper-text="At least 8 characters" required>
        <x-password-input required />
    </x-field>

    <x-field label="Confirm New Password" required>
        <x-password-input required />
    </x-field>

    <x-button type="submit">Update Password</x-button>
</form>
```

## Livewire Integration

```blade
<x-field 
    label="Password" 
    :invalid="$errors->has('password')"
    :error-text="$errors->first('password')"
    required
>
    <x-password-input 
        wire:model="password"
        :invalid="$errors->has('password')"
        required
    />
</x-field>
```

## Alpine.js Integration

```blade
<div x-data="{ password: '', strength: '' }">
    <x-field label="Password" :helper-text="strength">
        <x-password-input 
            x-model="password"
            @input="checkStrength()"
        />
    </x-field>
</div>

<script>
function checkStrength() {
    const password = this.password;
    if (password.length < 6) {
        this.strength = 'Weak';
    } else if (password.length < 10) {
        this.strength = 'Medium';
    } else {
        this.strength = 'Strong';
    }
}
</script>
```

## Password Strength Indicator

```blade
<div x-data="{ 
    password: '', 
    strength: 0,
    getStrength() {
        if (this.password.length === 0) return 0;
        if (this.password.length < 6) return 1;
        if (this.password.length < 10) return 2;
        if (/[A-Z]/.test(this.password) && /[0-9]/.test(this.password)) return 4;
        return 3;
    }
}">
    <x-field label="Password">
        <x-password-input 
            x-model="password"
            @input="strength = getStrength()"
        />
    </x-field>

    <div class="mt-2 flex gap-1">
        <div class="h-1 flex-1 rounded" :class="strength >= 1 ? 'bg-red-500' : 'bg-gray-200'"></div>
        <div class="h-1 flex-1 rounded" :class="strength >= 2 ? 'bg-yellow-500' : 'bg-gray-200'"></div>
        <div class="h-1 flex-1 rounded" :class="strength >= 3 ? 'bg-blue-500' : 'bg-gray-200'"></div>
        <div class="h-1 flex-1 rounded" :class="strength >= 4 ? 'bg-green-500' : 'bg-gray-200'"></div>
    </div>
</div>
```

