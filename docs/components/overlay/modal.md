# Modal

Modal dialog component for displaying content in an overlay with backdrop. Perfect for confirmations, forms, and detailed content that requires user attention. Modal provides a flexible way to display modal dialogs.

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
<x-button data-modal-target="default-modal" data-modal-toggle="default-modal">
    Open Modal
</x-button>

{{-- Modal --}}
<x-modal id="default-modal" title="Terms of Service">
    <x-slot:body>
        <x-text>
            With less than a month to go before the European Union enacts new consumer
            privacy laws for its citizens, companies around the world are updating their
            terms of service agreements to comply.
        </x-text>
    </x-slot:body>

    <x-slot:footer>
        <x-button data-modal-hide="default-modal">I accept</x-button>
        <x-button variant="outline" data-modal-hide="default-modal">Decline</x-button>
    </x-slot:footer>
</x-modal>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | auto-generated | Modal ID (required for targeting) |
| `title` | `string\|null` | `null` | Modal title |
| `size` | `string\|null` | `'2xl'` | Size: `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl`, `5xl`, `6xl`, `7xl` |
| `placement` | `string\|null` | `'center'` | Placement: `center`, `top-left`, `top-center`, `top-right`, `center-left`, `center-right`, `bottom-left`, `bottom-center`, `bottom-right` |
| `backdrop` | `string\|null` | `'dynamic'` | Backdrop behavior: `dynamic`, `static` |
| `closable` | `bool` | `true` | Whether modal can be closed with ESC or backdrop click |
| `showClose` | `bool` | `true` | Whether to show close button in header |

## Slots

| Slot | Description |
|------|-------------|
| `header` | Custom header content (replaces title and close button) |
| `body` | Modal body content (alternative to default slot) |
| `footer` | Modal footer content |
| Default slot | Modal body content when not using `body` slot |

## Data Attributes for Triggers

| Attribute | Description |
|-----------|-------------|
| `data-modal-target="modalId"` | Target modal to interact with |
| `data-modal-toggle="modalId"` | Toggle modal visibility |
| `data-modal-show="modalId"` | Show modal |
| `data-modal-hide="modalId"` | Hide modal |

### Style Props

Modal supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Simple Modal

```blade
<x-button data-modal-target="simple-modal" data-modal-toggle="simple-modal">
    Open Modal
</x-button>

<x-modal id="simple-modal" title="Simple Modal">
    <x-text>This is a simple modal with just a title and content.</x-text>
</x-modal>
```

## Modal with Footer

```blade
<x-button data-modal-target="footer-modal" data-modal-toggle="footer-modal">
    Open Modal
</x-button>

<x-modal id="footer-modal" title="Confirm Action">
    <x-slot:body>
        <x-text>Are you sure you want to proceed with this action?</x-text>
    </x-slot:body>
    
    <x-slot:footer>
        <x-button color="primary" data-modal-hide="footer-modal">
            Confirm
        </x-button>
        <x-button variant="outline" data-modal-hide="footer-modal">
            Cancel
        </x-button>
    </x-slot:footer>
</x-modal>
```

## Form Modal

```blade
<x-button data-modal-target="form-modal" data-modal-toggle="form-modal">
    Create User
</x-button>

<x-modal id="form-modal" title="Create New User" size="lg">
    <x-slot:body>
        <form class="space-y-4">
            <div>
                <x-label for="name">Name</x-label>
                <x-input id="name" name="name" placeholder="John Doe" />
            </div>
            
            <div>
                <x-label for="email">Email</x-label>
                <x-input id="email" type="email" name="email" placeholder="john@example.com" />
            </div>
            
            <div>
                <x-label for="role">Role</x-label>
                <x-select id="role" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="moderator">Moderator</option>
                </x-select>
            </div>
        </form>
    </x-slot:body>
    
    <x-slot:footer>
        <x-button color="primary">Create User</x-button>
        <x-button variant="outline" data-modal-hide="form-modal">Cancel</x-button>
    </x-slot:footer>
</x-modal>
```

## Static Backdrop

Prevent closing when clicking outside the modal:

