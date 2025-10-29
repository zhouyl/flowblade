# Status

Status indicator component for displaying status with color-coded indicators. Status provides a flexible way to display status indicators.

## Basic Usage

```blade
<x-status status="online" label="Online" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `status` | `string` | `'info'` | Status type: `online`, `offline`, `away`, `busy`, `success`, `warning`, `danger`, `info` |
| `variant` | `string` | `'dot'` | Variant: `dot`, `badge`, `pill` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg` |
| `label` | `string` | `null` | Status label text |
| `pulse` | `bool` | `false` | Whether to show pulse animation |

### Style Props

Status supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Status Types

### Online Status

```blade
<x-status status="online" label="Online" />
```

### Offline Status

```blade
<x-status status="offline" label="Offline" />
```

### Away Status

```blade
<x-status status="away" label="Away" />
```

### Busy Status

```blade
<x-status status="busy" label="Busy" />
```

### Success Status

```blade
<x-status status="success" label="Success" />
```

### Warning Status

```blade
<x-status status="warning" label="Warning" />
```

### Danger Status

```blade
<x-status status="danger" label="Danger" />
```

### Info Status

```blade
<x-status status="info" label="Info" />
```

## Variants

### Dot Variant (Default)

```blade
<x-status status="online" label="Online" variant="dot" />
```

### Badge Variant

```blade
<x-status status="online" label="Online" variant="badge" />
```

### Pill Variant

```blade
<x-status status="online" label="Online" variant="pill" />
```

## Sizes

```blade
<x-status status="online" label="Online" size="xs" />
<x-status status="online" label="Online" size="sm" />
<x-status status="online" label="Online" size="md" />
<x-status status="online" label="Online" size="lg" />
```

## With Pulse Animation

```blade
<x-status status="online" label="Online" :pulse="true" />
```

## Without Label

```blade
<x-status status="online" />
```

## All Variants with Different Status

### Dot Variant

```blade
<div class="flex flex-wrap gap-4">
    <x-status status="online" label="Online" variant="dot" />
    <x-status status="offline" label="Offline" variant="dot" />
    <x-status status="away" label="Away" variant="dot" />
    <x-status status="busy" label="Busy" variant="dot" />
</div>
```

### Badge Variant

```blade
<div class="flex flex-wrap gap-4">
    <x-status status="success" label="Success" variant="badge" />
    <x-status status="warning" label="Warning" variant="badge" />
    <x-status status="danger" label="Danger" variant="badge" />
    <x-status status="info" label="Info" variant="badge" />
</div>
```

### Pill Variant

```blade
<div class="flex flex-wrap gap-4">
    <x-status status="online" label="Online" variant="pill" :pulse="true" />
    <x-status status="offline" label="Offline" variant="pill" />
    <x-status status="away" label="Away" variant="pill" />
    <x-status status="busy" label="Busy" variant="pill" />
</div>
```

## Common Patterns

### User List with Status

```blade
<x-card>
    <x-card-body>
        <div class="space-y-4">
            @foreach($users as $user)
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <x-avatar :src="$user->avatar" :name="$user->name" />
                    <div>
                        <x-text weight="medium">{{ $user->name }}</x-text>
                        <x-text size="sm" color="gray">{{ $user->email }}</x-text>
                    </div>
                </div>
                
                <x-status 
                    :status="$user->is_online ? 'online' : 'offline'" 
                    :label="$user->is_online ? 'Online' : 'Offline'"
                    :pulse="$user->is_online"
                />
            </div>
            @endforeach
        </div>
    </x-card-body>
</x-card>
```

### Server Status Dashboard

```blade
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach($servers as $server)
    <x-card>
        <x-card-body>
            <div class="flex items-center justify-between mb-3">
                <x-heading size="md">{{ $server->name }}</x-heading>
                <x-status 
                    :status="$server->status" 
                    variant="pill"
                    :pulse="$server->status === 'online'"
                />
            </div>
            
            <div class="space-y-2">
                <div class="flex justify-between">
                    <x-text size="sm" color="gray">CPU Usage</x-text>
                    <x-text size="sm" weight="medium">{{ $server->cpu_usage }}%</x-text>
                </div>
                <x-progress :value="$server->cpu_usage" size="sm" />
                
                <div class="flex justify-between">
                    <x-text size="sm" color="gray">Memory</x-text>
                    <x-text size="sm" weight="medium">{{ $server->memory_usage }}%</x-text>
                </div>
                <x-progress :value="$server->memory_usage" size="sm" />
            </div>
        </x-card-body>
    </x-card>
    @endforeach
</div>
```

