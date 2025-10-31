# Em

Em component for displaying emphasized text. Uses semantic HTML `<em>` element for proper text emphasis. Perfect for highlighting important words or phrases within text content.

## Basic Usage

```blade
<x-text>
    This is <x-em>emphasized</x-em> text.
</x-text>
```

## Props

Em supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### Style Props

Em supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Emphasis

```blade
<x-text>
    This is <x-em>very important</x-em> information.
</x-text>
```

### With Custom Color

```blade
<x-text>
    This is <x-em color="red.600">critical</x-em> information.
</x-text>
```

### Multiple Emphasis

```blade
<x-text>
    This is <x-em>emphasized</x-em> and this is <x-em>also emphasized</x-em>.
</x-text>
```

### In a Paragraph

```blade
<x-card>
    <x-card-body>
        <x-text>
            The project deadline is <x-em>next Friday</x-em>, so please ensure all tasks are completed by then. 
            This is <x-em>critical</x-em> for the project's success.
        </x-text>
    </x-card-body>
</x-card>
```

### With Strong Emphasis

```blade
<x-text>
    This is <x-strong>strong</x-strong> and this is <x-em>emphasized</x-em>.
</x-text>
```

## Common Patterns

### Important Notice

```blade
<x-alert status="warning" variant="subtle">
    <x-text>
        Please note that this feature is <x-em>currently in beta</x-em> and may change in future releases.
    </x-text>
</x-alert>
```

### Article Content

```blade
<article>
    <x-heading as="h1" size="3xl" mb="4">Article Title</x-heading>

    <x-text mb="4">
        This is the introduction paragraph where we emphasize <x-em>key concepts</x-em> that readers should understand.
    </x-text>

    <x-text mb="4">
        The main point is that <x-em>proper emphasis</x-em> helps readers understand the importance of certain information.
    </x-text>
</article>
```

### Instructions

```blade
<x-vstack spacing="3">
    <x-text>
        1. Open the settings page and navigate to <x-em>Account Settings</x-em>.
    </x-text>
    <x-text>
        2. Click on <x-em>Change Password</x-em> button.
    </x-text>
    <x-text>
        3. Enter your <x-em>current password</x-em> and then your <x-em>new password</x-em>.
    </x-text>
</x-vstack>
```

### Comparison

```blade
<x-text>
    Unlike <x-strong>strong</x-strong> which indicates importance, <x-em>emphasis</x-em> indicates stress or importance in a linguistic sense.
</x-text>
```

### Quotation with Emphasis

```blade
<x-blockquote color="primary">
    <x-text>
        The only way to do great work is to <x-em>love what you do</x-em>.
    </x-text>
    <x-text size="sm" color="gray" mt="2">
        — Steve Jobs
    </x-text>
</x-blockquote>
```

## Accessibility

The Em component:
- Uses semantic HTML `<em>` element
- Properly conveys emphasis to screen readers
- Maintains text hierarchy
- Works with all assistive technologies
- Distinguishes from `<strong>` for proper semantic meaning
- Announces emphasis to screen readers
- Supports proper ARIA attributes for emphasized text

