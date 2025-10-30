# Toast

Toast notification component for displaying temporary messages with auto-dismiss functionality. Toast provides a flexible way to display toast notifications. Perfect for success messages, error alerts, and user feedback.

## Requirements

This component requires **Alpine.js** to be installed in your project for the interactive functionality.

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Basic Usage

```blade
<x-toast
    status="success"
    title="Success"
    description="Your changes have been saved."
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `status` | `string` | `'info'` | Status type: `success`, `error`, `warning`, `info` |
| `title` | `string` | `null` | Toast title |
| `description` | `string` | `null` | Toast description |
| `icon` | `string` | `null` | Custom icon name (uses default icon if not provided) |
| `duration` | `int` | `5000` | Auto-dismiss duration in milliseconds (0 = no auto-dismiss) |
| `closable` | `bool` | `true` | Whether the toast can be manually closed |
| `position` | `string` | `'top-right'` | Position: `top-right`, `top-left`, `bottom-right`, `bottom-left`, `top-center`, `bottom-center` |

### Style Props

Toast supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Status Types

### Success Toast

```blade
<x-toast 
    status="success"
    title="Success"
    description="Your changes have been saved successfully."
/>
```

### Error Toast

```blade
<x-toast 
    status="error"
    title="Error"
    description="Something went wrong. Please try again."
/>
```

### Warning Toast

```blade
<x-toast 
    status="warning"
    title="Warning"
    description="Your session will expire in 5 minutes."
/>
```

### Info Toast

```blade
<x-toast 
    status="info"
    title="Info"
    description="New updates are available."
/>
```

## Positions

### Top Right (Default)

```blade
<x-toast 
    status="success"
    title="Success"
    description="Operation completed."
    position="top-right"
/>
```

### Top Left

```blade
<x-toast 
    status="success"
    title="Success"
    description="Operation completed."
    position="top-left"
/>
```

### Bottom Right

```blade
<x-toast 
    status="success"
    title="Success"
    description="Operation completed."
    position="bottom-right"
/>
```

### Bottom Left

```blade
<x-toast 
    status="success"
    title="Success"
    description="Operation completed."
    position="bottom-left"
/>
```

### Top Center

```blade
<x-toast 
    status="success"
    title="Success"
    description="Operation completed."
    position="top-center"
/>
```

### Bottom Center

```blade
<x-toast 
    status="success"
    title="Success"
    description="Operation completed."
    position="bottom-center"
/>
```

## Duration Options

### Auto-dismiss after 3 seconds

```blade
<x-toast 
    status="info"
    title="Quick message"
    description="This will disappear in 3 seconds."
    :duration="3000"
/>
```

### No auto-dismiss

```blade
<x-toast 
    status="warning"
    title="Important"
    description="This message will stay until you close it."
    :duration="0"
/>
```

## Without Close Button

```blade
<x-toast 
    status="info"
    title="Loading"
    description="Please wait..."
    :closable="false"
    :duration="0"
/>
```

## Custom Icon

```blade
<x-toast 
    status="success"
    title="Payment Received"
    description="Your payment has been processed."
    icon="heroicons:currency-dollar"
/>
```

## With Action Button

```blade
<x-toast 
    status="info"
    title="New message"
    description="You have a new message from John."
>
    <x-button size="sm" variant="outline" href="/messages">
        View Message
    </x-button>
</x-toast>
```

## With Multiple Actions

```blade
<x-toast 
    status="warning"
    title="Unsaved changes"
    description="You have unsaved changes. Do you want to save them?"
>
    <div class="flex gap-2">
        <x-button size="sm" color="primary">
            Save
        </x-button>
        <x-button size="sm" variant="outline">
            Discard
        </x-button>
    </div>
</x-toast>
```

## Common Patterns

### Form Submission Success

```blade
@if(session('success'))
<x-toast 
    status="success"
    title="Success"
    :description="session('success')"
/>
@endif
```

### Form Validation Error

```blade
@if($errors->any())
<x-toast 
    status="error"
    title="Validation Error"
    description="Please check the form and try again."
/>
@endif
```

### File Upload Success

```blade
<x-toast 
    status="success"
    title="Upload Complete"
    description="Your file has been uploaded successfully."
    icon="heroicons:cloud-arrow-up"
/>
```

### Delete Confirmation

```blade
<x-toast 
    status="success"
    title="Deleted"
    description="The item has been deleted."
>
    <x-button size="sm" variant="outline">
        Undo
    </x-button>
</x-toast>
```

### Network Error

```blade
<x-toast 
    status="error"
    title="Connection Error"
    description="Unable to connect to the server. Please check your internet connection."
    :duration="0"
