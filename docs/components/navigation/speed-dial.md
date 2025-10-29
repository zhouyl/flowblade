# SpeedDial Component

Floating action button group with expand/collapse animation for quick access to common actions. SpeedDial provides a flexible way to create floating action button groups.

## Basic Usage

```blade
<x-speed-dial>
    <x-speed-dial-item icon="heroicons:share" tooltip="Share" />
    <x-speed-dial-item icon="heroicons:printer" tooltip="Print" />
    <x-speed-dial-item icon="heroicons:download" tooltip="Download" />
    <x-speed-dial-item icon="heroicons:document-duplicate" tooltip="Copy" />
</x-speed-dial>
```

## Props

### SpeedDial Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `position` | string | `'bottom-right'` | Position: `bottom-right`, `bottom-left`, `top-right`, `top-left` |
| `trigger` | string | `'click'` | Trigger mode: `click`, `hover` |
| `tooltip` | string | `'left'` | Tooltip position: `left`, `right`, `top`, `bottom` |
| `id` | string | auto-generated | Unique identifier |

### SpeedDialItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `icon` | string | `''` | Icon name (Iconify format) |
| `tooltip` | string | `''` | Tooltip text |
| `href` | string | `'#'` | Link URL |

### Style Props

SpeedDial and SpeedDialItem support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Default Position (Bottom Right)

```blade
<x-speed-dial>
    <x-speed-dial-item icon="heroicons:share" tooltip="Share" href="/share" />
    <x-speed-dial-item icon="heroicons:printer" tooltip="Print" href="/print" />
    <x-speed-dial-item icon="heroicons:download" tooltip="Download" href="/download" />
</x-speed-dial>
```

### Bottom Left Position

```blade
<x-speed-dial position="bottom-left">
    <x-speed-dial-item icon="heroicons:chat-bubble-left" tooltip="Chat" />
    <x-speed-dial-item icon="heroicons:phone" tooltip="Call" />
    <x-speed-dial-item icon="heroicons:envelope" tooltip="Email" />
</x-speed-dial>
```

### Top Right Position

```blade
<x-speed-dial position="top-right">
    <x-speed-dial-item icon="heroicons:plus" tooltip="Add New" />
    <x-speed-dial-item icon="heroicons:pencil" tooltip="Edit" />
    <x-speed-dial-item icon="heroicons:trash" tooltip="Delete" />
</x-speed-dial>
```

### Top Left Position

```blade
<x-speed-dial position="top-left">
    <x-speed-dial-item icon="heroicons:home" tooltip="Home" />
    <x-speed-dial-item icon="heroicons:cog" tooltip="Settings" />
    <x-speed-dial-item icon="heroicons:user" tooltip="Profile" />
</x-speed-dial>
```

### Hover Trigger

```blade
<x-speed-dial trigger="hover">
    <x-speed-dial-item icon="heroicons:share" tooltip="Share" />
    <x-speed-dial-item icon="heroicons:printer" tooltip="Print" />
    <x-speed-dial-item icon="heroicons:download" tooltip="Download" />
</x-speed-dial>
```

### Right Tooltip Position

```blade
<x-speed-dial position="bottom-left" tooltip="right">
    <x-speed-dial-item icon="heroicons:share" tooltip="Share" />
    <x-speed-dial-item icon="heroicons:printer" tooltip="Print" />
    <x-speed-dial-item icon="heroicons:download" tooltip="Download" />
</x-speed-dial>
```

### Social Media Actions

```blade
<x-speed-dial position="bottom-right">
    <x-speed-dial-item icon="mdi:facebook" tooltip="Share on Facebook" href="#" />
    <x-speed-dial-item icon="mdi:twitter" tooltip="Share on Twitter" href="#" />
    <x-speed-dial-item icon="mdi:linkedin" tooltip="Share on LinkedIn" href="#" />
    <x-speed-dial-item icon="mdi:instagram" tooltip="Share on Instagram" href="#" />
</x-speed-dial>
```

### Document Actions

```blade
<x-speed-dial>
    <x-speed-dial-item icon="heroicons:document-plus" tooltip="New Document" href="/documents/new" />
    <x-speed-dial-item icon="heroicons:folder-plus" tooltip="New Folder" href="/folders/new" />
    <x-speed-dial-item icon="heroicons:arrow-up-tray" tooltip="Upload" href="/upload" />
    <x-speed-dial-item icon="heroicons:cloud-arrow-down" tooltip="Import" href="/import" />
</x-speed-dial>
```

### Communication Actions

```blade
<x-speed-dial position="bottom-left" trigger="hover">
    <x-speed-dial-item icon="heroicons:chat-bubble-left-right" tooltip="Start Chat" />
    <x-speed-dial-item icon="heroicons:video-camera" tooltip="Video Call" />
    <x-speed-dial-item icon="heroicons:phone" tooltip="Voice Call" />
    <x-speed-dial-item icon="heroicons:envelope" tooltip="Send Email" />
</x-speed-dial>
```

### E-commerce Actions

