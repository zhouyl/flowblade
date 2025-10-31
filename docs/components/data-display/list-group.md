# List Group Components

Interactive list component family for displaying a series of items, buttons or links inside a single container. ListGroup provides a flexible way to display lists with support for various item types. Perfect for navigation lists, menu items, and interactive lists.

## Overview

The List Group component system consists of:
- **ListGroup** - Container component
- **ListGroupItem** - Individual list item component

## Basic Usage

### Default List Group

```blade
<x-list-group>
    <x-list-group-item :first="true">Profile</x-list-group-item>
    <x-list-group-item>Settings</x-list-group-item>
    <x-list-group-item>Messages</x-list-group-item>
    <x-list-group-item :last="true">Download</x-list-group-item>
</x-list-group>
```

## Props

### ListGroup Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | `string` | `'ul'` | Element type: `ul` or `div` |

### ListGroupItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | `string` | `'li'` | Element type: `li`, `a`, or `button` |
| `href` | `string` | `'#'` | Link URL (only for `a` type) |
| `type` | `string` | `'button'` | Button type (only for `button` type) |
| `active` | `bool` | `false` | Whether the item is active |
| `disabled` | `bool` | `false` | Whether the item is disabled |
| `first` | `bool` | `false` | Whether this is the first item |
| `last` | `bool` | `false` | Whether this is the last item |

## Style Props

ListGroup and ListGroupItem support all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### List Group with Links

```blade
<x-list-group as="div">
    <x-list-group-item as="a" href="/profile" :active="true" :first="true">
        Profile
    </x-list-group-item>
    <x-list-group-item as="a" href="/settings">
        Settings
    </x-list-group-item>
    <x-list-group-item as="a" href="/messages">
        Messages
    </x-list-group-item>
    <x-list-group-item as="a" href="/download" :last="true">
        Download
    </x-list-group-item>
</x-list-group>
```

### List Group with Buttons

```blade
<x-list-group as="div">
    <x-list-group-item as="button" :active="true" :first="true">
        Profile
    </x-list-group-item>
    <x-list-group-item as="button">
        Settings
    </x-list-group-item>
    <x-list-group-item as="button">
        Messages
    </x-list-group-item>
    <x-list-group-item as="button" :disabled="true" :last="true">
        Download
    </x-list-group-item>
</x-list-group>
```

### List Group with Icons

```blade
<x-list-group as="div">
    <x-list-group-item as="button" :first="true" class="relative inline-flex items-center">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
        </svg>
        Profile
    </x-list-group-item>
    <x-list-group-item as="button" class="relative inline-flex items-center">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25"/>
        </svg>
        Settings
    </x-list-group-item>
    <x-list-group-item as="button" class="relative inline-flex items-center">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
            <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor"/>
            <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor"/>
        </svg>
        Messages
    </x-list-group-item>
    <x-list-group-item as="button" :last="true" class="relative inline-flex items-center">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
        </svg>
        Download
    </x-list-group-item>
</x-list-group>
```

### List Group with Badges

```blade
<x-list-group as="div">
    <x-list-group-item as="button" :first="true" class="relative inline-flex items-center justify-between">
        <span>Profile</span>
        <x-badge color="blue">New</x-badge>
    </x-list-group-item>
    <x-list-group-item as="button" class="relative inline-flex items-center justify-between">
        <span>Messages</span>
        <x-badge color="red">5</x-badge>
    </x-list-group-item>
    <x-list-group-item as="button" class="relative inline-flex items-center justify-between">
        <span>Notifications</span>
        <x-badge color="green">12</x-badge>
    </x-list-group-item>
    <x-list-group-item as="button" :last="true">
        Settings
    </x-list-group-item>
</x-list-group>
```

### Custom Width

```blade
<x-list-group class="w-64">
    <x-list-group-item :first="true">Profile</x-list-group-item>
    <x-list-group-item>Settings</x-list-group-item>
    <x-list-group-item>Messages</x-list-group-item>
    <x-list-group-item :last="true">Download</x-list-group-item>
</x-list-group>
```

### Full Width

