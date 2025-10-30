# TabsTrigger

TabsTrigger component for creating clickable tab buttons within a Tabs component. Each trigger corresponds to a TabsContent panel.

## Basic Usage

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Tab 1</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
        <x-tabs-trigger value="tab3">Tab 3</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab2">Content 2</x-tabs-content>
    <x-tabs-content value="tab3">Content 3</x-tabs-content>
</x-tabs>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | `null` | Tab identifier |
| `disabled` | `boolean` | `false` | Disabled state |

TabsTrigger also supports all common style props for flexible styling.

## Examples

### Basic Tabs

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="overview">Overview</x-tabs-trigger>
        <x-tabs-trigger value="details">Details</x-tabs-trigger>
        <x-tabs-trigger value="reviews">Reviews</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="overview">
        <x-text>Product overview content</x-text>
    </x-tabs-content>
    <x-tabs-content value="details">
        <x-text>Product details content</x-text>
    </x-tabs-content>
    <x-tabs-content value="reviews">
        <x-text>Product reviews content</x-text>
    </x-tabs-content>
</x-tabs>
```

### With Icons

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="settings">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:cog" class="w-4 h-4" />
                Settings
            </div>
        </x-tabs-trigger>
        <x-tabs-trigger value="security">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:lock-closed" class="w-4 h-4" />
                Security
            </div>
        </x-tabs-trigger>
    </x-tabs-list>
</x-tabs>
```

## Accessibility

The TabsTrigger component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear active state indication

