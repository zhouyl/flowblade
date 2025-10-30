# Floating Label

Material Design style floating label input components with smooth animations and multiple variants. Perfect for modern form designs, Material Design interfaces, and elegant input fields.

## Components

- `<x-floating-label>` - Floating label input field
- `<x-floating-textarea>` - Floating label textarea
- `<x-floating-select>` - Floating label select dropdown

## Basic Usage

### Floating Label Input

```blade
<x-floating-label 
    id="email" 
    name="email" 
    type="email" 
    label="Email address" 
/>
```

### Floating Label Textarea

```blade
<x-floating-textarea 
    id="message" 
    name="message" 
    label="Your message" 
    rows="4"
/>
```

### Floating Label Select

```blade
<x-floating-select 
    id="country" 
    name="country" 
    label="Select your country"
>
    <option value="">Choose a country</option>
    <option value="US">United States</option>
    <option value="CA">Canada</option>
    <option value="FR">France</option>
    <option value="DE">Germany</option>
</x-floating-select>
```

## Props

### FloatingLabel Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | `string` | `'text'` | Input type: text, email, password, number, tel, url, search, date, time, etc. |
| `id` | `string` | Auto-generated | Input ID |
| `name` | `string` | Same as `id` | Input name |
| `label` | `string` | `''` | Label text |
| `value` | `string` | `''` | Input value |
| `placeholder` | `string` | `' '` | Placeholder (space required for animation) |
| `required` | `bool` | `false` | Whether the input is required |
| `disabled` | `bool` | `false` | Whether the input is disabled |
| `readonly` | `bool` | `false` | Whether the input is readonly |
| `variant` | `string` | `'default'` | Variant: `default`, `outlined`, `filled`, `standard` |
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `error` | `bool` | `false` | Whether to show error state |
| `helperText` | `string` | `''` | Helper text below input |

### FloatingTextarea Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | Auto-generated | Textarea ID |
| `name` | `string` | Same as `id` | Textarea name |
| `label` | `string` | `''` | Label text |
| `value` | `string` | `''` | Textarea value |
| `placeholder` | `string` | `' '` | Placeholder (space required for animation) |
| `rows` | `int` | `4` | Number of rows |
| `required` | `bool` | `false` | Whether the textarea is required |
| `disabled` | `bool` | `false` | Whether the textarea is disabled |
| `readonly` | `bool` | `false` | Whether the textarea is readonly |
| `variant` | `string` | `'default'` | Variant: `default`, `outlined`, `filled`, `standard` |
| `error` | `bool` | `false` | Whether to show error state |
| `helperText` | `string` | `''` | Helper text below textarea |

### FloatingSelect Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | Auto-generated | Select ID |
| `name` | `string` | Same as `id` | Select name |
| `label` | `string` | `''` | Label text |
| `value` | `string` | `''` | Selected value |
| `required` | `bool` | `false` | Whether the select is required |
| `disabled` | `bool` | `false` | Whether the select is disabled |
| `variant` | `string` | `'default'` | Variant: `default`, `outlined`, `filled`, `standard` |
| `error` | `bool` | `false` | Whether to show error state |
| `helperText` | `string` | `''` | Helper text below select |

## Variants

### Default Variant

```blade
<x-floating-label 
    id="default-input" 
    label="Default input" 
    variant="default"
/>
```

### Outlined Variant

```blade
<x-floating-label 
    id="outlined-input" 
    label="Outlined input" 
    variant="outlined"
/>
```

### Filled Variant

```blade
<x-floating-label 
    id="filled-input" 
    label="Filled input" 
    variant="filled"
/>
```

### Standard Variant

```blade
<x-floating-label 
    id="standard-input" 
    label="Standard input" 
    variant="standard"
/>
```

## Sizes

### Small

```blade
<x-floating-label 
    id="small-input" 
    label="Small input" 
    size="sm"
/>
```

### Medium (Default)

```blade
<x-floating-label 
    id="medium-input" 
    label="Medium input" 
    size="md"
/>
```

### Large

```blade
<x-floating-label 
    id="large-input" 
    label="Large input" 
    size="lg"
/>
```

## Input Types

### Email

```blade
<x-floating-label 
    id="email" 
    type="email" 
    label="Email address" 
/>
```

### Password

```blade
<x-floating-label 
    id="password" 
    type="password" 
    label="Password" 
/>
```

### Number

```blade
<x-floating-label 
    id="phone" 
    type="tel" 
    label="Phone number" 
/>
```

### Date

```blade
<x-floating-label 
    id="birthday" 
    type="date" 
    label="Birthday" 
/>
```

### Time

```blade
<x-floating-label 
    id="appointment" 
    type="time" 
    label="Appointment time" 
/>
```

### URL

```blade
<x-floating-label 
    id="website" 
    type="url" 
    label="Website URL" 
/>
```