```blade
<x-list-group class="w-full">
    <x-list-group-item :first="true">Profile</x-list-group-item>
    <x-list-group-item>Settings</x-list-group-item>
    <x-list-group-item>Messages</x-list-group-item>
    <x-list-group-item :last="true">Download</x-list-group-item>
</x-list-group>
```

## Laravel Integration

### Navigation Menu

```blade
<x-list-group as="div" class="w-64">
    <x-list-group-item 
        as="a" 
        href="{{ route('dashboard') }}" 
        :active="request()->routeIs('dashboard')"
        :first="true"
    >
        Dashboard
    </x-list-group-item>
    <x-list-group-item 
        as="a" 
        href="{{ route('profile') }}" 
        :active="request()->routeIs('profile')"
    >
        Profile
    </x-list-group-item>
    <x-list-group-item 
        as="a" 
        href="{{ route('settings') }}" 
        :active="request()->routeIs('settings')"
    >
        Settings
    </x-list-group-item>
    <x-list-group-item 
        as="a" 
        href="{{ route('logout') }}" 
        :last="true"
    >
        Logout
    </x-list-group-item>
</x-list-group>
```

### Settings Panel

```blade
<div class="space-y-6">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Account Settings</h2>
    
    <x-list-group as="div" class="w-full">
        <x-list-group-item as="button" :first="true" class="relative inline-flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>
                <span>Profile Information</span>
            </div>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </x-list-group-item>
        
        <x-list-group-item as="button" class="relative inline-flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                </svg>
                <span>Email Preferences</span>
            </div>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </x-list-group-item>
        
        <x-list-group-item as="button" class="relative inline-flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M14 7h-1.5V4.5a4.5 4.5 0 1 0-9 0V7H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-5 8a1 1 0 1 1-2 0v-3a1 1 0 1 1 2 0v3Zm1.5-8h-5V4.5a2.5 2.5 0 1 1 5 0V7Z"/>
                </svg>
                <span>Security</span>
            </div>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </x-list-group-item>
        
        <x-list-group-item as="button" :last="true" class="relative inline-flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/>
                </svg>
                <span>Preferences</span>
            </div>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </x-list-group-item>
    </x-list-group>
</div>
```

### User List

```blade
@foreach($users as $user)
    <x-list-group as="div" class="w-full mb-4">
        <x-list-group-item as="button" :first="true" :last="true" class="relative inline-flex items-center justify-between">
            <div class="flex items-center">
                <img class="w-10 h-10 rounded-full me-3" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                <div class="text-left">
                    <div class="font-semibold">{{ $user->name }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</div>
                </div>
            </div>
            @if($user->is_online)
                <x-badge color="green">Online</x-badge>
            @endif
        </x-list-group-item>
    </x-list-group>
@endforeach
```

### Action Menu

```blade
<x-list-group as="div" class="w-56">
    <x-list-group-item as="button" :first="true" class="relative inline-flex items-center">
        <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h9M5 9h5m8-8H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h4l3.5 4 3.5-4h5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
        </svg>
        Edit
    </x-list-group-item>
    <x-list-group-item as="button" class="relative inline-flex items-center">
        <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z"/>
        </svg>
        Archive
    </x-list-group-item>
    <x-list-group-item as="button" :last="true" class="relative inline-flex items-center text-red-600 dark:text-red-500">
        <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
        </svg>
        Delete
    </x-list-group-item>
</x-list-group>
```

## Accessibility

The ListGroup component:
- Uses semantic HTML elements (ul/li or div/a/button)
- Includes proper ARIA attributes for active items
- Supports keyboard navigation (Tab, Enter, Arrow keys)
- Provides screen reader support
- Uses proper color contrast ratios
- Shows visual focus indicators
- Supports disabled state for buttons
- Properly announces list items to screen readers
- Supports proper ARIA roles for list structure

## Notes

- Use `first` and `last` props to apply proper border radius
- The `as` prop determines the element type
- Links (`as="a"`) require `href` prop
- Buttons (`as="button"`) support `disabled` prop
- Active state changes background color
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported
- Responsive design

## Related Components

- [Menu](../navigation/menu.md) - Dropdown menu component
- [Tabs](../navigation/tabs.md) - Tab navigation component
- [Badge](../data-display/badge.md) - Badge component for labels
- [Avatar](../data-display/avatar.md) - Avatar component for user images