/>
```

### Session Expiry Warning

```blade
<x-toast 
    status="warning"
    title="Session Expiring"
    description="Your session will expire in 5 minutes."
>
    <x-button size="sm" color="primary">
        Extend Session
    </x-button>
</x-toast>
```

### Update Available

```blade
<x-toast 
    status="info"
    title="Update Available"
    description="A new version is available. Refresh to update."
>
    <x-button size="sm" color="primary" @click="location.reload()">
        Refresh Now
    </x-button>
</x-toast>
```

### Copy to Clipboard

```blade
<x-toast 
    status="success"
    title="Copied"
    description="Link copied to clipboard."
    :duration="2000"
/>
```

### Email Sent

```blade
<x-toast 
    status="success"
    title="Email Sent"
    description="Your email has been sent successfully."
    icon="heroicons:envelope"
/>
```

### Password Changed

```blade
<x-toast 
    status="success"
    title="Password Changed"
    description="Your password has been updated successfully."
    icon="heroicons:lock-closed"
/>
```

### Item Added to Cart

```blade
<x-toast 
    status="success"
    title="Added to Cart"
    description="Item has been added to your cart."
    icon="heroicons:shopping-cart"
>
    <x-button size="sm" color="primary" href="/cart">
        View Cart
    </x-button>
</x-toast>
```

### Bookmark Added

```blade
<x-toast 
    status="success"
    title="Bookmarked"
    description="Page added to your bookmarks."
    icon="heroicons:bookmark"
/>
```

### Download Started

```blade
<x-toast 
    status="info"
    title="Download Started"
    description="Your download will begin shortly."
    icon="heroicons:arrow-down-tray"
/>
```

### Invitation Sent

```blade
<x-toast 
    status="success"
    title="Invitation Sent"
    description="Invitation has been sent to user@example.com."
    icon="heroicons:paper-airplane"
/>
```

### Settings Saved

```blade
<x-toast 
    status="success"
    title="Settings Saved"
    description="Your preferences have been updated."
    icon="heroicons:cog-6-tooth"
/>
```

## Livewire Integration

```blade
<div>
    @if($showToast)
    <x-toast 
        :status="$toastStatus"
        :title="$toastTitle"
        :description="$toastDescription"
    />
    @endif
    
    <x-button wire:click="saveData" color="primary">
        Save
    </x-button>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class DataForm extends Component
{
    public $showToast = false;
    public $toastStatus = 'success';
    public $toastTitle = '';
    public $toastDescription = '';
    
    public function saveData()
    {
        // Save data logic
        
        $this->showToast = true;
        $this->toastStatus = 'success';
        $this->toastTitle = 'Success';
        $this->toastDescription = 'Data saved successfully.';
        
        // Reset toast after showing
        $this->dispatch('toast-shown');
    }
    
    public function render()
    {
        return view('livewire.data-form');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    showToast: false,
    toastStatus: 'success',
    toastTitle: '',
    toastDescription: '',
    showSuccessToast(title, description) {
        this.toastStatus = 'success';
        this.toastTitle = title;
        this.toastDescription = description;
        this.showToast = true;
        setTimeout(() => { this.showToast = false; }, 5000);
    }
}">
    <template x-if="showToast">
        <x-toast 
            x-bind:status="toastStatus"
            x-bind:title="toastTitle"
            x-bind:description="toastDescription"
        />
    </template>
    
    <x-button @click="showSuccessToast('Success', 'Operation completed.')" color="primary">
        Show Toast
    </x-button>
</div>
```

## Toast Container for Multiple Toasts

For managing multiple toasts, create a container component:

```blade
<div 
    x-data="{ 
        toasts: [],
        addToast(status, title, description) {
            const id = Date.now();
            this.toasts.push({ id, status, title, description });
            setTimeout(() => {
                this.toasts = this.toasts.filter(t => t.id !== id);
            }, 5000);
        }
    }"
    class="fixed top-4 right-4 z-50 space-y-4"
>
    <template x-for="toast in toasts" :key="toast.id">
        <x-toast 
            x-bind:status="toast.status"
            x-bind:title="toast.title"
            x-bind:description="toast.description"
        />
    </template>
</div>
```

## Accessibility

The Toast component:
- Uses `role="alert"` for screen reader announcements
- Uses `aria-live="assertive"` for important notifications
- Uses `aria-atomic="true"` to announce the entire content
- Provides keyboard-accessible close button (Tab, Enter, Space)
- Maintains proper color contrast ratios
- Supports auto-dismiss for non-critical messages
- Allows manual dismissal for user control
- Uses semantic HTML structure
- Announces toast content immediately to screen readers
- Supports ARIA labels for custom content

