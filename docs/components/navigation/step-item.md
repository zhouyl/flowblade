# StepItem

StepItem component for displaying individual steps within a Steps component. Used for showing progress through a multi-step process.

## Basic Usage

```blade
<x-steps>
    <x-step-item title="Step 1" description="First step" />
    <x-step-item title="Step 2" description="Second step" />
    <x-step-item title="Step 3" description="Third step" />
</x-steps>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `null` | Step title |
| `description` | `string` | `null` | Step description |
| `status` | `string` | `'pending'` | Status: `pending`, `active`, `completed` |

StepItem also supports all common style props for flexible styling.

## Examples

### Basic Steps

```blade
<x-steps>
    <x-step-item title="Account" description="Create your account" status="completed" />
    <x-step-item title="Profile" description="Complete your profile" status="active" />
    <x-step-item title="Verification" description="Verify your email" status="pending" />
</x-steps>
```

### Checkout Steps

```blade
<x-steps>
    <x-step-item title="Cart" description="Review items" status="completed" />
    <x-step-item title="Shipping" description="Enter address" status="completed" />
    <x-step-item title="Payment" description="Enter payment" status="active" />
    <x-step-item title="Confirmation" description="Order confirmation" status="pending" />
</x-steps>
```

## Accessibility

The StepItem component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear step indication

