# Drawer

Off-canvas drawer component (also known as sidebar or offcanvas) that slides in from the edge of the screen. Perfect for navigation menus, filters, shopping carts, and additional content. Drawer provides a flexible way to display off-canvas content.

## Requirements

This component requires **Flowbite JavaScript** to be installed in your project for interaction and animations.

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or install via npm:

```bash
npm install flowbite
```

## Basic Usage

```blade
{{-- Trigger button --}}
<x-button data-drawer-target="default-drawer" data-drawer-show="default-drawer">
    Open Drawer
</x-button>

{{-- Drawer --}}
<x-drawer id="default-drawer" title="Menu" placement="left">
    <x-slot:body>
        <x-text>This is the drawer content.</x-text>
    </x-slot:body>
</x-drawer>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | auto-generated | Drawer ID (required for targeting) |
| `title` | `string\|null` | `null` | Drawer title |

### Style Props

Drawer supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).
| `placement` | `string` | `'left'` | Placement: `left`, `right`, `top`, `bottom` |
| `width` | `string\|null` | `'md'` | Width for left/right: `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `full` |
| `height` | `string\|null` | `'md'` | Height for top/bottom: `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `full` |
| `backdrop` | `bool` | `true` | Whether to show backdrop |
| `bodyScrolling` | `bool` | `false` | Whether to allow body scrolling |
| `showClose` | `bool` | `true` | Whether to show close button |
| `edge` | `bool` | `false` | Enable edge mode (show small part when closed) |
| `edgeOffset` | `string\|null` | `null` | Edge offset (e.g., 'bottom-[60px]') |

## Slots

| Slot | Description |
|------|-------------|
| `header` | Custom header content (replaces title and close button) |
| `body` | Drawer body content (alternative to default slot) |
| `footer` | Drawer footer content |
| Default slot | Drawer body content when not using `body` slot |

## Data Attributes for Triggers

| Attribute | Description |
|-----------|-------------|
| `data-drawer-target="drawerId"` | Target drawer to interact with |
| `data-drawer-toggle="drawerId"` | Toggle drawer visibility |
| `data-drawer-show="drawerId"` | Show drawer |
| `data-drawer-hide="drawerId"` | Hide drawer |

## Placement

### Left Drawer (Default)

```blade
<x-button data-drawer-target="left-drawer" data-drawer-show="left-drawer">
    Open Left
</x-button>

<x-drawer id="left-drawer" title="Left Drawer" placement="left">
    <x-text>Content slides in from the left.</x-text>
</x-drawer>
```

### Right Drawer

```blade
<x-button data-drawer-target="right-drawer" data-drawer-show="right-drawer">
    Open Right
</x-button>

<x-drawer id="right-drawer" title="Right Drawer" placement="right">
    <x-text>Content slides in from the right.</x-text>
</x-drawer>
```

### Top Drawer

```blade
<x-button data-drawer-target="top-drawer" data-drawer-show="top-drawer">
    Open Top
</x-button>

<x-drawer id="top-drawer" title="Top Drawer" placement="top" height="md">
    <x-text>Content slides in from the top.</x-text>
</x-drawer>
```

### Bottom Drawer

```blade
<x-button data-drawer-target="bottom-drawer" data-drawer-show="bottom-drawer">
    Open Bottom
</x-button>

<x-drawer id="bottom-drawer" title="Bottom Drawer" placement="bottom" height="md">
    <x-text>Content slides in from the bottom.</x-text>
</x-drawer>
```

## Sizes

### Width Sizes (Left/Right Drawers)

```blade
{{-- Extra Small (16rem) --}}
<x-drawer id="xs-drawer" title="XS Drawer" width="xs">
    <x-text>Extra small drawer</x-text>
</x-drawer>

{{-- Small (20rem) --}}
<x-drawer id="sm-drawer" title="SM Drawer" width="sm">
    <x-text>Small drawer</x-text>
</x-drawer>

{{-- Medium (24rem - default) --}}
<x-drawer id="md-drawer" title="MD Drawer" width="md">
    <x-text>Medium drawer</x-text>
</x-drawer>

{{-- Large (28rem) --}}
<x-drawer id="lg-drawer" title="LG Drawer" width="lg">
    <x-text>Large drawer</x-text>
</x-drawer>

{{-- Full Width --}}
<x-drawer id="full-drawer" title="Full Drawer" width="full">
    <x-text>Full width drawer</x-text>
</x-drawer>
```

## Navigation Drawer

```blade
<x-button data-drawer-target="nav-drawer" data-drawer-show="nav-drawer">
    Menu
</x-button>

