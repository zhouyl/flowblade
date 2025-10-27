# Spinner

Spinner component for displaying loading states and indicating ongoing processes.

## Basic Usage

```blade
<x-spinner />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray`, `white` |
| `variant` | `string` | `'spinner'` | Variant: `spinner`, `dots`, `pulse`, `ring` |
| `label` | `string` | `'Loading...'` | Accessible label for screen readers |

## Variants

### Spinner Variant (Default)

```blade
<x-spinner variant="spinner" />
```

### Dots Variant

```blade
<x-spinner variant="dots" />
```

### Pulse Variant

```blade
<x-spinner variant="pulse" />
```

### Ring Variant

```blade
<x-spinner variant="ring" />
```

## Sizes

```blade
<x-spinner size="xs" />
<x-spinner size="sm" />
<x-spinner size="md" />
<x-spinner size="lg" />
<x-spinner size="xl" />
```

## Colors

```blade
<x-spinner color="primary" />
<x-spinner color="secondary" />
<x-spinner color="success" />
<x-spinner color="warning" />
<x-spinner color="danger" />
<x-spinner color="info" />
<x-spinner color="gray" />
<x-spinner color="white" />
```

## All Variants with Colors

### Spinner Variant

```blade
<x-spinner variant="spinner" color="primary" />
<x-spinner variant="spinner" color="success" />
<x-spinner variant="spinner" color="warning" />
<x-spinner variant="spinner" color="danger" />
```

### Dots Variant

```blade
<x-spinner variant="dots" color="primary" />
<x-spinner variant="dots" color="success" />
<x-spinner variant="dots" color="warning" />
<x-spinner variant="dots" color="danger" />
```

### Pulse Variant

```blade
<x-spinner variant="pulse" color="primary" />
<x-spinner variant="pulse" color="success" />
<x-spinner variant="pulse" color="warning" />
<x-spinner variant="pulse" color="danger" />
```

### Ring Variant

```blade
<x-spinner variant="ring" color="primary" />
<x-spinner variant="ring" color="success" />
<x-spinner variant="ring" color="warning" />
<x-spinner variant="ring" color="danger" />
```

## Common Patterns

### Button Loading State

```blade
<x-button color="primary" :disabled="$loading">
    @if($loading)
        <x-spinner size="sm" color="white" class="mr-2" />
    @endif
    {{ $loading ? 'Saving...' : 'Save Changes' }}
</x-button>
```

### Page Loading

```blade
<div class="flex items-center justify-center min-h-screen">
    <div class="text-center">
        <x-spinner size="xl" color="primary" />
        <x-text class="mt-4" color="gray">Loading your content...</x-text>
    </div>
</div>
```

### Card Loading

```blade
<x-card>
    <x-card-body>
        @if($loading)
        <div class="flex items-center justify-center py-12">
            <x-spinner size="lg" />
        </div>
        @else
        <div>
            <!-- Card content -->
        </div>
        @endif
    </x-card-body>
</x-card>
```

### Inline Loading

```blade
<div class="flex items-center gap-2">
    <x-spinner size="sm" />
    <x-text>Processing your request...</x-text>
</div>
```

### Table Loading

```blade
<x-table>
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
            <x-table-head>Status</x-table-head>
        </x-table-row>
    </x-table-header>
    <x-table-body>
        @if($loading)
        <x-table-row>
            <x-table-cell colspan="3" class="text-center py-12">
                <x-spinner size="lg" />
                <x-text class="mt-2" color="gray">Loading data...</x-text>
            </x-table-cell>
        </x-table-row>
        @else
        @foreach($users as $user)
        <x-table-row>
            <x-table-cell>{{ $user->name }}</x-table-cell>
            <x-table-cell>{{ $user->email }}</x-table-cell>
            <x-table-cell>{{ $user->status }}</x-table-cell>
        </x-table-row>
        @endforeach
        @endif
    </x-table-body>
</x-table>
```

### Form Submission

