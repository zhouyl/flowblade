# Code

Code component for displaying inline code snippets. Provides semantic HTML with styling to distinguish code from regular text. Perfect for documentation, tutorials, and technical content.

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

### Style Props

Code supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### API Documentation

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" mb="3">API Endpoint</x-heading>

        <x-text mb="2">
            Send a POST request to <x-code bg="gray.100" px="2" py="1" rounded="md">/api/users</x-code>
        </x-text>

        <x-text size="sm" color="gray">
            The request body should include <x-code>name</x-code>, <x-code>email</x-code>, and <x-code>password</x-code> fields.
        </x-text>
    </x-card-body>
</x-card>
```

### Function Reference

```blade
<x-text>
    Call the <x-code color="blue.600">getUserById()</x-code> function with a user ID to retrieve user information.
</x-text>
```

### Configuration Example

```blade
<x-vstack spacing="3">
    <x-text>
        Set the <x-code>APP_ENV</x-code> variable to <x-code>production</x-code> in your <x-code>.env</x-code> file.
    </x-text>

    <x-code-block language="bash">
APP_ENV=production
APP_DEBUG=false
    </x-code-block>
</x-vstack>
```

### Error Message

```blade
<x-alert status="danger" variant="subtle">
    <x-text>
        Error: The <x-code>config</x-code> file is missing. Please create it in the <x-code>config/</x-code> directory.
    </x-text>
</x-alert>
```

### Keyboard Shortcuts

```blade
<x-vstack spacing="2">
    <x-text>
        <x-code bg="gray.200" px="2" py="1" rounded="md">Ctrl + S</x-code> - Save file
    </x-text>
    <x-text>
        <x-code bg="gray.200" px="2" py="1" rounded="md">Ctrl + Z</x-code> - Undo
    </x-text>
    <x-text>
        <x-code bg="gray.200" px="2" py="1" rounded="md">Ctrl + Y</x-code> - Redo
    </x-text>
</x-vstack>
```

## Accessibility

The Code component:
- Uses semantic HTML `<code>` element
- Maintains proper content hierarchy
- Works with screen readers
- Provides clear visual distinction for code
- Should be used within appropriate context elements

