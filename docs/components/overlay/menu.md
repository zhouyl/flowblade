# Menu

Dropdown menu component for displaying a list of menu items when clicking or hovering over a trigger element. Menu provides a flexible way to create dropdown menus. Perfect for navigation, actions, and context menus.

## Requirements

This component requires **Flowbite JavaScript** to be installed in your project for positioning and interaction.

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or install via npm:

```bash
npm install flowbite
```

## Basic Usage

```blade
<x-menu>
    <x-slot:trigger>
        <x-button>Open Menu</x-button>
    </x-slot:trigger>

    <x-vstack py="2" fontSize="sm" color="gray.700">
        <x-menu-item href="#">Dashboard</x-menu-item>
        <x-menu-item href="#">Settings</x-menu-item>
        <x-menu-item href="#">Earnings</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#">Sign out</x-menu-item>
    </x-vstack>
</x-menu>
```

## Components

### Menu

Main dropdown menu container.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placement` | `string` | `'bottom'` | Placement: `top`, `right`, `bottom`, `left`, `top-start`, `top-end`, `right-start`, `right-end`, `bottom-start`, `bottom-end`, `left-start`, `left-end` |
| `trigger` | `string` | `'click'` | Trigger type: `click`, `hover` |
| `delay` | `int\|null` | `300` | Delay in milliseconds for hover trigger |
| `width` | `string\|null` | `'sm'` | Width: `auto`, `xs`, `sm`, `md`, `lg`, `xl` |
| `divided` | `bool` | `false` | Whether to show dividers between groups |

### MenuItem

Individual menu item.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string\|null` | `null` | Link URL (renders as `<a>` tag) |
| `icon` | `string\|null` | `null` | Icon name |
| `disabled` | `bool` | `false` | Whether the item is disabled |
| `active` | `bool` | `false` | Whether the item is active |
| `danger` | `bool` | `false` | Whether to use danger styling |

### MenuDivider

Horizontal divider between menu items.

### MenuHeader

Header for menu sections.

## Slots

| Slot | Description |
|------|-------------|
| `trigger` | The trigger element (button, link, etc.) |
| Default slot | Menu content (items, dividers, headers) |

### Style Props

Menu and related components support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Simple Menu

```blade
<x-menu>
    <x-slot:trigger>
        <x-button>Actions</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Edit</x-menu-item>
        <x-menu-item href="#">Duplicate</x-menu-item>
        <x-menu-item href="#">Archive</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#" :danger="true">Delete</x-menu-item>
    </ul>
</x-menu>
```

## Menu with Icons

```blade
<x-menu>
    <x-slot:trigger>
        <x-icon-button icon="heroicons:ellipsis-vertical" />
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#" icon="heroicons:pencil">Edit</x-menu-item>
        <x-menu-item href="#" icon="heroicons:document-duplicate">Duplicate</x-menu-item>
        <x-menu-item href="#" icon="heroicons:archive-box">Archive</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#" icon="heroicons:trash" :danger="true">Delete</x-menu-item>
    </ul>
</x-menu>
```

## Menu with Header

```blade
<x-menu>
    <x-slot:trigger>
        <x-button>User Menu</x-button>
    </x-slot:trigger>
    
    <x-menu-header>
        <div class="font-semibold">John Doe</div>
        <div class="text-sm text-gray-500 truncate">john@example.com</div>
    </x-menu-header>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Dashboard</x-menu-item>
        <x-menu-item href="#">Settings</x-menu-item>
        <x-menu-item href="#">Earnings</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#">Sign out</x-menu-item>
    </ul>
</x-menu>
```

## Menu with Divided Groups

```blade
<x-menu :divided="true">
    <x-slot:trigger>
        <x-button>Options</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Profile</x-menu-item>
        <x-menu-item href="#">Settings</x-menu-item>
    </ul>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Team</x-menu-item>
        <x-menu-item href="#">Billing</x-menu-item>
    </ul>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Sign out</x-menu-item>
    </ul>
</x-menu>
```

