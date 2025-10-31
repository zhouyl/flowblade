# Strong

Strong component for displaying strong emphasis text. Uses semantic HTML `<strong>` element for proper text emphasis. Perfect for highlighting important information, warnings, and critical content.

## Basic Usage

```blade
<x-text>
    This is <x-strong>important</x-strong> text.
</x-text>
```

## Props

Strong supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### Style Props

Strong supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Strong

```blade
<x-text>
    This is <x-strong>very important</x-strong> information.
</x-text>
```

### With Custom Color

```blade
<x-text>
    This is <x-strong color="red.600">critical</x-strong> information.
</x-text>
```

### Multiple Strong Emphasis

```blade
<x-text>
    This is <x-strong>emphasized</x-strong> and this is <x-strong>also emphasized</x-strong>.
</x-text>
```

### In a Paragraph

```blade
<x-card>
    <x-card-body>
        <x-text>
            The project deadline is <x-strong>next Friday</x-strong>, so please ensure all tasks are completed by then. 
            This is <x-strong>critical</x-strong> for the project's success.
        </x-text>
    </x-card-body>
</x-card>
```

### With Emphasis

```blade
<x-text>
    This is <x-strong>strong</x-strong> and this is <x-em>emphasized</x-em>.
</x-text>
```

### In Instructions

```blade
<x-text>
    <x-strong>Warning:</x-strong> This action cannot be undone. Please proceed with caution.
</x-text>
```

### With Custom Styling

```blade
<x-text>
    This is <x-strong color="blue.600" weight="bold">important</x-strong> information.
</x-text>
```

## Common Patterns

### Warning Message

```blade
<x-alert status="warning" variant="subtle">
    <x-text>
        <x-strong>Warning:</x-strong> This action will permanently delete all data. This cannot be undone.
    </x-text>
</x-alert>
```

### Important Notice

```blade
<x-card variant="outline" p="4" bg="yellow.50">
    <x-text>
        <x-strong>Important:</x-strong> Please update your password before <x-strong>December 31st</x-strong> to maintain account security.
    </x-text>
</x-card>
```

### Product Features

```blade
<x-vstack spacing="2">
    <x-text>
        <x-strong>Feature 1:</x-strong> Real-time collaboration
    </x-text>
    <x-text>
        <x-strong>Feature 2:</x-strong> Advanced analytics
    </x-text>
    <x-text>
        <x-strong>Feature 3:</x-strong> Priority support
    </x-text>
</x-vstack>
```

### Legal Terms

```blade
<x-text>
    By using this service, you agree to our <x-strong>Terms of Service</x-strong> and <x-strong>Privacy Policy</x-strong>.
</x-text>
```

### Pricing Highlight

```blade
<x-text>
    Save <x-strong>50%</x-strong> when you subscribe to our <x-strong>annual plan</x-strong>.
</x-text>
```

## Accessibility

The Strong component:
- Uses semantic HTML `<strong>` element
- Properly conveys strong emphasis to screen readers
- Maintains text hierarchy
- Works with all assistive technologies
- Distinguishes from `<em>` for proper semantic meaning
- Announces strong emphasis to screen readers
- Supports proper ARIA attributes for strong text

