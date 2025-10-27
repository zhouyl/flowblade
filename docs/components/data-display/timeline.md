# Timeline

Timeline component for displaying chronological events in a vertical layout.

## Basic Usage

```blade
<x-timeline>
    <x-timeline-item 
        title="Order Placed" 
        description="Your order has been placed successfully"
        time="2 hours ago"
    />
    <x-timeline-item 
        title="Processing" 
        description="Your order is being processed"
        time="1 hour ago"
    />
    <x-timeline-item 
        title="Shipped" 
        description="Your order has been shipped"
        time="30 minutes ago"
        :is-last="true"
    />
</x-timeline>
```

## Props

### Timeline Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `variant` | `string` | `'solid'` | Variant: `solid`, `outline` |

### TimelineItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `null` | Title text |
| `description` | `string` | `null` | Description text |
| `time` | `string` | `null` | Time text |
| `icon` | `string` | `null` | Icon name |
| `color` | `string` | `null` | Color (overrides parent color) |
| `isLast` | `boolean` | `false` | Is last item (no connector line) |

## Colors

```blade
<x-timeline color="primary">
    <x-timeline-item title="Event 1" time="Now" />
    <x-timeline-item title="Event 2" time="1 hour ago" :is-last="true" />
</x-timeline>

<x-timeline color="success">
    <x-timeline-item title="Event 1" time="Now" />
    <x-timeline-item title="Event 2" time="1 hour ago" :is-last="true" />
</x-timeline>

<x-timeline color="danger">
    <x-timeline-item title="Event 1" time="Now" />
    <x-timeline-item title="Event 2" time="1 hour ago" :is-last="true" />
</x-timeline>
```

## Variants

```blade
<!-- Solid (default) -->
<x-timeline variant="solid">
    <x-timeline-item title="Event 1" time="Now" />
    <x-timeline-item title="Event 2" time="1 hour ago" :is-last="true" />
</x-timeline>

<!-- Outline -->
<x-timeline variant="outline">
    <x-timeline-item title="Event 1" time="Now" />
    <x-timeline-item title="Event 2" time="1 hour ago" :is-last="true" />
</x-timeline>
```

## Sizes

```blade
<x-timeline size="xs">
    <x-timeline-item title="Small Event" time="Now" :is-last="true" />
</x-timeline>

<x-timeline size="sm">
    <x-timeline-item title="Small Event" time="Now" :is-last="true" />
</x-timeline>

<x-timeline size="md">
    <x-timeline-item title="Medium Event" time="Now" :is-last="true" />
</x-timeline>

<x-timeline size="lg">
    <x-timeline-item title="Large Event" time="Now" :is-last="true" />
</x-timeline>

<x-timeline size="xl">
    <x-timeline-item title="Extra Large Event" time="Now" :is-last="true" />
</x-timeline>
```

## With Icons

```blade
<x-timeline>
    <x-timeline-item 
        title="Order Placed" 
        description="Your order has been placed"
        time="2 hours ago"
        icon="heroicons:shopping-cart"
    />
    <x-timeline-item 
        title="Processing" 
        description="Order is being processed"
        time="1 hour ago"
        icon="heroicons:cog"
    />
    <x-timeline-item 
        title="Shipped" 
        description="Order has been shipped"
        time="30 minutes ago"
        icon="heroicons:truck"
        :is-last="true"
    />
</x-timeline>
```

## Individual Item Colors

```blade
<x-timeline>
    <x-timeline-item 
        title="Started" 
        time="3 hours ago"
        color="info"
    />
    <x-timeline-item 
        title="In Progress" 
        time="2 hours ago"
        color="warning"
    />
    <x-timeline-item 
        title="Completed" 
        time="1 hour ago"
        color="success"
        :is-last="true"
    />
</x-timeline>
```

## With Custom Content

```blade
<x-timeline>
    <x-timeline-item 
        title="New Comment" 
        time="5 minutes ago"
    >
        <div class="mt-2 p-3 bg-gray-50 rounded">
            <p class="text-sm text-gray-700">
                This is a custom comment content with additional details.
            </p>
        </div>
    </x-timeline-item>
    
    <x-timeline-item 
        title="File Uploaded" 
        time="10 minutes ago"
    >
        <div class="mt-2 flex items-center gap-2">
            <x-icon name="heroicons:document" class="w-5 h-5 text-gray-400" />
            <span class="text-sm text-gray-600">document.pdf</span>
        </div>
    </x-timeline-item>
    
    <x-timeline-item 
        title="Status Changed" 
        time="15 minutes ago"
        :is-last="true"
    >
        <div class="mt-2">
            <x-badge color="success">Approved</x-badge>
        </div>
    </x-timeline-item>
</x-timeline>
```

