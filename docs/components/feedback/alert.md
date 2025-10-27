# Alert

Alert component for displaying important messages and notifications to users.

## Basic Usage

```blade
<x-alert status="info">
    This is an informational alert message.
</x-alert>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `status` | `string` | `'info'` | Status: `info`, `success`, `warning`, `danger` |
| `variant` | `string` | `'subtle'` | Variant: `solid`, `subtle`, `left-accent`, `top-accent` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `title` | `string` | `null` | Alert title |
| `icon` | `string` | `null` | Custom icon name (defaults to status icon) |
| `closable` | `bool` | `false` | Whether the alert can be closed |

## Status Types

### Info Alert

```blade
<x-alert status="info">
    This is an informational message.
</x-alert>
```

### Success Alert

```blade
<x-alert status="success">
    Your changes have been saved successfully!
</x-alert>
```

### Warning Alert

```blade
<x-alert status="warning">
    Please review your information before submitting.
</x-alert>
```

### Danger Alert

```blade
<x-alert status="danger">
    An error occurred while processing your request.
</x-alert>
```

## Variants

### Subtle Variant (Default)

```blade
<x-alert status="info" variant="subtle">
    Subtle info alert with light background.
</x-alert>

<x-alert status="success" variant="subtle">
    Subtle success alert with light background.
</x-alert>

<x-alert status="warning" variant="subtle">
    Subtle warning alert with light background.
</x-alert>

<x-alert status="danger" variant="subtle">
    Subtle danger alert with light background.
</x-alert>
```

### Solid Variant

```blade
<x-alert status="info" variant="solid">
    Solid info alert with colored background.
</x-alert>

<x-alert status="success" variant="solid">
    Solid success alert with colored background.
</x-alert>

<x-alert status="warning" variant="solid">
    Solid warning alert with colored background.
</x-alert>

<x-alert status="danger" variant="solid">
    Solid danger alert with colored background.
</x-alert>
```

### Left Accent Variant

```blade
<x-alert status="info" variant="left-accent">
    Left accent info alert.
</x-alert>

<x-alert status="success" variant="left-accent">
    Left accent success alert.
</x-alert>

<x-alert status="warning" variant="left-accent">
    Left accent warning alert.
</x-alert>

<x-alert status="danger" variant="left-accent">
    Left accent danger alert.
</x-alert>
```

### Top Accent Variant

```blade
<x-alert status="info" variant="top-accent">
    Top accent info alert.
</x-alert>

<x-alert status="success" variant="top-accent">
    Top accent success alert.
</x-alert>

<x-alert status="warning" variant="top-accent">
    Top accent warning alert.
</x-alert>

<x-alert status="danger" variant="top-accent">
    Top accent danger alert.
</x-alert>
```

## Sizes

```blade
<x-alert status="info" size="xs">
    Extra small alert
</x-alert>

<x-alert status="info" size="sm">
    Small alert
</x-alert>

<x-alert status="info" size="md">
    Medium alert (default)
</x-alert>

<x-alert status="info" size="lg">
    Large alert
</x-alert>

<x-alert status="info" size="xl">
    Extra large alert
</x-alert>
```

## With Title

```blade
<x-alert status="info" title="Information">
    This alert has a title for better organization.
</x-alert>

<x-alert status="success" title="Success!">
    Your operation completed successfully.
</x-alert>

<x-alert status="warning" title="Warning">
    Please be careful with this action.
</x-alert>

<x-alert status="danger" title="Error">
    Something went wrong. Please try again.
</x-alert>
```

## Custom Icon

```blade
<x-alert status="info" icon="heroicons:light-bulb">
    This alert uses a custom icon.
</x-alert>

<x-alert status="success" icon="heroicons:rocket-launch">
    Launch successful!
</x-alert>
```

## Closable Alert

```blade
<x-alert status="info" :closable="true">
    This alert can be dismissed by clicking the close button.
</x-alert>

<x-alert status="warning" title="Warning" :closable="true">
    This warning can be closed.
</x-alert>
```

## Common Patterns

### Form Validation Errors

```blade
@if($errors->any())
<x-alert status="danger" title="Validation Errors" :closable="true">
    <ul class="list-disc list-inside mt-2">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</x-alert>
@endif
```

### Success Message

```blade
@if(session('success'))
<x-alert status="success" title="Success!" :closable="true">
    {{ session('success') }}
</x-alert>
@endif
```

### Flash Messages

```blade
@if(session('message'))
<x-alert 
    status="{{ session('message_type', 'info') }}" 
    :closable="true"
>
    {{ session('message') }}
</x-alert>
@endif
```

### System Notification

```blade
<x-alert status="warning" variant="left-accent" title="Scheduled Maintenance">
    Our system will undergo scheduled maintenance on Sunday, 2:00 AM - 4:00 AM UTC.
    Some features may be temporarily unavailable during this time.
