# Popover

Popover component for displaying rich content in a popup box relative to a trigger element. Popover provides a flexible way to display popovers with support for various placements and widths.

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
<x-popover title="Popover Title" content="This is the popover content.">
    <x-slot:trigger>
        <x-button>Show Popover</x-button>
    </x-slot:trigger>
</x-popover>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string\|null` | `null` | Popover title (optional) |
| `content` | `string\|null` | `null` | Popover content text (optional, use slot for rich content) |
| `placement` | `string` | `'top'` | Placement: `top`, `right`, `bottom`, `left` |
| `trigger` | `string` | `'hover'` | Trigger type: `hover`, `click` |
| `arrow` | `bool` | `true` | Whether to show arrow |
| `animation` | `string\|null` | `'300'` | Animation duration: `100`, `150`, `200`, `300`, `500`, `700`, `1000` |
| `offset` | `int\|null` | `null` | Offset distance from trigger element |
| `width` | `string\|null` | `'md'` | Width: `sm`, `md`, `lg`, `xl`, `2xl` |

### Style Props

Popover supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Slots

| Slot | Description |
|------|-------------|
| `trigger` | The trigger element (button, link, etc.) |
| `title` | Custom title content (alternative to `title` prop) |
| `content` | Custom content (alternative to `content` prop and default slot) |
| Default slot | Popover content (when not using `content` prop or `content` slot) |

## Simple Popover

```blade
<x-popover title="Information" content="This is some helpful information.">
    <x-slot:trigger>
        <x-button>Info</x-button>
    </x-slot:trigger>
</x-popover>
```

## Rich Content Popover

```blade
<x-popover>
    <x-slot:trigger>
        <x-button>User Profile</x-button>
    </x-slot:trigger>
    
    <x-slot:title>
        User Information
    </x-slot:title>
    
    <x-slot:content>
        <div class="flex items-center gap-3 mb-3">
            <x-avatar 
                src="https://i.pravatar.cc/150?img=1" 
                alt="John Doe"
                size="md"
            />
            <div>
                <x-text weight="semibold" class="text-gray-900 dark:text-white">John Doe</x-text>
                <x-text size="sm" color="gray">@johndoe</x-text>
            </div>
        </div>
        
        <x-text size="sm" class="mb-3">
            Software Engineer at Acme Corp
        </x-text>
        
        <x-button size="xs" class="w-full">
            View Profile
        </x-button>
    </x-slot:content>
</x-popover>
```

## Placement

```blade
{{-- Top (default) --}}
<x-popover title="Top Popover" content="Content here" placement="top">
    <x-slot:trigger>
        <x-button>Top</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Right --}}
<x-popover title="Right Popover" content="Content here" placement="right">
    <x-slot:trigger>
        <x-button>Right</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Bottom --}}
<x-popover title="Bottom Popover" content="Content here" placement="bottom">
    <x-slot:trigger>
        <x-button>Bottom</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Left --}}
<x-popover title="Left Popover" content="Content here" placement="left">
    <x-slot:trigger>
        <x-button>Left</x-button>
    </x-slot:trigger>
</x-popover>
```

## Trigger Types

### Hover (Default)

```blade
<x-popover title="Hover Popover" content="Shown on hover" trigger="hover">
    <x-slot:trigger>
        <x-button>Hover Me</x-button>
    </x-slot:trigger>
</x-popover>
```

### Click

```blade
<x-popover title="Click Popover" content="Shown on click" trigger="click">
    <x-slot:trigger>
        <x-button>Click Me</x-button>
    </x-slot:trigger>
</x-popover>
```

## Width Sizes

```blade
{{-- Small (16rem) --}}
<x-popover title="Small" content="Small popover" width="sm">
    <x-slot:trigger>
        <x-button size="sm">Small</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Medium (20rem - default) --}}
<x-popover title="Medium" content="Medium popover" width="md">
    <x-slot:trigger>
        <x-button size="sm">Medium</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Large (24rem) --}}
