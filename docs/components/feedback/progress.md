# Progress

Progress component for displaying progress indicators and completion status. Progress provides a flexible way to display progress bars.

## Basic Usage

```blade
<x-progress :value="50" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `int\|float` | `0` | Current progress value (0-100) |
| `max` | `int\|float` | `100` | Maximum value |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `variant` | `string` | `'default'` | Variant: `default`, `striped`, `animated` |
| `showValue` | `bool` | `false` | Whether to show the percentage value |
| `label` | `string` | `null` | Custom label text |
| `indeterminate` | `bool` | `false` | Whether the progress is indeterminate |

### Style Props

Progress supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

```blade
<x-progress :value="50" size="xs" />
<x-progress :value="50" size="sm" />
<x-progress :value="50" size="md" />
<x-progress :value="50" size="lg" />
<x-progress :value="50" size="xl" />
```

## Colors

```blade
<x-progress :value="50" color="primary" />
<x-progress :value="50" color="secondary" />
<x-progress :value="50" color="success" />
<x-progress :value="50" color="warning" />
<x-progress :value="50" color="danger" />
<x-progress :value="50" color="info" />
<x-progress :value="50" color="gray" />
```

## Variants

### Default Variant

```blade
<x-progress :value="75" variant="default" />
```

### Striped Variant

```blade
<x-progress :value="75" variant="striped" />
```

### Animated Variant

```blade
<x-progress :value="75" variant="animated" />
```

## With Label

```blade
<x-progress :value="60" label="Upload Progress" />
```

## With Value Display

```blade
<x-progress :value="45" :show-value="true" />
```

## With Label and Value

```blade
<x-progress :value="80" label="Downloading..." :show-value="true" />
```

## Indeterminate Progress

```blade
<x-progress :indeterminate="true" label="Loading..." />
```

## Different Progress Levels

```blade
<x-progress :value="25" color="danger" label="Low Progress" :show-value="true" />
<x-progress :value="50" color="warning" label="Medium Progress" :show-value="true" />
<x-progress :value="75" color="info" label="High Progress" :show-value="true" />
<x-progress :value="100" color="success" label="Complete" :show-value="true" />
```

## Common Patterns

### File Upload

```blade
<x-card>
    <x-card-body>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <x-icon name="heroicons:document" class="w-8 h-8 text-gray-400" />
                    <div>
                        <x-text weight="medium">document.pdf</x-text>
                        <x-text size="sm" color="gray">2.4 MB</x-text>
                    </div>
                </div>
                <x-text size="sm" color="gray">{{ $uploadProgress }}%</x-text>
            </div>
            
            <x-progress 
                :value="$uploadProgress" 
                color="primary" 
                variant="animated"
            />
        </div>
    </x-card-body>
</x-card>
```

### Download Progress

```blade
<div class="space-y-2">
    <div class="flex items-center justify-between">
        <x-text weight="medium">Downloading update...</x-text>
        <x-text size="sm" color="gray">{{ $downloadedMB }} / {{ $totalMB }} MB</x-text>
    </div>
    
    <x-progress 
        :value="($downloadedMB / $totalMB) * 100" 
        color="info"
        size="lg"
    />
</div>
```

### Installation Steps

```blade
<div class="space-y-6">
    <x-heading size="lg">Installation Progress</x-heading>
    
    <div class="space-y-4">
        <div>
            <x-progress 
                :value="100" 
                color="success" 
                label="1. Download packages"
                :show-value="true"
            />
        </div>
        
        <div>
            <x-progress 
                :value="100" 
                color="success" 
                label="2. Extract files"
                :show-value="true"
            />
        </div>
        
        <div>
            <x-progress 
                :value="65" 
                color="primary" 
                label="3. Configure settings"
                :show-value="true"
                variant="animated"
            />
        </div>
        
        <div>
            <x-progress 
                :value="0" 
                color="gray" 
                label="4. Finalize installation"
                :show-value="true"
            />
        </div>
    </div>
</div>
```

### Profile Completion

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Complete Your Profile</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-progress 
            :value="$completionPercentage" 
            :color="$completionPercentage < 50 ? 'danger' : ($completionPercentage < 80 ? 'warning' : 'success')"
            label="Profile Completion"
            :show-value="true"
            size="lg"
        />
        
        <div class="mt-4 space-y-2">
            <x-text size="sm" color="gray">Complete the following to reach 100%:</x-text>
            <ul class="list-disc list-inside space-y-1 text-sm text-gray-600">
                @if(!$user->avatar)
                <li>Add profile picture</li>
                @endif
                @if(!$user->bio)
                <li>Write a bio</li>
                @endif
                @if(!$user->phone)
                <li>Add phone number</li>
                @endif
            </ul>
        </div>
    </x-card-body>
</x-card>
```