## Placement

```blade
{{-- Bottom (default) --}}
<x-menu placement="bottom">
    <x-slot:trigger>
        <x-button>Bottom</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>

{{-- Top --}}
<x-menu placement="top">
    <x-slot:trigger>
        <x-button>Top</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>

{{-- Right --}}
<x-menu placement="right">
    <x-slot:trigger>
        <x-button>Right</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>

{{-- Left --}}
<x-menu placement="left">
    <x-slot:trigger>
        <x-button>Left</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>
```

## Trigger Types

### Click (Default)

```blade
<x-menu trigger="click">
    <x-slot:trigger>
        <x-button>Click Me</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>
```

### Hover

```blade
<x-menu trigger="hover">
    <x-slot:trigger>
        <x-button>Hover Me</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>
```

### Hover with Custom Delay

```blade
<x-menu trigger="hover" :delay="500">
    <x-slot:trigger>
        <x-button>Hover Me (500ms delay)</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>
```

## Width Sizes

```blade
{{-- Extra Small (10rem) --}}
<x-menu width="xs">
    <x-slot:trigger>
        <x-button size="sm">XS</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>

{{-- Small (11rem - default) --}}
<x-menu width="sm">
    <x-slot:trigger>
        <x-button size="sm">SM</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>

{{-- Medium (14rem) --}}
<x-menu width="md">
    <x-slot:trigger>
        <x-button size="sm">MD</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Item 1</x-menu-item>
        <x-menu-item href="#">Item 2</x-menu-item>
    </ul>
</x-menu>
```

## Item States

### Active Item

```blade
<x-menu>
    <x-slot:trigger>
        <x-button>Menu</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#" :active="true">Dashboard</x-menu-item>
        <x-menu-item href="#">Settings</x-menu-item>
        <x-menu-item href="#">Profile</x-menu-item>
    </ul>
</x-menu>
```

### Disabled Item

```blade
<x-menu>
    <x-slot:trigger>
        <x-button>Menu</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Edit</x-menu-item>
        <x-menu-item href="#" :disabled="true">Delete (No permission)</x-menu-item>
    </ul>
</x-menu>
```

### Danger Item

```blade
<x-menu>
    <x-slot:trigger>
        <x-button>Actions</x-button>
    </x-slot:trigger>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#">Edit</x-menu-item>
        <x-menu-item href="#">Archive</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#" :danger="true">Delete</x-menu-item>
    </ul>
</x-menu>
```

## Common Patterns

### User Profile Menu

```blade
<x-menu placement="bottom-end">
    <x-slot:trigger>
        <x-avatar 
            src="https://i.pravatar.cc/150?img=1" 
            alt="User"
            size="md"
            class="cursor-pointer"
        />
    </x-slot:trigger>
    
    <x-menu-header>
        <div class="font-semibold">John Doe</div>
        <div class="text-sm text-gray-500 truncate">john@example.com</div>
    </x-menu-header>
    
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#" icon="heroicons:user">Profile</x-menu-item>
        <x-menu-item href="#" icon="heroicons:cog-6-tooth">Settings</x-menu-item>
        <x-menu-item href="#" icon="heroicons:credit-card">Billing</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#" icon="heroicons:arrow-right-on-rectangle">Sign out</x-menu-item>
    </ul>
</x-menu>
```

### Notification Menu

```blade
<x-menu placement="bottom-end" width="lg">
    <x-slot:trigger>
        <x-icon-button icon="heroicons:bell" />
    </x-slot:trigger>

    <x-menu-header>
        <div class="flex items-center justify-between">
            <x-text weight="semibold">Notifications</x-text>
            <x-badge color="primary">3</x-badge>
        </div>
    </x-menu-header>

    <ul class="py-2">
        <li class="px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
            <div class="flex items-start gap-3">
                <x-avatar src="https://i.pravatar.cc/150?img=2" size="sm" />
                <div class="flex-1 min-w-0">
                    <x-text size="sm" weight="medium" class="text-gray-900 dark:text-white">
                        New message from Sarah
                    </x-text>
                    <x-text size="xs" color="gray">2 minutes ago</x-text>
                </div>
            </div>
        </li>
    </ul>

    <div class="py-2 border-t border-gray-200 dark:border-gray-600">
        <x-menu-item href="#">View all notifications</x-menu-item>
    </div>
</x-menu>
```

