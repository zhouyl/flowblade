# Tooltip

Tooltip component for displaying additional information on hover or click.

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
<x-tooltip content="This is a tooltip">
    <x-button>Hover me</x-button>
</x-tooltip>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `content` | `string` | `''` | Tooltip content text |
| `placement` | `string` | `'top'` | Placement: `top`, `right`, `bottom`, `left` |
| `trigger` | `string` | `'hover'` | Trigger type: `hover`, `click` |
| `style` | `string` | `'dark'` | Style: `dark`, `light` |
| `arrow` | `bool` | `true` | Whether to show arrow |
| `animation` | `string` | `'300'` | Animation duration: `100`, `150`, `200`, `300`, `500`, `700`, `1000` |

## Placement

```blade
{{-- Top (default) --}}
<x-tooltip content="Tooltip on top" placement="top">
    <x-button>Top</x-button>
</x-tooltip>

{{-- Right --}}
<x-tooltip content="Tooltip on right" placement="right">
    <x-button>Right</x-button>
</x-tooltip>

{{-- Bottom --}}
<x-tooltip content="Tooltip on bottom" placement="bottom">
    <x-button>Bottom</x-button>
</x-tooltip>

{{-- Left --}}
<x-tooltip content="Tooltip on left" placement="left">
    <x-button>Left</x-button>
</x-tooltip>
```

## Styles

### Dark Style (Default)

```blade
<x-tooltip content="Dark tooltip" style="dark">
    <x-button>Dark Tooltip</x-button>
</x-tooltip>
```

### Light Style

```blade
<x-tooltip content="Light tooltip" style="light">
    <x-button>Light Tooltip</x-button>
</x-tooltip>
```

## Trigger Types

### Hover (Default)

```blade
<x-tooltip content="Shown on hover" trigger="hover">
    <x-button>Hover me</x-button>
</x-tooltip>
```

### Click

```blade
<x-tooltip content="Shown on click" trigger="click">
    <x-button>Click me</x-button>
</x-tooltip>
```

## Without Arrow

```blade
<x-tooltip content="No arrow tooltip" :arrow="false">
    <x-button>No Arrow</x-button>
</x-tooltip>
```

## Animation Duration

```blade
{{-- Fast animation --}}
<x-tooltip content="Fast animation" animation="100">
    <x-button>Fast</x-button>
</x-tooltip>

{{-- Default animation --}}
<x-tooltip content="Default animation" animation="300">
    <x-button>Default</x-button>
</x-tooltip>

{{-- Slow animation --}}
<x-tooltip content="Slow animation" animation="700">
    <x-button>Slow</x-button>
</x-tooltip>
```

## Common Patterns

### Icon with Tooltip

```blade
<x-tooltip content="Edit this item">
    <x-icon-button icon="heroicons:pencil" size="sm" />
</x-tooltip>

<x-tooltip content="Delete this item">
    <x-icon-button icon="heroicons:trash" size="sm" color="danger" />
</x-tooltip>

<x-tooltip content="View details">
    <x-icon-button icon="heroicons:eye" size="sm" color="info" />
</x-tooltip>
```

### Text with Tooltip

```blade
<x-text>
    This is a paragraph with 
    <x-tooltip content="Additional information here">
        <span class="underline decoration-dotted cursor-help">helpful text</span>
    </x-tooltip>
    that provides more context.
</x-text>
```

### Badge with Tooltip

```blade
<x-tooltip content="This user is currently online">
    <x-badge color="success">Online</x-badge>
</x-tooltip>

<x-tooltip content="This feature is in beta">
    <x-badge color="warning">Beta</x-badge>
</x-tooltip>
```

### Avatar with Tooltip

```blade
<x-tooltip content="John Doe - Software Engineer">
    <x-avatar 
        src="https://i.pravatar.cc/150?img=1" 
        alt="John Doe"
        size="md"
    />
</x-tooltip>
```

### Link with Tooltip

```blade
<x-tooltip content="Visit our documentation">
    <x-link href="/docs">Learn more</x-link>
</x-tooltip>
```

### Form Field Help

```blade
<x-field label="Password">
    <x-input type="password" name="password" />
    
    <x-tooltip content="Password must be at least 8 characters long" placement="right">
        <x-icon name="heroicons:information-circle" class="w-5 h-5 text-gray-400 cursor-help" />
    </x-tooltip>
</x-field>
```

### Table Actions

```blade
<x-table>
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
            <x-table-head>Actions</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        @foreach($users as $user)
        <x-table-row>
            <x-table-cell>{{ $user->name }}</x-table-cell>
            <x-table-cell>{{ $user->email }}</x-table-cell>
            <x-table-cell>
                <div class="flex gap-2">
                    <x-tooltip content="Edit user">
                        <x-icon-button 
                            icon="heroicons:pencil" 
                            size="sm"
                            wire:click="edit({{ $user->id }})"
                        />
                    </x-tooltip>
                    
                    <x-tooltip content="Delete user">
                        <x-icon-button 
                            icon="heroicons:trash" 
                            size="sm" 
                            color="danger"
                            wire:click="delete({{ $user->id }})"
                        />
                    </x-tooltip>
                </div>
            </x-table-cell>
        </x-table-row>
        @endforeach
    </x-table-body>
</x-table>
```

