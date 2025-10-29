# Stat

Stat component for displaying statistics, metrics, and key performance indicators. Stat provides a flexible way to display metrics with support for icons and trend indicators.

## Basic Usage

```blade
<x-stat
    label="Total Revenue"
    value="$45,231"
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Label text |
| `value` | `string` | `null` | Value text |
| `helpText` | `string` | `null` | Help text |
| `icon` | `string` | `null` | Icon name |
| `trend` | `string` | `null` | Trend: `up`, `down`, `neutral` |
| `trendValue` | `string` | `null` | Trend value text |

## Style Props

Stat supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## With Icon

```blade
<x-stat 
    label="Total Users" 
    value="1,234" 
    icon="heroicons:users"
/>
```

## With Trend

```blade
<x-stat 
    label="Revenue" 
    value="$45,231" 
    trend="up" 
    trend-value="+12.5%"
    help-text="from last month"
/>

<x-stat 
    label="Bounce Rate" 
    value="32.4%" 
    trend="down" 
    trend-value="-5.2%"
    help-text="from last month"
/>

<x-stat 
    label="Conversion Rate" 
    value="3.2%" 
    trend="neutral" 
    trend-value="0%"
    help-text="no change"
/>
```

## With Help Text

```blade
<x-stat 
    label="Active Users" 
    value="892" 
    help-text="Currently online"
/>
```

## Common Patterns

### Dashboard Stats Grid

```blade
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-card>
        <x-card-body>
            <x-stat 
                label="Total Revenue" 
                value="$45,231" 
                icon="heroicons:currency-dollar"
                trend="up" 
                trend-value="+12.5%"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="New Customers" 
                value="1,234" 
                icon="heroicons:users"
                trend="up" 
                trend-value="+8.2%"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="Orders" 
                value="892" 
                icon="heroicons:shopping-cart"
                trend="down" 
                trend-value="-3.1%"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="Conversion Rate" 
                value="3.24%" 
                icon="heroicons:chart-bar"
                trend="up" 
                trend-value="+1.2%"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
</div>
```

### Simple Stats

```blade
<div class="grid grid-cols-3 gap-4">
    <x-stat label="Total Views" value="12,345" />
    <x-stat label="Total Likes" value="1,234" />
    <x-stat label="Total Shares" value="234" />
</div>
```

### Stats with Custom Content

```blade
<x-card>
    <x-card-body>
        <x-stat label="Revenue Growth">
            <x-slot:value>
                <span class="text-green-600">$45,231</span>
            </x-slot:value>
            
            <div class="mt-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Target: $50,000</span>
                    <span class="font-medium">90.5%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                    <div class="bg-green-600 h-2 rounded-full" style="width: 90.5%"></div>
                </div>
            </div>
        </x-stat>
    </x-card-body>
</x-card>
```

### Analytics Dashboard

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Analytics Overview</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-stat 
                label="Page Views" 
                value="45,231" 
                icon="heroicons:eye"
                trend="up" 
                trend-value="+12.5%"
                help-text="vs last week"
            />
            
            <x-stat 
                label="Unique Visitors" 
                value="12,345" 
                icon="heroicons:user-group"
                trend="up" 
                trend-value="+8.2%"
                help-text="vs last week"
            />
            
            <x-stat 
                label="Avg. Session" 
                value="4m 32s" 
                icon="heroicons:clock"
                trend="down" 
                trend-value="-2.1%"
                help-text="vs last week"
            />
        </div>
    </x-card-body>
</x-card>
```

### E-commerce Stats

```blade
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-card variant="outline">
        <x-card-body>
            <x-stat 
                label="Total Sales" 
                value="$124,563" 
                icon="heroicons:banknotes"
                trend="up" 
                trend-value="+15.3%"
            />
        </x-card-body>
    </x-card>
    
    <x-card variant="outline">
        <x-card-body>
            <x-stat 
                label="Orders" 
                value="1,234" 
                icon="heroicons:shopping-bag"
                trend="up" 
                trend-value="+8.7%"
            />
        </x-card-body>
    </x-card>
    
    <x-card variant="outline">
        <x-card-body>
            <x-stat 
                label="Avg. Order Value" 
                value="$101.23" 
                icon="heroicons:calculator"
                trend="up" 
                trend-value="+3.2%"
            />
        </x-card-body>
    </x-card>
    
    <x-card variant="outline">
        <x-card-body>
            <x-stat 
                label="Conversion Rate" 
                value="3.24%" 
                icon="heroicons:arrow-trending-up"
                trend="neutral" 
                trend-value="0%"
            />
        </x-card-body>
    </x-card>
</div>
```

