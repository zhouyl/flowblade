# TabsList

TabsList component for creating a container for tab triggers. Groups all TabsTrigger components together.

## Basic Usage

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Tab 1</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
        <x-tabs-trigger value="tab3">Tab 3</x-tabs-trigger>
    </x-tabs-list>
</x-tabs>
```

## Props

TabsList supports all common style props for flexible styling.

## Examples

### Basic Tab List

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="home">Home</x-tabs-trigger>
        <x-tabs-trigger value="about">About</x-tabs-trigger>
        <x-tabs-trigger value="contact">Contact</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="home">Home content</x-tabs-content>
    <x-tabs-content value="about">About content</x-tabs-content>
    <x-tabs-content value="contact">Contact content</x-tabs-content>
</x-tabs>
```

### Vertical Tabs

```blade
<div class="flex gap-4">
    <x-tabs-list class="flex-col">
        <x-tabs-trigger value="general">General</x-tabs-trigger>
        <x-tabs-trigger value="privacy">Privacy</x-tabs-trigger>
        <x-tabs-trigger value="notifications">Notifications</x-tabs-trigger>
    </x-tabs-list>
    
    <div class="flex-1">
        <x-tabs-content value="general">General settings</x-tabs-content>
        <x-tabs-content value="privacy">Privacy settings</x-tabs-content>
        <x-tabs-content value="notifications">Notification settings</x-tabs-content>
    </div>
</div>
```

## Accessibility

The TabsList component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Maintains proper tab order