<x-drawer id="nav-drawer" title="Navigation" placement="left" width="sm">
    <x-slot:body>
        <nav class="space-y-2">
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @php
                    $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
                @endphp
                <x-dynamic-component 
                    :component="$iconComponent"
                    name="heroicons:home" 
                    class="w-5 h-5 text-gray-500"
                />
                <span class="ml-3">Dashboard</span>
            </a>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                <x-dynamic-component 
                    :component="$iconComponent"
                    name="heroicons:user" 
                    class="w-5 h-5 text-gray-500"
                />
                <span class="ml-3">Profile</span>
            </a>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                <x-dynamic-component 
                    :component="$iconComponent"
                    name="heroicons:cog" 
                    class="w-5 h-5 text-gray-500"
                />
                <span class="ml-3">Settings</span>
            </a>
        </nav>
    </x-slot:body>
</x-drawer>
```

## Shopping Cart Drawer

```blade
<x-button data-drawer-target="cart-drawer" data-drawer-show="cart-drawer">
    Cart (3)
</x-button>

<x-drawer id="cart-drawer" title="Shopping Cart" placement="right" width="lg">
    <x-slot:body>
        <div class="space-y-4">
            {{-- Cart items --}}
            <div class="flex gap-4 pb-4 border-b dark:border-gray-700">
                <img src="https://via.placeholder.com/80" alt="Product" class="w-20 h-20 rounded" />
                <div class="flex-1">
                    <x-text weight="semibold">Product Name</x-text>
                    <x-text size="sm" color="gray">$29.99</x-text>
                </div>
            </div>
        </div>
    </x-slot:body>
    
    <x-slot:footer>
        <div class="space-y-4">
            <div class="flex justify-between">
                <x-text weight="semibold">Total:</x-text>
                <x-text weight="bold" size="lg">$89.97</x-text>
            </div>
            <x-button color="primary" class="w-full">Checkout</x-button>
        </div>
    </x-slot:footer>
</x-drawer>
```

## Filter Drawer

```blade
<x-button data-drawer-target="filter-drawer" data-drawer-show="filter-drawer">
    Filters
</x-button>

<x-drawer id="filter-drawer" title="Filters" placement="left" width="md">
    <x-slot:body>
        <div class="space-y-6">
            <div>
                <x-label>Category</x-label>
                <x-select>
                    <option>All Categories</option>
                    <option>Electronics</option>
                    <option>Clothing</option>
                </x-select>
            </div>
            
            <div>
                <x-label>Price Range</x-label>
                <div class="flex gap-2">
                    <x-input type="number" placeholder="Min" />
                    <x-input type="number" placeholder="Max" />
                </div>
            </div>
            
            <div>
                <x-label>Brand</x-label>
                <div class="space-y-2">
                    <x-checkbox id="brand1" label="Brand A" />
                    <x-checkbox id="brand2" label="Brand B" />
                    <x-checkbox id="brand3" label="Brand C" />
                </div>
            </div>
        </div>
    </x-slot:body>
    
    <x-slot:footer>
        <div class="flex gap-2">
            <x-button color="primary" class="flex-1">Apply</x-button>
            <x-button variant="outline" class="flex-1">Reset</x-button>
        </div>
    </x-slot:footer>
</x-drawer>
```

## Without Backdrop

```blade
<x-drawer id="no-backdrop-drawer" title="No Backdrop" :backdrop="false">
    <x-text>This drawer has no backdrop overlay.</x-text>
</x-drawer>
```

## With Body Scrolling

```blade
<x-drawer id="scroll-drawer" title="Scrollable" :body-scrolling="true">
    <x-text>Body can scroll while drawer is open.</x-text>
</x-drawer>
```

## JavaScript API

```javascript
import { Drawer } from 'flowbite';

// Get drawer element
const drawerEl = document.getElementById('my-drawer');

// Create drawer instance
const drawer = new Drawer(drawerEl, {
    placement: 'left',
    backdrop: true,
    bodyScrolling: false,
    edge: false,
    edgeOffset: '',
    backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-30',
    onHide: () => {
        console.log('Drawer hidden');
    },
    onShow: () => {
        console.log('Drawer shown');
    },
    onToggle: () => {
        console.log('Drawer toggled');
    }
});

// Show drawer
drawer.show();

// Hide drawer
drawer.hide();

// Toggle drawer
drawer.toggle();

// Check visibility
if (drawer.isVisible()) {
    console.log('Drawer is visible');
}
```

## Accessibility

The Drawer component:
- Uses semantic HTML with proper ARIA attributes
- Supports keyboard navigation (Tab, Escape to close)
- Traps focus within the drawer when open
- Returns focus to trigger element when closed
- Provides screen reader announcements
- Supports backdrop click to close (configurable)
- Has proper heading hierarchy
- Includes visible focus indicators
- Supports `role="dialog"` for screen readers
- Announces drawer state changes to assistive technologies

## Notes

- Drawer requires Flowbite JavaScript for interaction
- Always provide a unique `id` for each drawer
- Use `data-drawer-target` and `data-drawer-show` on trigger elements
- Use `data-drawer-hide` on close buttons
- Drawer automatically handles scroll locking (unless bodyScrolling is enabled)
- Consider mobile viewport when choosing size
- Use appropriate placement for better UX
- Always provide a way to close the drawer
- Test keyboard navigation and screen reader compatibility
- Edge mode shows a small part of the drawer even when closed