```blade
<x-button data-modal-target="static-modal" data-modal-toggle="static-modal">
    Open Static Modal
</x-button>

<x-modal id="static-modal" title="Important Notice" backdrop="static">
    <x-slot:body>
        <x-text>
            This modal cannot be closed by clicking outside. 
            You must click one of the buttons below.
        </x-text>
    </x-slot:body>
    
    <x-slot:footer>
        <x-button data-modal-hide="static-modal">I Understand</x-button>
    </x-slot:footer>
</x-modal>
```

## Without Close Button

```blade
<x-button data-modal-target="no-close-modal" data-modal-toggle="no-close-modal">
    Open Modal
</x-button>

<x-modal id="no-close-modal" title="No Close Button" :show-close="false">
    <x-slot:body>
        <x-text>This modal has no close button in the header.</x-text>
    </x-slot:body>
    
    <x-slot:footer>
        <x-button data-modal-hide="no-close-modal">Close</x-button>
    </x-slot:footer>
</x-modal>
```

## Sizes

```blade
{{-- Small --}}
<x-modal id="small-modal" title="Small Modal" size="sm">
    <x-text>This is a small modal.</x-text>
</x-modal>

{{-- Medium --}}
<x-modal id="medium-modal" title="Medium Modal" size="md">
    <x-text>This is a medium modal.</x-text>
</x-modal>

{{-- Large --}}
<x-modal id="large-modal" title="Large Modal" size="lg">
    <x-text>This is a large modal.</x-text>
</x-modal>

{{-- Extra Large --}}
<x-modal id="xl-modal" title="Extra Large Modal" size="xl">
    <x-text>This is an extra large modal.</x-text>
</x-modal>

{{-- 2XL (Default) --}}
<x-modal id="2xl-modal" title="2XL Modal" size="2xl">
    <x-text>This is a 2XL modal (default size).</x-text>
</x-modal>

{{-- 3XL --}}
<x-modal id="3xl-modal" title="3XL Modal" size="3xl">
    <x-text>This is a 3XL modal.</x-text>
</x-modal>

{{-- 7XL (Maximum) --}}
<x-modal id="7xl-modal" title="7XL Modal" size="7xl">
    <x-text>This is a 7XL modal (maximum size).</x-text>
</x-modal>
```

## Placement

```blade
{{-- Center (Default) --}}
<x-modal id="center-modal" title="Center Modal" placement="center">
    <x-text>This modal is centered.</x-text>
</x-modal>

{{-- Top Left --}}
<x-modal id="top-left-modal" title="Top Left Modal" placement="top-left">
    <x-text>This modal appears at the top left.</x-text>
</x-modal>

{{-- Top Center --}}
<x-modal id="top-center-modal" title="Top Center Modal" placement="top-center">
    <x-text>This modal appears at the top center.</x-text>
</x-modal>

{{-- Bottom Right --}}
<x-modal id="bottom-right-modal" title="Bottom Right Modal" placement="bottom-right">
    <x-text>This modal appears at the bottom right.</x-text>
</x-modal>
```

## Common Patterns

### Confirmation Dialog

```blade
<x-button
    color="danger"
    data-modal-target="delete-modal"
    data-modal-toggle="delete-modal"
>
    Delete Account
</x-button>

<x-modal id="delete-modal" title="Delete Account" size="md">
    <x-slot:body>
        <div class="text-center">
            @php
                $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
            @endphp
            <x-dynamic-component
                :component="$iconComponent"
                name="heroicons:exclamation-triangle"
                class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
            />
            <x-heading size="h3" class="mb-5 text-gray-500 dark:text-gray-400">
                Are you sure you want to delete your account?
            </x-heading>
            <x-text color="gray">
                This action cannot be undone. All your data will be permanently deleted.
            </x-text>
        </div>
    </x-slot:body>

    <x-slot:footer>
        <div class="flex justify-center gap-4">
            <x-button color="danger" data-modal-hide="delete-modal">
                Yes, I'm sure
            </x-button>
            <x-button variant="outline" data-modal-hide="delete-modal">
                No, cancel
            </x-button>
        </div>
    </x-slot:footer>
</x-modal>
```

### Success Message