<x-popover title="Large" content="Large popover" width="lg">
    <x-slot:trigger>
        <x-button size="sm">Large</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Extra Large (28rem) --}}
<x-popover title="Extra Large" content="Extra large popover" width="xl">
    <x-slot:trigger>
        <x-button size="sm">XL</x-button>
    </x-slot:trigger>
</x-popover>

{{-- 2X Large (32rem) --}}
<x-popover title="2X Large" content="2X large popover" width="2xl">
    <x-slot:trigger>
        <x-button size="sm">2XL</x-button>
    </x-slot:trigger>
</x-popover>
```

## Without Arrow

```blade
<x-popover title="No Arrow" content="Popover without arrow" :arrow="false">
    <x-slot:trigger>
        <x-button>No Arrow</x-button>
    </x-slot:trigger>
</x-popover>
```

## Custom Offset

```blade
<x-popover title="Custom Offset" content="30px offset from trigger" :offset="30">
    <x-slot:trigger>
        <x-button>Custom Offset</x-button>
    </x-slot:trigger>
</x-popover>
```

## Animation Duration

```blade
{{-- Fast animation --}}
<x-popover title="Fast" content="Fast animation" animation="100">
    <x-slot:trigger>
        <x-button size="sm">Fast</x-button>
    </x-slot:trigger>
</x-popover>

{{-- Slow animation --}}
<x-popover title="Slow" content="Slow animation" animation="700">
    <x-slot:trigger>
        <x-button size="sm">Slow</x-button>
    </x-slot:trigger>
</x-popover>
```

## Common Patterns

### User Profile Card

```blade
<x-popover width="lg" trigger="click">
    <x-slot:trigger>
        <x-avatar 
            src="https://i.pravatar.cc/150?img=1" 
            alt="John Doe"
            size="md"
            class="cursor-pointer"
        />
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="flex items-center justify-between mb-3">
            <x-avatar 
                src="https://i.pravatar.cc/150?img=1" 
                alt="John Doe"
                size="lg"
            />
            <x-button size="xs">Follow</x-button>
        </div>
        
        <x-text weight="semibold" class="text-gray-900 dark:text-white">
            John Doe
        </x-text>
        <x-text size="sm" color="gray" class="mb-3">
            @johndoe
        </x-text>
        
        <x-text size="sm" class="mb-4">
            Open-source contributor. Building amazing things.
        </x-text>
        
        <div class="flex gap-4 text-sm">
            <div>
                <x-text weight="semibold" class="text-gray-900 dark:text-white">799</x-text>
                <x-text size="sm" color="gray">Following</x-text>
            </div>
            <div>
                <x-text weight="semibold" class="text-gray-900 dark:text-white">3,758</x-text>
                <x-text size="sm" color="gray">Followers</x-text>
            </div>
        </div>
    </x-slot:content>
</x-popover>
```

### Company Profile

```blade
<x-popover width="xl" trigger="click">
    <x-slot:trigger>
        <x-link href="#">Acme Corp</x-link>
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="flex gap-3">
            <div class="shrink-0">
                <div class="p-2 bg-gray-100 rounded-lg dark:bg-gray-700">
                    <x-icon name="heroicons:building-office" class="w-8 h-8" />
                </div>
            </div>
            
            <div class="flex-1">
                <x-text weight="semibold" class="text-gray-900 dark:text-white mb-1">
                    Acme Corporation
                </x-text>
                <x-text size="sm" color="gray" class="mb-3">
                    Tech company
                </x-text>
                
                <x-text size="sm" class="mb-4">
                    Leading provider of innovative software solutions.
                </x-text>
                
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm">
                        <x-icon name="heroicons:globe-alt" class="w-4 h-4 text-gray-400" />
                        <x-link href="#" size="sm">https://acme.com</x-link>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <x-icon name="heroicons:heart" class="w-4 h-4 text-gray-400" />
                        <x-text size="sm">4,567,346 people like this</x-text>
                    </div>
                </div>
                
                <x-button size="sm" class="w-full">
                    Like Page
                </x-button>
            </div>
        </div>
    </x-slot:content>