```blade
<x-speed-dial>
    <x-speed-dial-item icon="heroicons:shopping-cart" tooltip="Add to Cart" />
    <x-speed-dial-item icon="heroicons:heart" tooltip="Add to Wishlist" />
    <x-speed-dial-item icon="heroicons:scale" tooltip="Compare" />
    <x-speed-dial-item icon="heroicons:share" tooltip="Share Product" />
</x-speed-dial>
```

### Admin Actions

```blade
<x-speed-dial position="top-right">
    <x-speed-dial-item icon="heroicons:user-plus" tooltip="Add User" href="/admin/users/create" />
    <x-speed-dial-item icon="heroicons:document-plus" tooltip="Add Post" href="/admin/posts/create" />
    <x-speed-dial-item icon="heroicons:photo" tooltip="Add Media" href="/admin/media/upload" />
    <x-speed-dial-item icon="heroicons:cog" tooltip="Settings" href="/admin/settings" />
</x-speed-dial>
```

### Custom Content

```blade
<x-speed-dial>
    <x-speed-dial-item tooltip="Custom Action">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
        </svg>
    </x-speed-dial-item>
    <x-speed-dial-item icon="heroicons:pencil" tooltip="Edit" />
    <x-speed-dial-item icon="heroicons:trash" tooltip="Delete" />
</x-speed-dial>
```

### With Click Handlers

```blade
<x-speed-dial>
    <x-speed-dial-item 
        icon="heroicons:share" 
        tooltip="Share" 
        href="#"
        onclick="event.preventDefault(); shareContent();"
    />
    <x-speed-dial-item 
        icon="heroicons:printer" 
        tooltip="Print" 
        href="#"
        onclick="event.preventDefault(); window.print();"
    />
    <x-speed-dial-item 
        icon="heroicons:download" 
        tooltip="Download" 
        href="#"
        onclick="event.preventDefault(); downloadFile();"
    />
</x-speed-dial>
```

### Multiple Speed Dials

```blade
<!-- Bottom right for main actions -->
<x-speed-dial position="bottom-right">
    <x-speed-dial-item icon="heroicons:plus" tooltip="Add" />
    <x-speed-dial-item icon="heroicons:pencil" tooltip="Edit" />
    <x-speed-dial-item icon="heroicons:trash" tooltip="Delete" />
</x-speed-dial>

<!-- Bottom left for communication -->
<x-speed-dial position="bottom-left">
    <x-speed-dial-item icon="heroicons:chat-bubble-left" tooltip="Chat" />
    <x-speed-dial-item icon="heroicons:phone" tooltip="Call" />
    <x-speed-dial-item icon="heroicons:envelope" tooltip="Email" />
</x-speed-dial>
```

### Mobile-Optimized

```blade
<x-speed-dial position="bottom-right" trigger="click">
    <x-speed-dial-item icon="heroicons:camera" tooltip="Take Photo" />
    <x-speed-dial-item icon="heroicons:photo" tooltip="Choose from Gallery" />
    <x-speed-dial-item icon="heroicons:document" tooltip="Attach File" />
    <x-speed-dial-item icon="heroicons:microphone" tooltip="Record Audio" />
</x-speed-dial>
```

### With Alpine.js

```blade
<div x-data="{ open: false }">
    <x-speed-dial>
        <x-speed-dial-item 
            icon="heroicons:share" 
            tooltip="Share" 
            @click="open = true"
        />
        <x-speed-dial-item icon="heroicons:printer" tooltip="Print" />
        <x-speed-dial-item icon="heroicons:download" tooltip="Download" />
    </x-speed-dial>
    
    <!-- Share modal -->
    <div x-show="open" @click.away="open = false">
        <!-- Modal content -->
    </div>
</div>
```

## Styling Tips

### Custom Button Color

```blade
<x-speed-dial>
    <x-speed-dial-item 
        icon="heroicons:share" 
        tooltip="Share" 
        class="bg-green-500 hover:bg-green-600 text-white"
    />
</x-speed-dial>
```

### Larger Buttons

```blade
<x-speed-dial>
    <x-speed-dial-item 
        icon="heroicons:share" 
        tooltip="Share" 
        class="w-16 h-16"
    />
</x-speed-dial>
```

## Accessibility

The SpeedDial component includes proper ARIA attributes:

```blade
<x-speed-dial>
    <x-speed-dial-item icon="heroicons:share" tooltip="Share content" />
</x-speed-dial>
```

- Uses `aria-expanded` to indicate menu state
- Uses `aria-controls` to link button to menu
- Includes `sr-only` text for screen readers
- Keyboard accessible (Tab, Enter, Escape)

## Browser Support

The SpeedDial component uses:
- CSS transitions and transforms
- Flexbox
- Fixed positioning
- JavaScript for interaction

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Button](../buttons/button.md) - Button component
- [IconButton](../buttons/icon-button.md) - Icon button
- [Menu](../overlay/menu.md) - Dropdown menu
- [Tooltip](../overlay/tooltip.md) - Tooltip component