```blade
<x-modal id="success-modal" title="Success!" size="md" :show-close="false">
    <x-slot:body>
        <div class="text-center">
            @php
                $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
            @endphp
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 dark:bg-green-900 mb-4">
                <x-dynamic-component
                    :component="$iconComponent"
                    name="heroicons:check"
                    class="h-6 w-6 text-green-600 dark:text-green-400"
                />
            </div>
            <x-heading size="h3" class="mb-2">
                Payment Successful
            </x-heading>
            <x-text color="gray">
                Your payment has been processed successfully. You will receive a confirmation email shortly.
            </x-text>
        </div>
    </x-slot:body>

    <x-slot:footer>
        <div class="flex justify-center">
            <x-button color="success" data-modal-hide="success-modal">
                Continue
            </x-button>
        </div>
    </x-slot:footer>
</x-modal>
```

### Image Preview

```blade
<x-button data-modal-target="image-modal" data-modal-toggle="image-modal">
    View Image
</x-button>

<x-modal id="image-modal" title="Image Preview" size="5xl">
    <x-slot:body>
        <img
            src="https://via.placeholder.com/1200x800"
            alt="Preview"
            class="w-full h-auto rounded-lg"
        />
        <x-text class="mt-4" color="gray">
            Photo taken on January 15, 2024 at Central Park, New York
        </x-text>
    </x-slot:body>
</x-modal>
```

### Video Player

```blade
<x-button data-modal-target="video-modal" data-modal-toggle="video-modal">
    Watch Video
</x-button>

<x-modal id="video-modal" title="Product Demo" size="6xl">
    <x-slot:body>
        <div class="aspect-video">
            <iframe
                class="w-full h-full rounded-lg"
                src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                title="Video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
    </x-slot:body>
</x-modal>
```

### Terms and Conditions

```blade
<x-button data-modal-target="terms-modal" data-modal-toggle="terms-modal">
    View Terms
</x-button>

<x-modal id="terms-modal" title="Terms of Service" size="4xl">
    <x-slot:body>
        <div class="space-y-4 max-h-96 overflow-y-auto">
            <x-heading size="h4">1. Acceptance of Terms</x-heading>
            <x-text>
                By accessing and using this service, you accept and agree to be bound by the terms
                and provision of this agreement.
            </x-text>

            <x-heading size="h4">2. Use License</x-heading>
            <x-text>
                Permission is granted to temporarily download one copy of the materials on our
                website for personal, non-commercial transitory viewing only.
            </x-text>

            <x-heading size="h4">3. Disclaimer</x-heading>
            <x-text>
                The materials on our website are provided on an 'as is' basis. We make no warranties,
                expressed or implied, and hereby disclaim and negate all other warranties.
            </x-text>

            <x-heading size="h4">4. Limitations</x-heading>
            <x-text>
                In no event shall our company or its suppliers be liable for any damages arising
                out of the use or inability to use the materials on our website.
            </x-text>
        </div>
    </x-slot:body>

    <x-slot:footer>
        <x-button data-modal-hide="terms-modal">I Accept</x-button>
        <x-button variant="outline" data-modal-hide="terms-modal">Decline</x-button>
    </x-slot:footer>
</x-modal>
```

### Newsletter Signup

```blade
<x-button data-modal-target="newsletter-modal" data-modal-toggle="newsletter-modal">
    Subscribe
</x-button>

<x-modal id="newsletter-modal" title="Subscribe to Newsletter" size="lg">
    <x-slot:body>
        <x-text class="mb-4">
            Get the latest updates, articles, and resources delivered to your inbox weekly.
        </x-text>

        <form class="space-y-4">
            <div>
                <x-label for="newsletter-email">Email Address</x-label>
                <x-input
                    id="newsletter-email"
                    type="email"
                    placeholder="your@email.com"
                    required
                />
            </div>

            <div class="flex items-start">
                <x-checkbox id="newsletter-agree" name="agree" />
                <x-label for="newsletter-agree" class="ml-2">
                    I agree to receive marketing emails and accept the privacy policy
                </x-label>
            </div>
        </form>
    </x-slot:body>

    <x-slot:footer>
        <x-button color="primary">Subscribe</x-button>
        <x-button variant="outline" data-modal-hide="newsletter-modal">
            Maybe Later
        </x-button>
    </x-slot:footer>
</x-modal>
```

### Product Quick View

