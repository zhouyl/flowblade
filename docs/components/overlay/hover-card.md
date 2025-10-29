# HoverCard

Hover card component for displaying rich content when hovering over a trigger element. Specifically designed for hover interactions with automatic delay to prevent accidental triggers. HoverCard provides a flexible way to display hover cards.

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
<x-hover-card title="User Info" content="This is a hover card with basic content.">
    <x-slot:trigger>
        <x-text class="underline decoration-dotted cursor-help">Hover over me</x-text>
    </x-slot:trigger>
</x-hover-card>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string\|null` | `null` | Card title (optional) |
| `content` | `string\|null` | `null` | Card content text (optional, use slot for rich content) |
| `placement` | `string` | `'top'` | Placement: `top`, `right`, `bottom`, `left` |
| `delay` | `int` | `300` | Delay in milliseconds before showing |
| `arrow` | `bool` | `true` | Whether to show arrow |
| `animation` | `string\|null` | `'300'` | Animation duration: `100`, `150`, `200`, `300`, `500`, `700`, `1000` |
| `offset` | `int\|null` | `null` | Offset distance from trigger element |
| `width` | `string\|null` | `'md'` | Width: `sm`, `md`, `lg`, `xl`, `2xl` |

### Style Props

HoverCard supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Slots

| Slot | Description |
|------|-------------|
| `trigger` | The trigger element (text, link, etc.) |
| `title` | Card title (alternative to `title` prop) |
| `content` | Card content (alternative to `content` prop and default slot) |
| Default slot | Card content when not using `content` slot |

## Simple Hover Card

```blade
<x-hover-card title="Quick Info" content="This appears when you hover over the trigger.">
    <x-slot:trigger>
        <x-text class="underline decoration-dotted cursor-help">Hover me</x-text>
    </x-slot:trigger>
</x-hover-card>
```

## User Profile Card

```blade
<x-hover-card width="md">
    <x-slot:trigger>
        <x-text class="text-blue-600 hover:underline cursor-pointer">@johndoe</x-text>
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="flex items-start gap-3">
            <x-avatar 
                src="https://i.pravatar.cc/150?img=1" 
                alt="John Doe"
                size="lg"
            />
            <div class="flex-1 min-w-0">
                <x-text weight="semibold" class="text-gray-900 dark:text-white">
                    John Doe
                </x-text>
                <x-text size="sm" color="gray">@johndoe</x-text>
                <x-text size="sm" class="mt-2">
                    Full-stack developer passionate about building great user experiences.
                </x-text>
                <div class="flex gap-4 mt-3 text-sm">
                    <div>
                        <x-text weight="semibold" class="text-gray-900 dark:text-white">1.2K</x-text>
                        <x-text size="xs" color="gray">Followers</x-text>
                    </div>
                    <div>
                        <x-text weight="semibold" class="text-gray-900 dark:text-white">345</x-text>
                        <x-text size="xs" color="gray">Following</x-text>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-hover-card>
```

## Product Preview Card

```blade
<x-hover-card width="lg" placement="right">
    <x-slot:trigger>
        <x-text class="text-blue-600 hover:underline cursor-pointer">
            Premium Headphones
        </x-text>
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="space-y-3">
            <img 
                src="https://via.placeholder.com/300x200" 
                alt="Product" 
                class="w-full h-32 object-cover rounded-lg"
            />
            <div>
                <x-text weight="semibold" size="lg" class="text-gray-900 dark:text-white">
                    Premium Wireless Headphones
                </x-text>
                <x-text size="sm" color="gray" class="mt-1">
                    High-quality audio with active noise cancellation
                </x-text>
            </div>
            <div class="flex items-center justify-between">
                <x-text weight="bold" size="xl" class="text-gray-900 dark:text-white">
                    $299.99
                </x-text>
                <x-badge color="success">In Stock</x-badge>
            </div>
            <div class="flex items-center gap-1">
                <x-icon name="heroicons:star-solid" class="w-4 h-4 text-yellow-400" />
                <x-icon name="heroicons:star-solid" class="w-4 h-4 text-yellow-400" />
                <x-icon name="heroicons:star-solid" class="w-4 h-4 text-yellow-400" />
                <x-icon name="heroicons:star-solid" class="w-4 h-4 text-yellow-400" />
                <x-icon name="heroicons:star-solid" class="w-4 h-4 text-yellow-400" />
                <x-text size="sm" color="gray" class="ml-2">(128 reviews)</x-text>
            </div>
        </div>
    </x-slot:content>