```blade
<form wire:submit.prevent="submit">
    <x-field label="Name">
        <x-input name="name" wire:model="name" />
    </x-field>
    
    <x-field label="Email">
        <x-input type="email" name="email" wire:model="email" />
    </x-field>
    
    <x-button type="submit" color="primary" :disabled="$submitting">
        @if($submitting)
            <x-spinner size="sm" color="white" class="mr-2" />
            Submitting...
        @else
            Submit
        @endif
    </x-button>
</form>
```

### Search Loading

```blade
<div>
    <x-input 
        type="search" 
        placeholder="Search..." 
        wire:model.debounce.300ms="search"
    />
    
    <div class="mt-4">
        @if($searching)
        <div class="flex items-center gap-2">
            <x-spinner size="sm" variant="dots" />
            <x-text color="gray">Searching...</x-text>
        </div>
        @else
        <div>
            <!-- Search results -->
        </div>
        @endif
    </div>
</div>
```

### File Upload

```blade
<div x-data="{ uploading: false }">
    <input 
        type="file" 
        @change="uploading = true"
        class="hidden"
        id="file-upload"
    />
    
    <label for="file-upload" class="cursor-pointer">
        <x-button as="span" color="primary">
            <template x-if="uploading">
                <x-spinner size="sm" color="white" class="mr-2" />
            </template>
            <span x-text="uploading ? 'Uploading...' : 'Choose File'"></span>
        </x-button>
    </label>
</div>
```

### Lazy Loading Content

```blade
<div 
    x-data="{ loading: true }"
    x-init="setTimeout(() => loading = false, 2000)"
>
    <template x-if="loading">
        <div class="flex items-center justify-center py-8">
            <x-spinner variant="ring" size="lg" />
        </div>
    </template>
    
    <template x-if="!loading">
        <div>
            <!-- Loaded content -->
        </div>
    </template>
</div>
```

### Infinite Scroll

```blade
<div>
    @foreach($items as $item)
    <div class="p-4 border-b">
        {{ $item->title }}
    </div>
    @endforeach
    
    @if($hasMore)
    <div class="flex justify-center py-4" wire:loading wire:target="loadMore">
        <x-spinner variant="dots" />
    </div>
    @endif
</div>
```

### Modal Loading

```blade
<x-modal :open="$showModal">
    <x-modal-header>
        <x-heading size="lg">Loading Data</x-heading>
    </x-modal-header>
    
    <x-modal-body>
        @if($loading)
        <div class="flex flex-col items-center justify-center py-12">
            <x-spinner size="xl" variant="pulse" />
            <x-text class="mt-4" color="gray">Please wait...</x-text>
        </div>
        @else
        <div>
            <!-- Modal content -->
        </div>
        @endif
    </x-modal-body>
</x-modal>
```

## Livewire Integration

```blade
<div>
    <x-button wire:click="loadData" color="primary">
        Load Data
    </x-button>
    
    <div wire:loading wire:target="loadData" class="mt-4">
        <div class="flex items-center gap-2">
            <x-spinner size="sm" />
            <x-text>Loading data...</x-text>
        </div>
    </div>
    
    <div wire:loading.remove wire:target="loadData" class="mt-4">
        @if($data)
        <div>
            <!-- Display data -->
        </div>
        @endif
    </div>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class DataLoader extends Component
{
    public $data = null;
    
    public function loadData()
    {
        sleep(2); // Simulate loading
        $this->data = ['item1', 'item2', 'item3'];
    }
    
    public function render()
    {
        return view('livewire.data-loader');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    loading: false,
    async fetchData() {
        this.loading = true;
        await fetch('/api/data');
        this.loading = false;
    }
}">
    <x-button @click="fetchData()" color="primary">
        Fetch Data
    </x-button>
    
    <div x-show="loading" class="mt-4">
        <div class="flex items-center gap-2">
            <x-spinner size="sm" variant="dots" />
            <span>Loading...</span>
        </div>
    </div>
</div>
```

## Accessibility

The Spinner component:
- Uses semantic `role="status"` for screen readers
- Includes `aria-label` for accessibility
- Provides `.sr-only` text for screen reader users
- Supports custom labels via the `label` prop
- Uses CSS animations for smooth performance
- Works with keyboard navigation
- Maintains proper color contrast

