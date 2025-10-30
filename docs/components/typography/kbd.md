# Kbd

Kbd component for displaying keyboard input. Uses semantic HTML `<kbd>` element to represent user keyboard input.

## Basic Usage

```blade
<x-text>
    Press <x-kbd>Enter</x-kbd> to submit.
</x-text>
```

## Props

Kbd supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### Single Key

```blade
<x-text>
    Press <x-kbd>Escape</x-kbd> to close the dialog.
</x-text>
```

### Key Combination

```blade
<x-text>
    Use <x-kbd>Ctrl</x-kbd> + <x-kbd>S</x-kbd> to save your work.
</x-text>
```

### Multiple Shortcuts

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Keyboard Shortcuts</x-heading>
    </x-card-header>
    
    <x-card-body class="space-y-3">
        <div class="flex items-center justify-between">
            <x-text>Save</x-text>
            <div class="flex gap-1">
                <x-kbd>Ctrl</x-kbd>
                <x-text>+</x-text>
                <x-kbd>S</x-kbd>
            </div>
        </div>
        
        <div class="flex items-center justify-between">
            <x-text>Undo</x-text>
            <div class="flex gap-1">
                <x-kbd>Ctrl</x-kbd>
                <x-text>+</x-text>
                <x-kbd>Z</x-kbd>
            </div>
        </div>
        
        <div class="flex items-center justify-between">
            <x-text>Redo</x-text>
            <div class="flex gap-1">
                <x-kbd>Ctrl</x-kbd>
                <x-text>+</x-text>
                <x-kbd>Y</x-kbd>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### In Instructions

```blade
<x-text>
    To navigate, use the arrow keys: <x-kbd>↑</x-kbd> <x-kbd>↓</x-kbd> <x-kbd>←</x-kbd> <x-kbd>→</x-kbd>
</x-text>
```

### With Custom Styling

```blade
<x-text>
    Press <x-kbd bg="gray.800" color="white" px="2" py="1" rounded="md">Space</x-kbd> to play.
</x-text>
```

## Accessibility

The Kbd component:
- Uses semantic HTML `<kbd>` element
- Properly represents keyboard input
- Works with screen readers
- Maintains text hierarchy
- Provides clear visual distinction