### Order Status

```blade
<x-table>
    <x-table-header>
        <x-table-row>
            <x-table-head>Order ID</x-table-head>
            <x-table-head>Customer</x-table-head>
            <x-table-head>Amount</x-table-head>
            <x-table-head>Status</x-table-head>
        </x-table-row>
    </x-table-header>
    <x-table-body>
        @foreach($orders as $order)
        <x-table-row>
            <x-table-cell>{{ $order->id }}</x-table-cell>
            <x-table-cell>{{ $order->customer_name }}</x-table-cell>
            <x-table-cell>${{ number_format($order->amount, 2) }}</x-table-cell>
            <x-table-cell>
                @php
                    $statusMap = [
                        'pending' => 'warning',
                        'processing' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                    ];
                @endphp
                <x-status 
                    :status="$statusMap[$order->status]" 
                    :label="ucfirst($order->status)"
                    variant="badge"
                />
            </x-table-cell>
        </x-table-row>
        @endforeach
    </x-table-body>
</x-table>
```

### Service Health Status

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Service Health</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <x-text weight="medium">API Server</x-text>
                    <x-text size="sm" color="gray">api.example.com</x-text>
                </div>
                <x-status status="online" label="Operational" variant="pill" :pulse="true" />
            </div>
            
            <x-separator />
            
            <div class="flex items-center justify-between">
                <div>
                    <x-text weight="medium">Database</x-text>
                    <x-text size="sm" color="gray">db.example.com</x-text>
                </div>
                <x-status status="online" label="Operational" variant="pill" :pulse="true" />
            </div>
            
            <x-separator />
            
            <div class="flex items-center justify-between">
                <div>
                    <x-text weight="medium">Cache Server</x-text>
                    <x-text size="sm" color="gray">cache.example.com</x-text>
                </div>
                <x-status status="warning" label="Degraded" variant="pill" />
            </div>
            
            <x-separator />
            
            <div class="flex items-center justify-between">
                <div>
                    <x-text weight="medium">Email Service</x-text>
                    <x-text size="sm" color="gray">smtp.example.com</x-text>
                </div>
                <x-status status="danger" label="Down" variant="pill" />
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Task Status

```blade
<div class="space-y-3">
    @foreach($tasks as $task)
    <x-card>
        <x-card-body>
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <x-text weight="medium">{{ $task->title }}</x-text>
                    <x-text size="sm" color="gray" class="mt-1">{{ $task->description }}</x-text>
                </div>
                
                @php
                    $statusConfig = [
                        'todo' => ['status' => 'info', 'label' => 'To Do'],
                        'in_progress' => ['status' => 'warning', 'label' => 'In Progress'],
                        'review' => ['status' => 'away', 'label' => 'In Review'],
                        'done' => ['status' => 'success', 'label' => 'Done'],
                    ];
                    $config = $statusConfig[$task->status];
                @endphp
                
                <x-status 
                    :status="$config['status']" 
                    :label="$config['label']"
                    variant="badge"
                />
            </div>
        </x-card-body>
    </x-card>
    @endforeach
</div>
```

### Chat User Status

```blade
<div class="space-y-2">
    @foreach($chatUsers as $user)
    <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
        <div class="relative">
            <x-avatar :src="$user->avatar" :name="$user->name" size="md" />
            <span class="absolute bottom-0 right-0">
                <x-status 
                    :status="$user->online_status" 
                    size="sm"
                    :pulse="$user->online_status === 'online'"
                />
            </span>
        </div>
        
        <div class="flex-1">
            <x-text weight="medium">{{ $user->name }}</x-text>
            @if($user->online_status === 'online')
            <x-text size="sm" color="gray">Active now</x-text>
            @else
            <x-text size="sm" color="gray">Last seen {{ $user->last_seen->diffForHumans() }}</x-text>
            @endif
        </div>
    </div>
    @endforeach
</div>
```

### Payment Status