</x-popover>
```

### Image Preview

```blade
<x-popover width="lg" trigger="hover" placement="right">
    <x-slot:trigger>
        <x-avatar 
            src="https://picsum.photos/200/300" 
            alt="Preview"
            size="sm"
        />
    </x-slot:trigger>
    
    <x-slot:content>
        <img 
            src="https://picsum.photos/400/600" 
            alt="Full size preview"
            class="w-full rounded-lg"
        />
    </x-slot:content>
</x-popover>
```

### Help Text

```blade
<x-field label="Email Address">
    <x-input-group>
        <x-input type="email" name="email" placeholder="you@example.com" />
        
        <x-input-element placement="right">
            <x-popover 
                title="Email Format" 
                content="Please enter a valid email address in the format: user@domain.com"
                width="sm"
            >
                <x-slot:trigger>
                    <x-icon name="heroicons:question-mark-circle" class="w-5 h-5 text-gray-400 cursor-help" />
                </x-slot:trigger>
            </x-popover>
        </x-input-element>
    </x-input-group>
</x-field>
```

### Password Strength

```blade
<x-field label="Password">
    <x-input-group>
        <x-input type="password" name="password" />
        
        <x-input-element placement="right">
            <x-popover width="sm" trigger="click">
                <x-slot:trigger>
                    <x-icon name="heroicons:information-circle" class="w-5 h-5 text-gray-400 cursor-pointer" />
                </x-slot:trigger>
                
                <x-slot:title>
                    Password Requirements
                </x-slot:title>
                
                <x-slot:content>
                    <ul class="space-y-1 text-sm">
                        <li class="flex items-center gap-2">
                            <x-icon name="heroicons:check-circle" class="w-4 h-4 text-green-500" />
                            At least 8 characters
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icon name="heroicons:check-circle" class="w-4 h-4 text-green-500" />
                            One uppercase letter
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icon name="heroicons:x-circle" class="w-4 h-4 text-gray-400" />
                            One number
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icon name="heroicons:x-circle" class="w-4 h-4 text-gray-400" />
                            One special character
                        </li>
                    </ul>
                </x-slot:content>
            </x-popover>
        </x-input-element>
    </x-input-group>
</x-field>
```

### Progress Indicator

```blade
<x-popover width="md" trigger="hover">
    <x-slot:trigger>
        <x-progress :value="75" />
    </x-slot:trigger>
    
    <x-slot:title>
        Upload Progress
    </x-slot:title>
    
    <x-slot:content>
        <div class="space-y-2">
            <div class="flex justify-between text-sm">
                <span>Uploaded:</span>
                <span class="font-semibold">75 MB / 100 MB</span>
            </div>
            <div class="flex justify-between text-sm">
                <span>Speed:</span>
                <span class="font-semibold">2.5 MB/s</span>
            </div>
            <div class="flex justify-between text-sm">
                <span>Time remaining:</span>
                <span class="font-semibold">10 seconds</span>
            </div>
        </div>
    </x-slot:content>
</x-popover>
```

### Feature Description

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Premium Features</x-heading>
            
            <x-popover width="md" trigger="click">
                <x-slot:trigger>
                    <x-icon-button icon="heroicons:information-circle" size="sm" />
                </x-slot:trigger>
                
                <x-slot:title>
                    What's Included
                </x-slot:title>
                
                <x-slot:content>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start gap-2">
                            <x-icon name="heroicons:check" class="w-5 h-5 text-green-500 shrink-0 mt-0.5" />
                            <span>Unlimited projects</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <x-icon name="heroicons:check" class="w-5 h-5 text-green-500 shrink-0 mt-0.5" />
                            <span>Priority support</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <x-icon name="heroicons:check" class="w-5 h-5 text-green-500 shrink-0 mt-0.5" />
                            <span>Advanced analytics</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <x-icon name="heroicons:check" class="w-5 h-5 text-green-500 shrink-0 mt-0.5" />
                            <span>Custom integrations</span>
                        </li>
                    </ul>
                </x-slot:content>
            </x-popover>
        </div>
    </x-card-header>
</x-card>
```

