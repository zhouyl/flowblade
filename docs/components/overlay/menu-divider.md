# MenuDivider

MenuDivider component for separating menu items into logical groups. Provides visual separation between different menu sections.

## Basic Usage

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Menu</x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-item href="/edit">Edit</x-menu-item>
        <x-menu-item href="/copy">Copy</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-item href="/delete">Delete</x-menu-item>
    </x-menu-content>
</x-menu>
```

## Props

MenuDivider supports all common style props for flexible styling.

## Examples

### Grouped Menu Items

```blade
<x-menu>
    <x-menu-trigger>
        <x-button>Actions</x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-item href="/new">New</x-menu-item>
        <x-menu-item href="/open">Open</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-item href="/save">Save</x-menu-item>
        <x-menu-item href="/save-as">Save As</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-item href="/exit">Exit</x-menu-item>
    </x-menu-content>
</x-menu>
```

### User Menu

```blade
<x-menu>
    <x-menu-trigger>
        <x-button variant="ghost">
            <img src="/avatar.jpg" class="w-8 h-8 rounded-full" />
        </x-button>
    </x-menu-trigger>
    
    <x-menu-content>
        <x-menu-item href="/profile">Profile</x-menu-item>
        <x-menu-item href="/settings">Settings</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-item href="/help">Help</x-menu-item>
        <x-menu-item href="/about">About</x-menu-item>
        
        <x-menu-divider />
        
        <x-menu-item href="/logout">Logout</x-menu-item>
    </x-menu-content>
</x-menu>
```

## Accessibility

The MenuDivider component:
- Uses semantic HTML structure
- Provides visual separation
- Works with screen readers
- Maintains menu structure