</x-alert>
```

### Account Status

```blade
@if(!auth()->user()->email_verified_at)
<x-alert status="warning" variant="top-accent" title="Email Not Verified">
    <p>Please verify your email address to access all features.</p>
    <x-button size="sm" variant="outline" class="mt-2">
        Resend Verification Email
    </x-button>
</x-alert>
@endif
```

### Trial Expiration

```blade
@if($daysLeft <= 7)
<x-alert status="warning" variant="solid" title="Trial Ending Soon">
    <p>Your trial expires in {{ $daysLeft }} days.</p>
    <x-button size="sm" color="white" variant="outline" class="mt-2">
        Upgrade Now
    </x-button>
</x-alert>
@endif
```

### Payment Failed

```blade
<x-alert status="danger" variant="left-accent" title="Payment Failed" :closable="true">
    <p>We couldn't process your payment. Please update your payment method.</p>
    <div class="flex gap-2 mt-3">
        <x-button size="sm" color="danger">Update Payment Method</x-button>
        <x-button size="sm" variant="outline">Contact Support</x-button>
    </div>
</x-alert>
```

### Feature Announcement

```blade
<x-alert status="info" variant="subtle" icon="heroicons:sparkles" title="New Feature Available!">
    <p>Check out our new dashboard analytics feature with real-time insights.</p>
    <x-link href="/features/analytics" class="font-medium underline mt-2 inline-block">
        Learn More →
    </x-link>
</x-alert>
```

### Cookie Consent

```blade
<x-alert status="info" variant="solid">
    <div class="flex items-center justify-between gap-4">
        <p>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.</p>
        <div class="flex gap-2 flex-shrink-0">
            <x-button size="sm" color="white" variant="outline">Accept</x-button>
            <x-button size="sm" color="white" variant="ghost">Learn More</x-button>
        </div>
    </div>
</x-alert>
```

### API Rate Limit

```blade
<x-alert status="warning" variant="left-accent" title="Rate Limit Warning">
    You have used 90% of your API quota for this month. 
    <x-link href="/billing/upgrade" class="font-medium underline">
        Upgrade your plan
    </x-link> 
    to increase your limits.
</x-alert>
```

### Data Export Ready

```blade
<x-alert status="success" variant="subtle" title="Export Ready" :closable="true">
    <p>Your data export is ready for download.</p>
    <x-button size="sm" color="success" class="mt-2">
        <x-icon name="heroicons:arrow-down-tray" class="w-4 h-4 mr-1" />
        Download Export
    </x-button>
</x-alert>
```

## Livewire Integration

```blade
<div>
    @if($showAlert)
    <x-alert 
        status="{{ $alertStatus }}" 
        title="{{ $alertTitle }}"
        :closable="true"
        x-on:alert-closed="$wire.hideAlert()"
    >
        {{ $alertMessage }}
    </x-alert>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class AlertDemo extends Component
{
    public $showAlert = false;
    public $alertStatus = 'info';
    public $alertTitle = '';
    public $alertMessage = '';
    
    public function showSuccess($message)
    {
        $this->showAlert = true;
        $this->alertStatus = 'success';
        $this->alertTitle = 'Success!';
        $this->alertMessage = $message;
    }
    
    public function showError($message)
    {
        $this->showAlert = true;
        $this->alertStatus = 'danger';
        $this->alertTitle = 'Error';
        $this->alertMessage = $message;
    }
    
    public function hideAlert()
    {
        $this->showAlert = false;
    }
    
    public function render()
    {
        return view('livewire.alert-demo');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    alerts: [],
    addAlert(status, message) {
        this.alerts.push({ id: Date.now(), status, message });
    },
    removeAlert(id) {
        this.alerts = this.alerts.filter(alert => alert.id !== id);
    }
}">
    <x-button @click="addAlert('success', 'Operation completed!')">
        Show Success
    </x-button>
    
    <x-button @click="addAlert('danger', 'An error occurred!')">
        Show Error
    </x-button>
    
    <div class="mt-4 space-y-2">
        <template x-for="alert in alerts" :key="alert.id">
            <x-alert 
                x-bind:status="alert.status"
                :closable="true"
                x-on:alert-closed="removeAlert(alert.id)"
            >
                <span x-text="alert.message"></span>
            </x-alert>
        </template>
    </div>
</div>
```

## Accessibility

The Alert component:
- Uses semantic `role="alert"` for screen readers
- Provides clear visual distinction between status types
- Supports keyboard navigation for closable alerts
- Includes proper ARIA labels for close button
- Emits `alert-closed` event when dismissed
- Uses smooth transitions for better UX
- Maintains proper color contrast ratios