### Quick Actions

```blade
<x-popover width="sm" trigger="click" placement="bottom">
    <x-slot:trigger>
        <x-icon-button icon="heroicons:ellipsis-vertical" size="sm" />
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="space-y-1">
            <button class="w-full px-3 py-2 text-left text-sm hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
                Edit
            </button>
            <button class="w-full px-3 py-2 text-left text-sm hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
                Duplicate
            </button>
            <button class="w-full px-3 py-2 text-left text-sm hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
                Archive
            </button>
            <hr class="my-1 border-gray-200 dark:border-gray-600" />
            <button class="w-full px-3 py-2 text-left text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
                Delete
            </button>
        </div>
    </x-slot:content>
</x-popover>
```

## Livewire Integration

```blade
<div>
    <x-popover width="md" trigger="click">
        <x-slot:trigger>
            <x-button wire:loading.attr="disabled">
                Show Details
            </x-button>
        </x-slot:trigger>
        
        <x-slot:title>
            Item Details
        </x-slot:title>
        
        <x-slot:content>
            @if($loading)
                <div class="flex items-center justify-center py-4">
                    <x-spinner size="md" />
                </div>
            @else
                <div class="space-y-2">
                    <x-text size="sm"><strong>Name:</strong> {{ $item->name }}</x-text>
                    <x-text size="sm"><strong>Status:</strong> {{ $item->status }}</x-text>
                    <x-text size="sm"><strong>Created:</strong> {{ $item->created_at->format('M d, Y') }}</x-text>
                </div>
                
                <x-button size="sm" class="w-full mt-3" wire:click="viewDetails({{ $item->id }})">
                    View Full Details
                </x-button>
            @endif
        </x-slot:content>
    </x-popover>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ count: 0 }">
    <x-popover width="sm" trigger="click">
        <x-slot:trigger>
            <x-button>Counter</x-button>
        </x-slot:trigger>
        
        <x-slot:title>
            Counter Value
        </x-slot:title>
        
        <x-slot:content>
            <div class="text-center space-y-3">
                <x-text size="2xl" weight="bold" x-text="count"></x-text>
                
                <div class="flex gap-2">
                    <x-button size="sm" @click="count--">-</x-button>
                    <x-button size="sm" @click="count = 0">Reset</x-button>
                    <x-button size="sm" @click="count++">+</x-button>
                </div>
            </div>
        </x-slot:content>
    </x-popover>
</div>
```

## JavaScript API

If you need more control, you can use the Flowbite JavaScript API:

```javascript
import { Popover } from 'flowbite';

// Get elements
const targetEl = document.getElementById('popover-content');
const triggerEl = document.getElementById('popover-trigger');

// Options
const options = {
    placement: 'top',
    triggerType: 'hover',
    offset: 10,
    onHide: () => {
        console.log('popover hidden');
    },
    onShow: () => {
        console.log('popover shown');
    },
    onToggle: () => {
        console.log('popover toggled');
    },
};

// Create popover instance
const popover = new Popover(targetEl, triggerEl, options);

// Methods
popover.show();
popover.hide();
popover.toggle();
popover.isVisible();
```

## Accessibility

The Popover component:
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
- Supports rich interactive content

## Notes

- Popovers require Flowbite JavaScript for positioning and interaction
- The component uses Popper.js (included in Flowbite) for smart positioning
- Popovers automatically adjust position if they would overflow the viewport
- Unlike tooltips, popovers can contain rich interactive content
- Use `trigger="click"` for popovers with interactive elements
- Consider using `trigger="click"` for mobile devices
- Popovers are ideal for displaying detailed information, forms, or actions

