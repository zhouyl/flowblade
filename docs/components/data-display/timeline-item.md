# TimelineItem

TimelineItem component for displaying individual events or milestones within a Timeline. Each item represents a point in time with associated content. Perfect for showing project history, order tracking, and process steps.

## Basic Usage

```blade
<x-timeline>
    <x-timeline-item title="Event 1" description="First event" />
    <x-timeline-item title="Event 2" description="Second event" />
    <x-timeline-item title="Event 3" description="Third event" />
</x-timeline>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `null` | Title of the timeline event |
| `description` | `string` | `null` | Description of the event |

TimelineItem also supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### Style Props

TimelineItem supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### With Timestamps

```blade
<x-timeline>
    <x-timeline-item title="Project Started" description="January 1, 2024">
        <x-text size="sm" color="gray">Initial setup and planning</x-text>
    </x-timeline-item>
    <x-timeline-item title="Development Phase" description="January 15, 2024">
        <x-text size="sm" color="gray">Core features implementation</x-text>
    </x-timeline-item>
    <x-timeline-item title="Launch" description="February 1, 2024">
        <x-text size="sm" color="gray">Public release</x-text>
    </x-timeline-item>
</x-timeline>
```

### With Icons

```blade
<x-timeline>
    <x-timeline-item title="Registered">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:check-circle" class="w-5 h-5 text-green-600" />
            <x-text>Account created successfully</x-text>
        </div>
    </x-timeline-item>
    <x-timeline-item title="Verified">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:check-circle" class="w-5 h-5 text-green-600" />
            <x-text>Email verified</x-text>
        </div>
    </x-timeline-item>
</x-timeline>
```

### With Status Badges

```blade
<x-timeline>
    <x-timeline-item title="Order Placed">
        <div class="flex items-center justify-between">
            <x-text>Your order has been placed</x-text>
            <x-badge color="success" size="sm">Completed</x-badge>
        </div>
    </x-timeline-item>
    <x-timeline-item title="Processing">
        <div class="flex items-center justify-between">
            <x-text>Order is being processed</x-text>
            <x-badge color="info" size="sm">In Progress</x-badge>
        </div>
    </x-timeline-item>
</x-timeline>
```

## Common Patterns

### Project Milestones

```blade
<x-timeline>
    <x-timeline-item title="Project Kickoff" description="January 1, 2024">
        <x-text size="sm" color="gray">Team assembled and requirements gathered</x-text>
    </x-timeline-item>
    <x-timeline-item title="Design Phase" description="January 15, 2024">
        <x-text size="sm" color="gray">UI/UX design completed and approved</x-text>
    </x-timeline-item>
    <x-timeline-item title="Development" description="February 1, 2024">
        <x-text size="sm" color="gray">Core features implementation started</x-text>
    </x-timeline-item>
    <x-timeline-item title="Testing" description="March 1, 2024">
        <x-text size="sm" color="gray">QA testing and bug fixes</x-text>
    </x-timeline-item>
    <x-timeline-item title="Launch" description="March 15, 2024">
        <x-text size="sm" color="gray">Public release</x-text>
    </x-timeline-item>
</x-timeline>
```

## Accessibility

The TimelineItem component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Should be used within a Timeline component
- Works with screen readers
- Supports keyboard navigation
- Properly announces timeline events to screen readers
- Supports proper ARIA attributes for event information