### Search

```blade
<x-floating-label 
    id="search" 
    type="search" 
    label="Search" 
/>
```

## States

### Required Field

```blade
<x-floating-label 
    id="required-input" 
    label="Required field" 
    :required="true"
/>
```

### Disabled Field

```blade
<x-floating-label 
    id="disabled-input" 
    label="Disabled field" 
    value="Cannot edit this"
    :disabled="true"
/>
```

### Readonly Field

```blade
<x-floating-label 
    id="readonly-input" 
    label="Readonly field" 
    value="Read only value"
    :readonly="true"
/>
```

### Error State

```blade
<x-floating-label 
    id="error-input" 
    label="Email address" 
    type="email"
    value="invalid-email"
    :error="true"
    helper-text="Please enter a valid email address"
/>
```

### With Helper Text

```blade
<x-floating-label 
    id="helper-input" 
    label="Username" 
    helper-text="Choose a unique username"
/>
```

## Form Examples

### Login Form

```blade
<form class="space-y-6">
    <x-floating-label 
        id="login-email" 
        name="email"
        type="email" 
        label="Email address" 
        :required="true"
    />
    
    <x-floating-label 
        id="login-password" 
        name="password"
        type="password" 
        label="Password" 
        :required="true"
    />
    
    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Sign in
    </button>
</form>
```

### Contact Form

```blade
<form class="space-y-6">
    <div class="grid grid-cols-2 gap-6">
        <x-floating-label 
            id="first-name" 
            name="first_name"
            label="First name" 
            :required="true"
        />
        
        <x-floating-label 
            id="last-name" 
            name="last_name"
            label="Last name" 
            :required="true"
        />
    </div>
    
    <x-floating-label 
        id="contact-email" 
        name="email"
        type="email" 
        label="Email address" 
        :required="true"
    />
    
    <x-floating-label 
        id="phone" 
        name="phone"
        type="tel" 
        label="Phone number" 
    />
    
    <x-floating-textarea 
        id="message" 
        name="message"
        label="Your message" 
        rows="6"
        :required="true"
    />
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Send message
    </button>
</form>
```

## Laravel Integration

### With Old Input

```blade
<x-floating-label 
    id="email" 
    name="email"
    type="email" 
    label="Email address" 
    value="{{ old('email') }}"
    :error="$errors->has('email')"
    :helper-text="$errors->first('email')"
/>
```

### With Model Binding

```blade
<x-floating-label 
    id="name" 
    name="name"
    label="Full name" 
    value="{{ $user->name }}"
/>
```

### Complete Form with Validation

```blade
<form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
    @csrf
    @method('PUT')
    
    <x-floating-label 
        id="name" 
        name="name"
        label="Full name" 
        value="{{ old('name', $user->name) }}"
        :required="true"
        :error="$errors->has('name')"
        :helper-text="$errors->first('name') ?: 'Enter your full name'"
    />
    
    <x-floating-label 
        id="email" 
        name="email"
        type="email" 
        label="Email address" 
        value="{{ old('email', $user->email) }}"
        :required="true"
        :error="$errors->has('email')"
        :helper-text="$errors->first('email')"
    />
    
    <x-floating-textarea 
        id="bio" 
        name="bio"
        label="Biography" 
        value="{{ old('bio', $user->bio) }}"
        rows="4"
        :error="$errors->has('bio')"
        :helper-text="$errors->first('bio')"
    />
    
    <x-floating-select 
        id="country" 
        name="country"
        label="Country"
        :required="true"
        :error="$errors->has('country')"
        :helper-text="$errors->first('country')"
    >
        <option value="">Choose a country</option>
        @foreach($countries as $code => $name)
            <option value="{{ $code }}" @selected(old('country', $user->country) === $code)>
                {{ $name }}
            </option>
        @endforeach
    </x-floating-select>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Update profile
    </button>
</form>
```

## Accessibility

The Floating Label components:
- Use semantic HTML form elements
- Include proper label associations via `for` and `id` attributes
- Support required field indicators
- Provide error states with appropriate ARIA attributes
- Support keyboard navigation (Tab, Enter)
- Use proper color contrast ratios
- Show visual indicators for required fields
- Announce floating label state to screen readers
- Supports proper ARIA attributes for form validation

## Notes

- The `placeholder` prop must be set to a space (`' '`) for the floating animation to work properly
- Labels automatically float up when the input has focus or contains a value
- Required fields show a red asterisk (*) next to the label
- Error states change the border and label color to red
- Helper text appears below the input and changes color based on error state
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported
- The component uses CSS peer selectors for the floating animation

## Browser Support

- All modern browsers
- Requires CSS peer selector support
- Responsive design
- Dark mode support
- Smooth animations with CSS transitions