### User Engagement Stats

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">User Engagement</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="space-y-6">
            <x-stat 
                label="Active Users" 
                value="892" 
                icon="heroicons:user-circle"
                trend="up" 
                trend-value="+12 users"
                help-text="Currently online"
            />
            
            <x-separator />
            
            <x-stat 
                label="New Signups" 
                value="234" 
                icon="heroicons:user-plus"
                trend="up" 
                trend-value="+45 today"
                help-text="This week"
            />
            
            <x-separator />
            
            <x-stat 
                label="Retention Rate" 
                value="87.5%" 
                icon="heroicons:arrow-path"
                trend="up" 
                trend-value="+2.3%"
                help-text="30-day retention"
            />
        </div>
    </x-card-body>
</x-card>
```

### Server Stats

```blade
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <x-card>
        <x-card-body>
            <x-stat 
                label="CPU Usage" 
                value="45%" 
                icon="heroicons:cpu-chip"
                trend="up" 
                trend-value="+5%"
                help-text="8 cores"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="Memory" 
                value="12.4 GB" 
                icon="heroicons:circle-stack"
                trend="neutral" 
                trend-value="0%"
                help-text="of 16 GB"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="Disk Space" 
                value="234 GB" 
                icon="heroicons:server"
                trend="up" 
                trend-value="+12 GB"
                help-text="of 500 GB"
            />
        </x-card-body>
    </x-card>
</div>
```

### Social Media Stats

```blade
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <x-card variant="filled">
        <x-card-body>
            <x-stat 
                label="Followers" 
                value="12.5K" 
                trend="up" 
                trend-value="+234"
            />
        </x-card-body>
    </x-card>
    
    <x-card variant="filled">
        <x-card-body>
            <x-stat 
                label="Likes" 
                value="45.2K" 
                trend="up" 
                trend-value="+1.2K"
            />
        </x-card-body>
    </x-card>
    
    <x-card variant="filled">
        <x-card-body>
            <x-stat 
                label="Comments" 
                value="3.4K" 
                trend="up" 
                trend-value="+234"
            />
        </x-card-body>
    </x-card>
    
    <x-card variant="filled">
        <x-card-body>
            <x-stat 
                label="Shares" 
                value="892" 
                trend="down" 
                trend-value="-12"
            />
        </x-card-body>
    </x-card>
</div>
```

## Livewire Integration

```blade
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <x-card>
        <x-card-body>
            <x-stat 
                label="Total Revenue" 
                :value="$stats['revenue']" 
                icon="heroicons:currency-dollar"
                :trend="$stats['revenue_trend']" 
                :trend-value="$stats['revenue_change']"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="New Users" 
                :value="$stats['users']" 
                icon="heroicons:users"
                :trend="$stats['users_trend']" 
                :trend-value="$stats['users_change']"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
    
    <x-card>
        <x-card-body>
            <x-stat 
                label="Conversion" 
                :value="$stats['conversion']" 
                icon="heroicons:chart-bar"
                :trend="$stats['conversion_trend']" 
                :trend-value="$stats['conversion_change']"
                help-text="from last month"
            />
        </x-card-body>
    </x-card>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    stats: {
        revenue: '$45,231',
        users: '1,234',
        orders: '892'
    }
}">
    <div class="grid grid-cols-3 gap-4">
        <x-card>
            <x-card-body>
                <x-stat 
                    label="Revenue" 
                    x-bind:value="stats.revenue"
                />
            </x-card-body>
        </x-card>
        
        <x-card>
            <x-card-body>
                <x-stat 
                    label="Users" 
                    x-bind:value="stats.users"
                />
            </x-card-body>
        </x-card>
        
        <x-card>
            <x-card-body>
                <x-stat 
                    label="Orders" 
                    x-bind:value="stats.orders"
                />
            </x-card-body>
        </x-card>
    </div>
</div>
```

## Accessibility

The Stat component:
- Uses semantic HTML structure
- Provides clear visual hierarchy
- Maintains proper color contrast
- Works with screen readers
- Supports keyboard navigation

