# MenuItem

MenuItem component for displaying individual menu items within a Menu. Each item can be a link, button, or custom content. Perfect for dropdown menus, context menus, and action menus.

## Basic Usage

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Menu</x-button>
    </x-menu-trigger>

    <x-menu-content>
        <x-menu-item href="/edit">Edit</x-menu-item>
        <x-menu-item href="/delete">Delete</x-menu-item>
    </x-menu-content>
</x-menu>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `null` | Link URL |
| `disabled` | `boolean` | `false` | Disabled state |

MenuItem also supports all common style props for flexible styling.

### Style Props

MenuItem supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Menu

```blade
<x-menu>
    <x-menu-trigger>
        <x-button variant="ghost">
            <x-icon name="heroicons:ellipsis-vertical" class="w-5 h-5" />
        </x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-item href="/edit">Edit</x-menu-item>
        <x-menu-item href="/duplicate">Duplicate</x-menu-item>
        <x-menu-item href="/archive">Archive</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="/delete" color="danger">Delete</x-menu-item>
    </x-menu-content>
</x-menu>
```

### With Icons

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Actions</x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-item href="/edit">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:pencil" class="w-4 h-4" />
                Edit
            </div>
        </x-menu-item>
        <x-menu-item href="/copy">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:document-duplicate" class="w-4 h-4" />
                Copy
            </div>
        </x-menu-item>
    </x-menu-content>
</x-menu>
```

### Disabled Items

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Menu</x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-item href="/edit">Edit</x-menu-item>
        <x-menu-item href="/delete" disabled>Delete (Disabled)</x-menu-item>
    </x-menu-content>
</x-menu>
```

## Accessibility

The MenuItem component:
- Uses semantic HTML structure
- Supports keyboard navigation (Arrow keys, Enter, Escape)
- Works with screen readers
- Provides clear menu item indication
- Should be used within a Menu component
- Disabled items are properly announced to screen readers
- Supports ARIA attributes for additional context

