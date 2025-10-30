# Strong

Strong component for displaying strong emphasis text. Uses semantic HTML `<strong>` element for proper text emphasis.

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

## Accessibility

The Strong component:
- Uses semantic HTML `<strong>` element
- Properly conveys strong emphasis to screen readers
- Maintains text hierarchy
- Works with all assistive technologies

