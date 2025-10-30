# Code

Code component for displaying inline code snippets. Provides semantic HTML with styling to distinguish code from regular text.

## Basic Usage

```blade
<x-text>
    Use the <x-code>npm install</x-code> command to install dependencies.
</x-text>
```

## Props

Code supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### Inline Code

```blade
<x-text>
    The <x-code>function()</x-code> method returns a value.
</x-text>
```

### With Custom Styling

```blade
<x-text>
    Run <x-code bg="gray.100" color="red.600" px="2" py="1" rounded="md">
        npm start
    </x-code> to start the development server.
</x-text>
```

### In Documentation

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" class="mb-3">Installation</x-heading>
        
        <x-text class="mb-3">
            Install the package using <x-code>npm</x-code>:
        </x-text>
        
        <x-code-block language="bash">
npm install my-package
        </x-code-block>
    </x-card-body>
</x-card>
```

### Multiple Code References

```blade
<x-text>
    Import <x-code>Component</x-code> from <x-code>react</x-code> and use it in your application.
</x-text>
```

### With Keyboard Shortcut

```blade
<x-text>
    Press <x-code bg="gray.200" px="2" py="1" rounded="md">Ctrl + S</x-code> to save.
</x-text>
```

## Accessibility

The Code component:
- Uses semantic HTML `<code>` element
- Maintains proper content hierarchy
- Works with screen readers
- Provides clear visual distinction for code

