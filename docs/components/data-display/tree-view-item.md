# TreeViewItem

TreeViewItem component for displaying individual nodes within a TreeView. Each item can have child items to create a hierarchical tree structure. Perfect for file explorers, navigation menus, and hierarchical data display.

## Basic Usage

```blade
<x-tree-view>
    <x-tree-view-item label="Parent 1">
        <x-tree-view-item label="Child 1.1" />
        <x-tree-view-item label="Child 1.2" />
    </x-tree-view-item>
    <x-tree-view-item label="Parent 2">
        <x-tree-view-item label="Child 2.1" />
    </x-tree-view-item>
</x-tree-view>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Label text for the tree item |

TreeViewItem also supports all common style props for flexible styling.

### Style Props

TreeViewItem supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### With Icons

```blade
<x-tree-view>
    <x-tree-view-item label="Documents">
        <x-tree-view-item label="Reports">
            <x-tree-view-item label="Q1 Report" />
            <x-tree-view-item label="Q2 Report" />
        </x-tree-view-item>
        <x-tree-view-item label="Presentations">
            <x-tree-view-item label="Company Overview" />
        </x-tree-view-item>
    </x-tree-view-item>
    <x-tree-view-item label="Images">
        <x-tree-view-item label="Screenshots" />
        <x-tree-view-item label="Photos" />
    </x-tree-view-item>
</x-tree-view>
```

### With Custom Content

```blade
<x-tree-view>
    <x-tree-view-item label="Projects">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:folder" class="w-4 h-4" />
            <x-tree-view-item label="Project A">
                <x-tree-view-item label="src" />
                <x-tree-view-item label="tests" />
            </x-tree-view-item>
        </div>
    </x-tree-view-item>
</x-tree-view>
```

### With Status Indicators

```blade
<x-tree-view>
    <x-tree-view-item label="Tasks">
        <x-tree-view-item label="Completed Tasks">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:check-circle" class="w-4 h-4 text-green-600" />
                <x-text>Task 1</x-text>
            </div>
        </x-tree-view-item>
        <x-tree-view-item label="Pending Tasks">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:clock" class="w-4 h-4 text-yellow-600" />
                <x-text>Task 2</x-text>
            </div>
        </x-tree-view-item>
    </x-tree-view-item>
</x-tree-view>
```

## Accessibility

The TreeViewItem component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation (Arrow keys, Enter, Space)
- Supports expand/collapse functionality with proper ARIA attributes
- Should be used within a TreeView component
- Provides clear indication of parent/child relationships
- Announces expanded/collapsed state to screen readers
- Properly announces tree node hierarchy to screen readers
- Supports proper ARIA attributes for tree navigation