</x-hover-card>
```

## Link Preview Card

```blade
<x-hover-card width="xl" :delay="500">
    <x-slot:trigger>
        <x-link href="#" class="text-blue-600 hover:underline">
            https://example.com/article
        </x-link>
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="space-y-3">
            <img 
                src="https://via.placeholder.com/400x200" 
                alt="Article" 
                class="w-full h-40 object-cover rounded-lg"
            />
            <div>
                <x-text weight="semibold" size="lg" class="text-gray-900 dark:text-white">
                    10 Tips for Better Web Development
                </x-text>
                <x-text size="sm" color="gray" class="mt-2">
                    Learn the best practices and techniques to improve your web development skills and build better applications.
                </x-text>
            </div>
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <x-icon name="heroicons:calendar" class="w-4 h-4" />
                <span>Published on Jan 15, 2024</span>
            </div>
        </div>
    </x-slot:content>
</x-hover-card>
```

## Repository Info Card

```blade
<x-hover-card width="lg">
    <x-slot:trigger>
        <x-text class="text-blue-600 hover:underline cursor-pointer font-mono">
            username/repository
        </x-text>
    </x-slot:trigger>
    
    <x-slot:content>
        <div class="space-y-3">
            <div>
                <x-text weight="semibold" size="lg" class="text-gray-900 dark:text-white">
                    awesome-project
                </x-text>
                <x-text size="sm" color="gray" class="mt-1">
                    A collection of awesome resources and tools for developers
                </x-text>
            </div>
            <div class="flex items-center gap-4 text-sm">
                <div class="flex items-center gap-1">
                    <x-icon name="heroicons:star" class="w-4 h-4 text-yellow-400" />
                    <span class="text-gray-900 dark:text-white">2.5k</span>
                </div>
                <div class="flex items-center gap-1">
                    <x-icon name="heroicons:code-bracket" class="w-4 h-4 text-gray-500" />
                    <span class="text-gray-500">TypeScript</span>
                </div>
                <div class="flex items-center gap-1">
                    <x-icon name="heroicons:scale" class="w-4 h-4 text-gray-500" />
                    <span class="text-gray-500">MIT</span>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <x-badge color="primary" size="sm">v2.1.0</x-badge>
                <x-badge color="success" size="sm">Active</x-badge>
            </div>
        </div>
    </x-slot:content>
</x-hover-card>
```

## Placement

```blade
{{-- Top (default) --}}
<x-hover-card placement="top" title="Top" content="This hover card appears on top.">
    <x-slot:trigger>
        <x-button size="sm">Top</x-button>
    </x-slot:trigger>
</x-hover-card>

{{-- Right --}}
<x-hover-card placement="right" title="Right" content="This hover card appears on the right.">
    <x-slot:trigger>
        <x-button size="sm">Right</x-button>
    </x-slot:trigger>
</x-hover-card>

{{-- Bottom --}}
<x-hover-card placement="bottom" title="Bottom" content="This hover card appears on the bottom.">
    <x-slot:trigger>
        <x-button size="sm">Bottom</x-button>
    </x-slot:trigger>
</x-hover-card>

{{-- Left --}}
<x-hover-card placement="left" title="Left" content="This hover card appears on the left.">
    <x-slot:trigger>
        <x-button size="sm">Left</x-button>
    </x-slot:trigger>
</x-hover-card>
```

## Width Sizes

```blade
{{-- Small (16rem) --}}
<x-hover-card width="sm" title="Small" content="This is a small hover card.">
    <x-slot:trigger>
        <x-button size="sm">SM</x-button>
    </x-slot:trigger>
</x-hover-card>

{{-- Medium (20rem - default) --}}
<x-hover-card width="md" title="Medium" content="This is a medium hover card.">
    <x-slot:trigger>
        <x-button size="sm">MD</x-button>
    </x-slot:trigger>
