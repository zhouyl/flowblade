# TabsTrigger

TabsTrigger component for creating clickable tab buttons within a Tabs component. Each trigger corresponds to a TabsContent panel. Perfect for organizing content into logical sections.

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

### Style Props

TabsTrigger supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### Product Details

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="description">Description</x-tabs-trigger>
        <x-tabs-trigger value="specifications">Specifications</x-tabs-trigger>
        <x-tabs-trigger value="reviews">Reviews</x-tabs-trigger>
        <x-tabs-trigger value="shipping">Shipping</x-tabs-trigger>
    </x-tabs-list>

    <x-tabs-content value="description">
        <x-text>Product description goes here...</x-text>
    </x-tabs-content>
    <x-tabs-content value="specifications">
        <x-text>Product specifications go here...</x-text>
    </x-tabs-content>
    <x-tabs-content value="reviews">
        <x-text>Customer reviews go here...</x-text>
    </x-tabs-content>
    <x-tabs-content value="shipping">
        <x-text>Shipping information goes here...</x-text>
    </x-tabs-content>
</x-tabs>
```

### User Settings

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="account">Account</x-tabs-trigger>
        <x-tabs-trigger value="privacy">Privacy</x-tabs-trigger>
        <x-tabs-trigger value="notifications">Notifications</x-tabs-trigger>
        <x-tabs-trigger value="security">Security</x-tabs-trigger>
    </x-tabs-list>

    <x-tabs-content value="account">Account settings content</x-tabs-content>
    <x-tabs-content value="privacy">Privacy settings content</x-tabs-content>
    <x-tabs-content value="notifications">Notification settings content</x-tabs-content>
    <x-tabs-content value="security">Security settings content</x-tabs-content>
</x-tabs>
```

### Disabled Tab

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Available</x-tabs-trigger>
        <x-tabs-trigger value="tab2" disabled>Coming Soon</x-tabs-trigger>
        <x-tabs-trigger value="tab3">Available</x-tabs-trigger>
    </x-tabs-list>

    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab3">Content 3</x-tabs-content>
</x-tabs>
```

## Accessibility

The TabsTrigger component:
- Uses semantic HTML structure
- Supports keyboard navigation (Arrow keys, Tab)
- Works with screen readers
- Provides clear active state indication
- Supports disabled state for unavailable tabs

