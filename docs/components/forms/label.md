# Label

Semantic label component for form inputs with support for required indicators, sizing, and styling options. Perfect for associating text with form controls and improving accessibility.

## Basic Usage

```blade
<x-label for="email">Email Address</x-label>
<x-input id="email" type="email" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `for` | `string` | `null` | The ID of the input element this label is for |
| `required` | `boolean` | `false` | Whether to show a required indicator (*) |
| `size` | `string` | `'md'` | Label size: `sm`, `md`, `lg` |

### Style Props

Label supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

```blade
<x-label size="sm">Small Label</x-label>
<x-label size="md">Medium Label</x-label>
<x-label size="lg">Large Label</x-label>
```

## Required Indicator

```blade
<x-label for="name" required>Full Name</x-label>
<x-input id="name" />
```

## With Input

```blade
<x-vstack gap="2">
    <x-label for="email" required>Email Address</x-label>
    <x-input id="email" type="email" placeholder="you@example.com" />
</x-vstack>
```

## With Checkbox

```blade
<x-flex as="label" align="center" gap="2">
    <x-checkbox name="agree" />
    <x-label>I agree to the terms of service</x-label>
</x-flex>
```

## With Radio

```blade
<x-flex as="label" align="center" gap="2">
    <x-radio name="option" value="1" />
    <x-label>Option 1</x-label>
</x-flex>
```

## With Textarea

```blade
<x-vstack gap="2">
    <x-label for="message" required>Message</x-label>
    <x-textarea id="message" placeholder="Enter your message..." />
</x-vstack>
```

## Styling

```blade
<!-- Custom styling with style props -->
<x-label for="name" text-color="blue-600" font-weight="bold">
    Custom Styled Label
</x-label>
```

## Accessibility

The Label component automatically associates with form inputs using the `for` attribute, improving accessibility for screen readers and making the clickable area larger for better usability.

```blade
<!-- Clicking the label will focus the input -->
<x-label for="username">Username</x-label>
<x-input id="username" />
```

