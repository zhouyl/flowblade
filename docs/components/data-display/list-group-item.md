# ListGroupItem

ListGroupItem component for displaying individual items within a ListGroup. Each item can contain text, icons, badges, or custom content. Perfect for lists, navigation menus, and item collections.

## Basic Usage

```blade
<x-list-group>
    <x-list-group-item>Item 1</x-list-group-item>
    <x-list-group-item>Item 2</x-list-group-item>
    <x-list-group-item>Item 3</x-list-group-item>
</x-list-group>
```

## Props

ListGroupItem supports all common style props for flexible styling.

### Style Props

ListGroupItem supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### With Icons

```blade
<x-list-group>
    <x-list-group-item>
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:home" class="w-4 h-4" />
            <x-text>Home</x-text>
        </div>
    </x-list-group-item>
    <x-list-group-item>
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:cog" class="w-4 h-4" />
            <x-text>Settings</x-text>
        </div>
    </x-list-group-item>
</x-list-group>
```

### With Badges

```blade
<x-list-group>
    <x-list-group-item>
        <div class="flex items-center justify-between">
            <x-text>Notifications</x-text>
            <x-badge color="danger">5</x-badge>
        </div>
    </x-list-group-item>
    <x-list-group-item>
        <div class="flex items-center justify-between">
            <x-text>Messages</x-text>
            <x-badge color="info">2</x-badge>
        </div>
    </x-list-group-item>
</x-list-group>
```

### With Descriptions

```blade
<x-list-group>
    <x-list-group-item>
        <div>
            <x-text weight="medium">John Doe</x-text>
            <x-text size="sm" color="gray">john@example.com</x-text>
        </div>
    </x-list-group-item>
    <x-list-group-item>
        <div>
            <x-text weight="medium">Jane Smith</x-text>
            <x-text size="sm" color="gray">jane@example.com</x-text>
        </div>
    </x-list-group-item>
</x-list-group>
```

### With Action Buttons

```blade
<x-list-group>
    <x-list-group-item>
        <div class="flex items-center justify-between">
            <x-text>Item 1</x-text>
            <x-button variant="ghost" size="sm">Edit</x-button>
        </div>
    </x-list-group-item>
    <x-list-group-item>
        <div class="flex items-center justify-between">
            <x-text>Item 2</x-text>
            <x-button variant="ghost" size="sm">Edit</x-button>
        </div>
    </x-list-group-item>
</x-list-group>
```

## Accessibility

The ListGroupItem component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation (Tab, Enter)
- Should be used within a ListGroup component
- Provides clear visual separation between items
- Supports ARIA attributes for additional context
- Properly announces list items to screen readers
- Maintains proper focus order for interactive elements