```blade
<x-card>
    <x-card-body>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <x-text weight="medium">Payment Status</x-text>
                @if($payment->status === 'paid')
                <x-status status="success" label="Paid" variant="pill" />
                @elseif($payment->status === 'pending')
                <x-status status="warning" label="Pending" variant="pill" />
                @elseif($payment->status === 'failed')
                <x-status status="danger" label="Failed" variant="pill" />
                @else
                <x-status status="info" label="Processing" variant="pill" />
                @endif
            </div>
            
            <x-separator />
            
            <div class="space-y-2">
                <div class="flex justify-between">
                    <x-text size="sm" color="gray">Amount</x-text>
                    <x-text size="sm" weight="medium">${{ number_format($payment->amount, 2) }}</x-text>
                </div>
                <div class="flex justify-between">
                    <x-text size="sm" color="gray">Transaction ID</x-text>
                    <x-text size="sm" weight="medium">{{ $payment->transaction_id }}</x-text>
                </div>
                <div class="flex justify-between">
                    <x-text size="sm" color="gray">Date</x-text>
                    <x-text size="sm" weight="medium">{{ $payment->created_at->format('M d, Y') }}</x-text>
                </div>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Deployment Status

```blade
<div class="space-y-4">
    @foreach($deployments as $deployment)
    <x-card>
        <x-card-body>
            <div class="flex items-center justify-between mb-3">
                <div>
                    <x-text weight="medium">{{ $deployment->environment }}</x-text>
                    <x-text size="sm" color="gray">{{ $deployment->branch }}</x-text>
                </div>
                
                @if($deployment->status === 'success')
                <x-status status="success" label="Deployed" variant="badge" />
                @elseif($deployment->status === 'in_progress')
                <x-status status="warning" label="Deploying" variant="badge" :pulse="true" />
                @elseif($deployment->status === 'failed')
                <x-status status="danger" label="Failed" variant="badge" />
                @endif
            </div>
            
            @if($deployment->status === 'in_progress')
            <x-progress :value="$deployment->progress" :show-value="true" />
            @endif
        </x-card-body>
    </x-card>
    @endforeach
</div>
```

## Livewire Integration

```blade
<div>
    <div class="flex items-center gap-3">
        <x-avatar :src="$user->avatar" :name="$user->name" size="lg" />
        
        <div>
            <x-text weight="medium">{{ $user->name }}</x-text>
            <x-status 
                :status="$userStatus" 
                :label="ucfirst($userStatus)"
                :pulse="$userStatus === 'online'"
            />
        </div>
    </div>
    
    <div class="mt-4 space-x-2">
        <x-button wire:click="setStatus('online')" size="sm">Set Online</x-button>
        <x-button wire:click="setStatus('away')" size="sm">Set Away</x-button>
        <x-button wire:click="setStatus('busy')" size="sm">Set Busy</x-button>
        <x-button wire:click="setStatus('offline')" size="sm">Set Offline</x-button>
    </div>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class UserStatus extends Component
{
    public $userStatus = 'online';
    
    public function setStatus($status)
    {
        $this->userStatus = $status;
        // Update user status in database
        auth()->user()->update(['status' => $status]);
    }
    
    public function render()
    {
        return view('livewire.user-status');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ status: 'online' }">
    <div class="flex items-center gap-3 mb-4">
        <x-text weight="medium">Current Status:</x-text>
        <x-status 
            x-bind:status="status" 
            x-bind:label="status.charAt(0).toUpperCase() + status.slice(1)"
            variant="pill"
            x-bind:pulse="status === 'online'"
        />
    </div>
    
    <div class="space-x-2">
        <x-button @click="status = 'online'" size="sm">Online</x-button>
        <x-button @click="status = 'away'" size="sm">Away</x-button>
        <x-button @click="status = 'busy'" size="sm">Busy</x-button>
        <x-button @click="status = 'offline'" size="sm">Offline</x-button>
    </div>
</div>
```

## Accessibility

The Status component:
- Uses semantic HTML for proper structure
- Provides visual feedback with color-coded indicators
- Supports text labels for screen readers
- Maintains proper color contrast ratios
- Works with keyboard navigation
- Uses animations sparingly with the pulse option
- Supports multiple variants for different contexts

