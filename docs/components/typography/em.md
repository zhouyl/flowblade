# Em

Em component for displaying emphasized text. Uses semantic HTML `<em>` element for proper text emphasis.

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

## Accessibility

The Em component:
- Uses semantic HTML `<em>` element
- Properly conveys emphasis to screen readers
- Maintains text hierarchy
- Works with all assistive technologies