### Status Indicator

```blade
<div class="flex items-center gap-2">
    <x-tooltip content="Server is running normally">
        <x-status color="success" variant="dot" />
    </x-tooltip>
    <x-text>Server Status</x-text>
</div>
```

### Disabled Button

```blade
<x-tooltip content="You don't have permission to perform this action">
    <x-button :disabled="true">
        Restricted Action
    </x-button>
</x-tooltip>
```

### Truncated Text

```blade
<x-tooltip content="{{ $longText }}">
    <x-text class="truncate max-w-xs">
        {{ $longText }}
    </x-text>
</x-tooltip>
```

### Card Header Actions

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Project Details</x-heading>
            
            <div class="flex gap-2">
                <x-tooltip content="Refresh data">
                    <x-icon-button icon="heroicons:arrow-path" size="sm" />
                </x-tooltip>
                
                <x-tooltip content="Export to PDF">
                    <x-icon-button icon="heroicons:arrow-down-tray" size="sm" />
                </x-tooltip>
                
                <x-tooltip content="Settings">
                    <x-icon-button icon="heroicons:cog-6-tooth" size="sm" />
                </x-tooltip>
            </div>
        </div>
    </x-card-header>
    
    <x-card-body>
        {{-- Card content --}}
    </x-card-body>
</x-card>
```

### Navigation Items

```blade
<nav class="flex gap-4">
    <x-tooltip content="Go to dashboard">
        <x-link href="/dashboard">
            <x-icon name="heroicons:home" class="w-6 h-6" />
        </x-link>
    </x-tooltip>
    
    <x-tooltip content="View notifications">
        <x-link href="/notifications">
            <x-icon name="heroicons:bell" class="w-6 h-6" />
        </x-link>
    </x-tooltip>
    
    <x-tooltip content="User settings">
        <x-link href="/settings">
            <x-icon name="heroicons:cog-6-tooth" class="w-6 h-6" />
        </x-link>
    </x-tooltip>
</nav>
```

### Progress Indicator

```blade
<div class="space-y-2">
    <div class="flex items-center justify-between">
        <x-text size="sm" weight="medium">Upload Progress</x-text>
        
        <x-tooltip content="75% complete - 3 minutes remaining">
            <x-text size="sm" color="gray">75%</x-text>
        </x-tooltip>
    </div>
    
    <x-progress :value="75" />
</div>
```

### Stat Card

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center justify-between">
            <x-stat 
                label="Total Revenue" 
                value="$45,231" 
                trend="up" 
                change="+12.5%"
            />
            
            <x-tooltip content="Revenue increased by 12.5% compared to last month">
                <x-icon name="heroicons:information-circle" class="w-5 h-5 text-gray-400" />
            </x-tooltip>
        </div>
    </x-card-body>
</x-card>
```

### File Upload

```blade
<x-field label="Upload Document">
    <div class="flex items-center gap-2">
        <x-file-upload name="document" />
        
        <x-tooltip content="Accepted formats: PDF, DOC, DOCX. Max size: 10MB">
            <x-icon name="heroicons:question-mark-circle" class="w-5 h-5 text-gray-400" />
        </x-tooltip>
    </div>
</x-field>
```

## Livewire Integration

```blade
<div>
    <x-tooltip content="Click to load more data">
        <x-button wire:click="loadMore">
            Load More
        </x-button>
    </x-tooltip>
    
    @if($loading)
    <x-spinner size="sm" class="ml-2" />
    @endif
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ count: 0 }">
    <x-tooltip :content="'Current count: ' + count" x-bind:content="'Current count: ' + count">
        <x-button @click="count++">
            Increment
        </x-button>
    </x-tooltip>
    
    <x-text size="sm" color="gray" class="mt-2">
        Count: <span x-text="count"></span>
    </x-text>
</div>
```

## JavaScript API

If you need more control, you can use the Flowbite JavaScript API:

```javascript
import { Tooltip } from 'flowbite';

// Get elements
const targetEl = document.getElementById('tooltip-content');
const triggerEl = document.getElementById('tooltip-trigger');

// Options
const options = {
    placement: 'top',
    triggerType: 'hover',
    onHide: () => {
        console.log('tooltip hidden');
    },
    onShow: () => {
        console.log('tooltip shown');
    },
};

// Create tooltip instance
const tooltip = new Tooltip(targetEl, triggerEl, options);

// Methods
tooltip.show();
tooltip.hide();
tooltip.toggle();
```

## Accessibility

The Tooltip component:
- Uses semantic HTML with `role="tooltip"`
- Supports keyboard navigation
- Works with screen readers
- Provides proper ARIA attributes
- Maintains focus management
- Supports both hover and click triggers
- Uses Popper.js for intelligent positioning
- Respects user motion preferences
- Provides sufficient color contrast
- Includes arrow for visual direction

## Notes

- Tooltips require Flowbite JavaScript for positioning and interaction
- The component uses Popper.js (included in Flowbite) for smart positioning
- Tooltips automatically adjust position if they would overflow the viewport
- Keep tooltip content concise - use Popover for longer content
- Avoid putting interactive elements inside tooltips
- Consider using `trigger="click"` for mobile devices