```blade
<x-button data-modal-target="product-modal" data-modal-toggle="product-modal">
    Quick View
</x-button>

<x-modal id="product-modal" size="5xl">
    <x-slot:body>
        <div class="grid md:grid-cols-2 gap-6">
            {{-- Product Image --}}
            <div>
                <img
                    src="https://via.placeholder.com/600x600"
                    alt="Product"
                    class="w-full rounded-lg"
                />
            </div>

            {{-- Product Details --}}
            <div class="space-y-4">
                <x-heading size="h2">Premium Wireless Headphones</x-heading>

                <div class="flex items-center gap-2">
                    <x-badge color="success">In Stock</x-badge>
                    <x-text size="sm" color="gray">SKU: WH-1000XM4</x-text>
                </div>

                <x-text size="3xl" weight="bold" class="text-gray-900 dark:text-white">
                    $299.99
                </x-text>

                <x-text>
                    Industry-leading noise cancellation with premium sound quality.
                    Up to 30 hours of battery life with quick charging support.
                </x-text>

                <div class="space-y-2">
                    <x-label>Color</x-label>
                    <div class="flex gap-2">
                        <x-button size="sm" variant="outline">Black</x-button>
                        <x-button size="sm" variant="outline">Silver</x-button>
                        <x-button size="sm" variant="outline">Blue</x-button>
                    </div>
                </div>

                <div class="space-y-2">
                    <x-label for="quantity">Quantity</x-label>
                    <x-input id="quantity" type="number" value="1" min="1" class="w-24" />
                </div>

                <div class="flex gap-3">
                    <x-button color="primary" class="flex-1">Add to Cart</x-button>
                    <x-button variant="outline">
                        @php
                            $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
                        @endphp
                        <x-dynamic-component
                            :component="$iconComponent"
                            name="heroicons:heart"
                            class="w-5 h-5"
                        />
                    </x-button>
                </div>
            </div>
        </div>
    </x-slot:body>
</x-modal>
```

## Livewire Integration

```blade
{{-- Livewire Component --}}
<div>
    <x-button wire:click="$set('showModal', true)">
        Open Modal
    </x-button>

    @if($showModal)
    <x-modal id="livewire-modal" title="Livewire Modal">
        <x-slot:body>
            <x-input wire:model="name" placeholder="Enter your name" />
            <x-text class="mt-2">Hello, {{ $name }}!</x-text>
        </x-slot:body>

        <x-slot:footer>
            <x-button wire:click="save">Save</x-button>
            <x-button variant="outline" wire:click="$set('showModal', false)">
                Cancel
            </x-button>
        </x-slot:footer>
    </x-modal>
    @endif
</div>
```

## JavaScript API

```javascript
import { Modal } from 'flowbite';

// Get modal element
const modalEl = document.getElementById('my-modal');

// Create modal instance
const modal = new Modal(modalEl, {
    placement: 'center',
    backdrop: 'dynamic',
    backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
    closable: true,
    onHide: () => {
        console.log('Modal hidden');
    },
    onShow: () => {
        console.log('Modal shown');
    },
    onToggle: () => {
        console.log('Modal toggled');
    }
});

// Show modal
modal.show();

// Hide modal
modal.hide();

// Toggle modal
modal.toggle();

// Check visibility
if (modal.isVisible()) {
    console.log('Modal is visible');
}

if (modal.isHidden()) {
    console.log('Modal is hidden');
}
```

## Accessibility

The Modal component:
- Uses semantic HTML with proper ARIA attributes
- Supports keyboard navigation (Tab, Escape to close)
- Traps focus within the modal when open
- Returns focus to trigger element when closed
- Provides screen reader announcements
- Supports backdrop click to close (configurable)
- Has proper heading hierarchy
- Includes visible focus indicators
- Supports `role="dialog"` for screen readers
- Announces modal state changes to assistive technologies

## Notes

- Modal requires Flowbite JavaScript for interaction
- Always provide a unique `id` for each modal
- Use `data-modal-target` and `data-modal-toggle` on trigger elements
- Use `data-modal-hide` on close buttons
- Static backdrop prevents closing on outside click
- Modal automatically handles scroll locking
- Consider mobile viewport when choosing size
- Use appropriate placement for better UX
- Always provide a way to close the modal
- Test keyboard navigation and screen reader compatibility


