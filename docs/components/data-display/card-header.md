# CardHeader

CardHeader component for displaying the header section of a Card. Typically used for titles, subtitles, and action buttons at the top of a card.

## Basic Usage

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Card Title</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-text>Card content goes here.</x-text>
    </x-card-body>
</x-card>
```

## Props

CardHeader supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### With Title and Subtitle

```blade
<x-card>
    <x-card-header>
        <div>
            <x-heading size="lg">User Profile</x-heading>
            <x-text size="sm" color="gray">Manage your account settings</x-text>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>Profile content here</x-text>
    </x-card-body>
</x-card>
```

### With Action Button

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Recent Activity</x-heading>
            <x-button variant="ghost" size="sm">View All</x-button>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>Activity list here</x-text>
    </x-card-body>
</x-card>
```

### With Badge

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Status</x-heading>
            <x-badge color="success">Active</x-badge>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>Status information here</x-text>
    </x-card-body>
</x-card>
```

### With Custom Background

```blade
<x-card>
    <x-card-header bg="blue.50">
        <x-heading size="lg" color="blue.900">Featured</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-text>Featured content here</x-text>
    </x-card-body>
</x-card>
```

## Accessibility

The CardHeader component:
- Uses semantic HTML structure
- Maintains proper heading hierarchy
- Works with screen readers
- Supports keyboard navigation