</x-hover-card>

{{-- Large (24rem) --}}
<x-hover-card width="lg" title="Large" content="This is a large hover card.">
    <x-slot:trigger>
        <x-button size="sm">LG</x-button>
    </x-slot:trigger>
</x-hover-card>

{{-- Extra Large (28rem) --}}
<x-hover-card width="xl" title="Extra Large" content="This is an extra large hover card.">
    <x-slot:trigger>
        <x-button size="sm">XL</x-button>
    </x-slot:trigger>
</x-hover-card>
```

## Custom Delay

```blade
{{-- Fast (100ms) --}}
<x-hover-card :delay="100" title="Fast" content="Shows quickly after hover.">
    <x-slot:trigger>
        <x-text class="underline cursor-help">Fast (100ms)</x-text>
    </x-slot:trigger>
</x-hover-card>

{{-- Default (300ms) --}}
<x-hover-card :delay="300" title="Default" content="Shows after 300ms.">
    <x-slot:trigger>
        <x-text class="underline cursor-help">Default (300ms)</x-text>
    </x-slot:trigger>
</x-hover-card>

{{-- Slow (700ms) --}}
<x-hover-card :delay="700" title="Slow" content="Shows slowly after hover.">
    <x-slot:trigger>
        <x-text class="underline cursor-help">Slow (700ms)</x-text>
    </x-slot:trigger>
</x-hover-card>
```

## Without Arrow

```blade
<x-hover-card :arrow="false" title="No Arrow" content="This hover card has no arrow.">
    <x-slot:trigger>
        <x-text class="underline cursor-help">No Arrow</x-text>
    </x-slot:trigger>
</x-hover-card>
```

## Common Patterns

### Definition Tooltip

```blade
<p>
    The term 
    <x-hover-card width="sm" :delay="200">
        <x-slot:trigger>
            <x-text class="underline decoration-dotted cursor-help font-medium">API</x-text>
        </x-slot:trigger>
        <x-slot:content>
            <x-text weight="semibold" class="text-gray-900 dark:text-white">
                Application Programming Interface
            </x-text>
            <x-text size="sm" color="gray" class="mt-1">
                A set of rules and protocols for building and interacting with software applications.
            </x-text>
        </x-slot:content>
    </x-hover-card>
    allows different software systems to communicate with each other.
</p>
```

### Author Bio

```blade
<x-text>
    Written by 
    <x-hover-card width="md">
        <x-slot:trigger>
            <x-text class="text-blue-600 hover:underline cursor-pointer font-medium">
                Jane Smith
            </x-text>
        </x-slot:trigger>
        <x-slot:content>
            <div class="flex items-start gap-3">
                <x-avatar src="https://i.pravatar.cc/150?img=5" size="md" />
                <div>
                    <x-text weight="semibold" class="text-gray-900 dark:text-white">
                        Jane Smith
                    </x-text>
                    <x-text size="sm" color="gray">Senior Developer</x-text>
                    <x-text size="sm" class="mt-2">
                        10+ years of experience in web development and UI/UX design.
                    </x-text>
                </div>
            </div>
        </x-slot:content>
    </x-hover-card>
</x-text>
```

## JavaScript API

```javascript
import { Popover } from 'flowbite';

const targetEl = document.getElementById('hover-card-content');
const triggerEl = document.getElementById('hover-card-trigger');

const options = {
    placement: 'top',
    triggerType: 'hover',
    offset: 10,
    delay: 300,
};

const hoverCard = new Popover(targetEl, triggerEl, options);
```

## Accessibility

The HoverCard component:
- Uses semantic HTML with proper ARIA attributes
- Works with screen readers
- Provides keyboard navigation support
- Uses Popper.js for intelligent positioning
- Respects user motion preferences
- Provides sufficient color contrast
- Has configurable delay to prevent accidental triggers

## Notes

- HoverCard requires Flowbite JavaScript for positioning and interaction
- Always use hover trigger (not click) for hover cards
- Set appropriate delay (300ms recommended) to avoid accidental triggers
- Use for supplementary information, not critical content
- Keep content concise and scannable
- Consider mobile users - hover doesn't work on touch devices
- For critical information, use Popover with click trigger instead