### Context Menu

```blade
<x-menu placement="bottom-start">
    <x-slot:trigger>
        <x-icon-button icon="heroicons:ellipsis-horizontal" size="sm" />
    </x-slot:trigger>

    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        <x-menu-item href="#" icon="heroicons:eye">View</x-menu-item>
        <x-menu-item href="#" icon="heroicons:pencil">Edit</x-menu-item>
        <x-menu-item href="#" icon="heroicons:document-duplicate">Duplicate</x-menu-item>
        <x-menu-item href="#" icon="heroicons:share">Share</x-menu-item>
        <x-menu-divider />
        <x-menu-item href="#" icon="heroicons:archive-box">Archive</x-menu-item>
        <x-menu-item href="#" icon="heroicons:trash" :danger="true">Delete</x-menu-item>
    </ul>
</x-menu>
```

### Table Row Actions

```blade
<x-table>
    <x-table-body>
        @foreach($users as $user)
        <x-table-row>
            <x-table-cell>{{ $user->name }}</x-table-cell>
            <x-table-cell>
                <x-menu placement="bottom-end">
                    <x-slot:trigger>
                        <x-icon-button icon="heroicons:ellipsis-vertical" size="sm" />
                    </x-slot:trigger>

                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <x-menu-item href="#" icon="heroicons:eye">View</x-menu-item>
                        <x-menu-item href="#" icon="heroicons:pencil">Edit</x-menu-item>
                        <x-menu-divider />
                        <x-menu-item href="#" icon="heroicons:trash" :danger="true">Delete</x-menu-item>
                    </ul>
                </x-menu>
            </x-table-cell>
        </x-table-row>
        @endforeach
    </x-table-body>
</x-table>
```

## Livewire Integration

```blade
<div>
    <x-menu>
        <x-slot:trigger>
            <x-button wire:loading.attr="disabled">Actions</x-button>
        </x-slot:trigger>

        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <x-menu-item wire:click="edit({{ $item->id }})" icon="heroicons:pencil">Edit</x-menu-item>
            <x-menu-item wire:click="delete({{ $item->id }})" icon="heroicons:trash" :danger="true">Delete</x-menu-item>
        </ul>
    </x-menu>
</div>
```

## JavaScript API

```javascript
import { Dropdown } from 'flowbite';

const targetEl = document.getElementById('menu-content');
const triggerEl = document.getElementById('menu-trigger');

const options = {
    placement: 'bottom',
    triggerType: 'click',
    offsetSkidding: 0,
    offsetDistance: 10,
    delay: 300,
};

const dropdown = new Dropdown(targetEl, triggerEl, options);
dropdown.show();
dropdown.hide();
dropdown.toggle();
```

## Accessibility

The Menu component:
- Uses semantic HTML with proper list structure
- Supports keyboard navigation (Arrow keys, Enter, Escape, Tab)
- Works with screen readers
- Provides proper ARIA attributes (`role="menu"`, `role="menuitem"`)
- Maintains focus management
- Announces menu state to screen readers
- Supports both click and hover triggers
- Uses Popper.js for intelligent positioning
- Closes on outside click or Escape key
- Supports `aria-label` for menu identification

## Notes

- Menus require Flowbite JavaScript for positioning and interaction
- Use `trigger="click"` for better accessibility and mobile support
- Keep menu items concise and action-oriented
- Group related items together with dividers
- Place destructive actions at the bottom with danger styling
