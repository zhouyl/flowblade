# Kbd

Kbd component for displaying keyboard input. Uses semantic HTML `<kbd>` element to represent user keyboard input. Perfect for documentation, tutorials, and help sections.

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

### Style Props

Kbd supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### Game Controls

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Game Controls</x-heading>
    </x-card-header>

    <x-card-body class="space-y-2">
        <x-text><x-kbd>W</x-kbd> - Move Forward</x-text>
        <x-text><x-kbd>A</x-kbd> - Move Left</x-text>
        <x-text><x-kbd>S</x-kbd> - Move Backward</x-text>
        <x-text><x-kbd>D</x-kbd> - Move Right</x-text>
        <x-text><x-kbd>Space</x-kbd> - Jump</x-text>
    </x-card-body>
</x-card>
```

### Editor Shortcuts

```blade
<x-vstack spacing="2">
    <x-text><x-kbd>Ctrl</x-kbd> + <x-kbd>A</x-kbd> - Select All</x-text>
    <x-text><x-kbd>Ctrl</x-kbd> + <x-kbd>C</x-kbd> - Copy</x-text>
    <x-text><x-kbd>Ctrl</x-kbd> + <x-kbd>V</x-kbd> - Paste</x-text>
    <x-text><x-kbd>Ctrl</x-kbd> + <x-kbd>Z</x-kbd> - Undo</x-text>
    <x-text><x-kbd>Ctrl</x-kbd> + <x-kbd>Shift</x-kbd> + <x-kbd>Z</x-kbd> - Redo</x-text>
</x-vstack>
```

### Help Section

```blade
<x-alert status="info" variant="subtle">
    <x-text>
        <x-strong>Tip:</x-strong> Press <x-kbd>?</x-kbd> to open the help menu.
    </x-text>
</x-alert>
```

### Navigation Instructions

```blade
<x-text>
    Use <x-kbd>Tab</x-kbd> to navigate between fields, <x-kbd>Enter</x-kbd> to submit, and <x-kbd>Escape</x-kbd> to cancel.
</x-text>
```

### Mac vs Windows

```blade
<x-vstack spacing="3">
    <x-text>
        <x-strong>Windows:</x-strong> <x-kbd>Ctrl</x-kbd> + <x-kbd>S</x-kbd>
    </x-text>
    <x-text>
        <x-strong>Mac:</x-strong> <x-kbd>⌘</x-kbd> + <x-kbd>S</x-kbd>
    </x-text>
</x-vstack>
```

## Accessibility

The Kbd component:
- Uses semantic HTML `<kbd>` element
- Properly represents keyboard input
- Works with screen readers
- Maintains text hierarchy
- Provides clear visual distinction
- Helps users understand keyboard interactions

