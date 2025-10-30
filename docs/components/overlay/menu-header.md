# MenuHeader

MenuHeader component for displaying header text within a Menu. Useful for labeling menu sections or providing context.

## Basic Usage

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Menu</x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-header>File</x-menu-header>
        <x-menu-item href="/new">New</x-menu-item>
        <x-menu-item href="/open">Open</x-menu-item>
    </x-menu-content>
</x-menu>
```

## Props

MenuHeader supports all common style props for flexible styling.

## Examples

### Grouped Menu with Headers

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Actions</x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-header>File Operations</x-menu-header>
        <x-menu-item href="/new">New</x-menu-item>
        <x-menu-item href="/open">Open</x-menu-item>
        <x-menu-item href="/save">Save</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-header>Edit Operations</x-menu-header>
        <x-menu-item href="/cut">Cut</x-menu-item>
        <x-menu-item href="/copy">Copy</x-menu-item>
        <x-menu-item href="/paste">Paste</x-menu-item>
    </x-menu-content>
</x-menu>
```

### User Menu with Header

```blade
<x-menu>
    <x-menu-trigger>
        <x-button variant="ghost">
            <img src="/avatar.jpg" class="w-8 h-8 rounded-full" />
        </x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-header>Account</x-menu-header>
        <x-menu-item href="/profile">Profile</x-menu-item>
        <x-menu-item href="/settings">Settings</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-header>Support</x-menu-header>
        <x-menu-item href="/help">Help Center</x-menu-item>
        <x-menu-item href="/feedback">Send Feedback</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-item href="/logout">Logout</x-menu-item>
    </x-menu-content>
</x-menu>
```

## Accessibility

The MenuHeader component:
- Uses semantic HTML structure
- Provides clear menu section labels
- Works with screen readers
- Maintains menu structure