### Quiz Progress

```blade
<div class="space-y-4">
    <div class="flex items-center justify-between">
        <x-heading size="md">Quiz Progress</x-heading>
        <x-text>Question {{ $currentQuestion }} of {{ $totalQuestions }}</x-text>
    </div>
    
    <x-progress 
        :value="($currentQuestion / $totalQuestions) * 100" 
        color="primary"
        size="lg"
    />
</div>
```

### Storage Usage

```blade
<x-card>
    <x-card-body>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <x-text weight="medium">Storage Usage</x-text>
                <x-text size="sm" color="gray">{{ $usedGB }} GB / {{ $totalGB }} GB</x-text>
            </div>
            
            <x-progress 
                :value="($usedGB / $totalGB) * 100" 
                :color="($usedGB / $totalGB) > 0.9 ? 'danger' : (($usedGB / $totalGB) > 0.7 ? 'warning' : 'success')"
                size="lg"
            />
            
            @if(($usedGB / $totalGB) > 0.9)
            <x-alert status="warning" size="sm">
                You're running out of storage space. Consider upgrading your plan.
            </x-alert>
            @endif
        </div>
    </x-card-body>
</x-card>
```

### Task Completion

```blade
<div class="space-y-3">
    <x-heading size="lg">Project Tasks</x-heading>
    
    <x-progress 
        :value="($completedTasks / $totalTasks) * 100" 
        label="Overall Progress"
        :show-value="true"
        color="success"
        size="lg"
    />
    
    <x-text size="sm" color="gray">
        {{ $completedTasks }} of {{ $totalTasks }} tasks completed
    </x-text>
</div>
```

### Loading Data

```blade
<div class="space-y-2">
    <x-text weight="medium">Loading your data...</x-text>
    <x-progress :indeterminate="true" color="primary" />
</div>
```

### Multi-step Form

```blade
<div class="space-y-6">
    <div>
        <x-text size="sm" color="gray" class="mb-2">
            Step {{ $currentStep }} of {{ $totalSteps }}
        </x-text>
        <x-progress 
            :value="($currentStep / $totalSteps) * 100" 
            color="primary"
            size="lg"
        />
    </div>
    
    <div>
        <!-- Form content for current step -->
    </div>
    
    <div class="flex justify-between">
        <x-button 
            variant="outline" 
            :disabled="$currentStep === 1"
            @click="$currentStep--"
        >
            Previous
        </x-button>
        
        <x-button 
            color="primary"
            @click="$currentStep++"
        >
            {{ $currentStep === $totalSteps ? 'Finish' : 'Next' }}
        </x-button>
    </div>
</div>
```

## Livewire Integration

```blade
<div>
    <x-button wire:click="startProcess" color="primary">
        Start Process
    </x-button>
    
    @if($processing)
    <div class="mt-4">
        <x-progress 
            :value="$progress" 
            label="Processing..."
            :show-value="true"
            color="primary"
            variant="animated"
        />
    </div>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class ProgressDemo extends Component
{
    public $processing = false;
    public $progress = 0;
    
    public function startProcess()
    {
        $this->processing = true;
        $this->progress = 0;
        
        // Simulate progress
        for ($i = 0; $i <= 100; $i += 10) {
            $this->progress = $i;
            $this->dispatch('progress-updated', progress: $i);
            usleep(500000); // 0.5 second delay
        }
        
        $this->processing = false;
    }
    
    public function render()
    {
        return view('livewire.progress-demo');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    progress: 0,
    interval: null,
    start() {
        this.progress = 0;
        this.interval = setInterval(() => {
            this.progress += 10;
            if (this.progress >= 100) {
                clearInterval(this.interval);
            }
        }, 500);
    }
}">
    <x-button @click="start()" color="primary">
        Start Progress
    </x-button>
    
    <div class="mt-4">
        <x-progress 
            x-bind:value="progress" 
            label="Progress"
            :show-value="true"
            color="primary"
        />
    </div>
</div>
```

## Accessibility

The Progress component:
- Uses semantic `role="progressbar"` for screen readers
- Includes `aria-valuenow`, `aria-valuemin`, `aria-valuemax` attributes
- Supports `aria-label` for custom labels
- Provides visual feedback with smooth transitions
- Supports indeterminate state for unknown progress
- Maintains proper color contrast ratios
- Works with keyboard navigation