## Common Patterns

### Order Tracking

```blade
<x-card>
    <x-heading size="lg" class="mb-6">Order Tracking</x-heading>
    
    <x-timeline color="success">
        <x-timeline-item 
            title="Order Placed" 
            description="Your order has been received"
            time="Oct 27, 2024 10:00 AM"
            icon="heroicons:check-circle"
        />
        <x-timeline-item 
            title="Payment Confirmed" 
            description="Payment has been processed"
            time="Oct 27, 2024 10:05 AM"
            icon="heroicons:credit-card"
        />
        <x-timeline-item 
            title="Processing" 
            description="Your order is being prepared"
            time="Oct 27, 2024 11:00 AM"
            icon="heroicons:cog"
        />
        <x-timeline-item 
            title="Shipped" 
            description="Package is on the way"
            time="Oct 27, 2024 2:00 PM"
            icon="heroicons:truck"
        />
        <x-timeline-item 
            title="Delivered" 
            description="Package has been delivered"
            time="Oct 28, 2024 9:00 AM"
            icon="heroicons:home"
            :is-last="true"
        />
    </x-timeline>
</x-card>
```

### Activity Feed

```blade
<x-card>
    <x-heading size="lg" class="mb-6">Recent Activity</x-heading>
    
    <x-timeline size="sm">
        <x-timeline-item 
            title="John Doe commented on your post" 
            time="5 minutes ago"
            icon="heroicons:chat-bubble-left"
        >
            <p class="text-sm text-gray-600 mt-1">
                "Great work on this project!"
            </p>
        </x-timeline-item>
        
        <x-timeline-item 
            title="New follower" 
            time="1 hour ago"
            icon="heroicons:user-plus"
        >
            <p class="text-sm text-gray-600 mt-1">
                Jane Smith started following you
            </p>
        </x-timeline-item>
        
        <x-timeline-item 
            title="Post published" 
            time="3 hours ago"
            icon="heroicons:document-text"
        >
            <p class="text-sm text-gray-600 mt-1">
                Your article "Getting Started with Laravel" is now live
            </p>
        </x-timeline-item>
        
        <x-timeline-item 
            title="Profile updated" 
            time="1 day ago"
            icon="heroicons:user-circle"
            :is-last="true"
        />
    </x-timeline>
</x-card>
```

### Project Milestones

```blade
<x-card>
    <x-heading size="lg" class="mb-6">Project Timeline</x-heading>
    
    <x-timeline>
        <x-timeline-item 
            title="Project Kickoff" 
            description="Initial planning and requirements gathering"
            time="Jan 1, 2024"
            color="info"
        />
        <x-timeline-item 
            title="Design Phase" 
            description="UI/UX design and prototyping"
            time="Jan 15, 2024"
            color="info"
        />
        <x-timeline-item 
            title="Development Started" 
            description="Backend and frontend development"
            time="Feb 1, 2024"
            color="warning"
        />
        <x-timeline-item 
            title="Testing Phase" 
            description="QA testing and bug fixes"
            time="Mar 1, 2024"
            color="warning"
        />
        <x-timeline-item 
            title="Launch" 
            description="Product successfully launched"
            time="Mar 15, 2024"
            color="success"
            :is-last="true"
        />
    </x-timeline>
</x-card>
```

## Livewire Integration

```blade
<x-card>
    <x-heading size="lg" class="mb-6">Activity Log</x-heading>
    
    <x-timeline>
        @foreach($activities as $index => $activity)
            <x-timeline-item 
                :title="$activity->title" 
                :description="$activity->description"
                :time="$activity->created_at->diffForHumans()"
                :icon="$activity->icon"
                :color="$activity->color"
                :is-last="$loop->last"
            />
        @endforeach
    </x-timeline>
</x-card>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    events: [
        { title: 'Event 1', time: 'Now', color: 'success' },
        { title: 'Event 2', time: '1 hour ago', color: 'info' },
        { title: 'Event 3', time: '2 hours ago', color: 'gray' }
    ]
}">
    <x-timeline>
        <template x-for="(event, index) in events" :key="index">
            <x-timeline-item 
                :title="event.title"
                :time="event.time"
                :color="event.color"
                :is-last="index === events.length - 1"
            />
        </template>
    </x-timeline>
</div>
```

## Accessibility

The Timeline component:
- Uses semantic HTML structure
- Provides clear visual hierarchy
- Supports screen readers
- Maintains proper text contrast
- Responsive layout

