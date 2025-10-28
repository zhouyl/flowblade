# ProgressCircle

Circular progress component for displaying progress in a circular format.

## Basic Usage

```blade
<x-progress-circle :value="75" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `int\|float` | `0` | Current progress value (0-100) |
| `max` | `int\|float` | `100` | Maximum value |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `thickness` | `int` | `4` | Stroke thickness (1-10) |
| `showValue` | `bool` | `false` | Whether to show the percentage value |
| `label` | `string` | `null` | Custom label text |
| `indeterminate` | `bool` | `false` | Whether the progress is indeterminate |

## Sizes

```blade
<x-progress-circle :value="75" size="xs" />
<x-progress-circle :value="75" size="sm" />
<x-progress-circle :value="75" size="md" />
<x-progress-circle :value="75" size="lg" />
<x-progress-circle :value="75" size="xl" />
```

## Colors

```blade
<x-progress-circle :value="75" color="primary" />
<x-progress-circle :value="75" color="secondary" />
<x-progress-circle :value="75" color="success" />
<x-progress-circle :value="75" color="warning" />
<x-progress-circle :value="75" color="danger" />
<x-progress-circle :value="75" color="info" />
<x-progress-circle :value="75" color="gray" />
```

## With Value Display

```blade
<x-progress-circle :value="85" :show-value="true" />
```

## With Label

```blade
<x-progress-circle :value="60" label="Upload Progress" />
```

## With Value and Label

```blade
<x-progress-circle :value="90" :show-value="true" label="Completion" />
```

## Custom Thickness

```blade
<x-progress-circle :value="75" :thickness="2" />
<x-progress-circle :value="75" :thickness="6" />
<x-progress-circle :value="75" :thickness="8" />
```

## Indeterminate Progress

```blade
<x-progress-circle :indeterminate="true" label="Loading..." />
```

## Different Progress Levels

```blade
<div class="flex items-center gap-6">
    <x-progress-circle :value="25" color="danger" :show-value="true" label="Low" />
    <x-progress-circle :value="50" color="warning" :show-value="true" label="Medium" />
    <x-progress-circle :value="75" color="info" :show-value="true" label="High" />
    <x-progress-circle :value="100" color="success" :show-value="true" label="Complete" />
</div>
```

## Common Patterns

### Dashboard Stats

```blade
<x-card>
    <x-card-body>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <x-progress-circle 
                    :value="$salesProgress" 
                    color="primary" 
                    :show-value="true"
                    size="lg"
                />
                <x-text class="mt-3" weight="medium">Sales Target</x-text>
                <x-text size="sm" color="gray">${{ number_format($currentSales) }} / ${{ number_format($targetSales) }}</x-text>
            </div>
            
            <div class="flex flex-col items-center">
                <x-progress-circle 
                    :value="$projectProgress" 
                    color="success" 
                    :show-value="true"
                    size="lg"
                />
                <x-text class="mt-3" weight="medium">Project Completion</x-text>
                <x-text size="sm" color="gray">{{ $completedTasks }} / {{ $totalTasks }} tasks</x-text>
            </div>
            
            <div class="flex flex-col items-center">
                <x-progress-circle 
                    :value="$storageUsage" 
                    color="warning" 
                    :show-value="true"
                    size="lg"
                />
                <x-text class="mt-3" weight="medium">Storage Used</x-text>
                <x-text size="sm" color="gray">{{ $usedGB }} GB / {{ $totalGB }} GB</x-text>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Skill Levels

```blade
<div class="space-y-6">
    <x-heading size="lg">Skills</x-heading>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="flex flex-col items-center">
            <x-progress-circle :value="90" color="primary" :show-value="true" />
            <x-text class="mt-2" weight="medium">PHP</x-text>
        </div>
        
        <div class="flex flex-col items-center">
            <x-progress-circle :value="85" color="success" :show-value="true" />
            <x-text class="mt-2" weight="medium">Laravel</x-text>
        </div>
        
        <div class="flex flex-col items-center">
            <x-progress-circle :value="75" color="info" :show-value="true" />
            <x-text class="mt-2" weight="medium">JavaScript</x-text>
        </div>
        
        <div class="flex flex-col items-center">
            <x-progress-circle :value="70" color="warning" :show-value="true" />
            <x-text class="mt-2" weight="medium">Vue.js</x-text>
        </div>
    </div>
</div>
```

### File Upload Progress

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center gap-4">
            <x-progress-circle 
                :value="$uploadProgress" 
                color="primary" 
                :show-value="true"
                size="lg"
            />
            
            <div class="flex-1">
                <x-text weight="medium">Uploading document.pdf</x-text>
                <x-text size="sm" color="gray">{{ number_format($uploadedMB, 1) }} MB / {{ number_format($totalMB, 1) }} MB</x-text>
                
                @if($uploadProgress < 100)
                <x-text size="sm" color="gray" class="mt-1">
                    Estimated time remaining: {{ $estimatedTime }}
                </x-text>
                @else
                <x-text size="sm" color="success" class="mt-1">
                    Upload complete!
                </x-text>
                @endif
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Goal Tracking

```blade
<div class="space-y-6">
    <x-heading size="lg">Monthly Goals</x-heading>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <x-card>
            <x-card-body>
                <div class="flex items-center gap-4">
                    <x-progress-circle 
                        :value="($currentSteps / $goalSteps) * 100" 
                        color="success" 
                        :show-value="true"
                        size="xl"
                    />
                    
                    <div>
                        <x-heading size="md">Daily Steps</x-heading>
                        <x-text size="lg" weight="bold">{{ number_format($currentSteps) }}</x-text>
                        <x-text size="sm" color="gray">Goal: {{ number_format($goalSteps) }}</x-text>
                    </div>
                </div>
            </x-card-body>
        </x-card>
        
        <x-card>
            <x-card-body>
                <div class="flex items-center gap-4">
                    <x-progress-circle 
                        :value="($currentCalories / $goalCalories) * 100" 
                        color="danger" 
                        :show-value="true"
                        size="xl"
                    />
                    
                    <div>
                        <x-heading size="md">Calories Burned</x-heading>
                        <x-text size="lg" weight="bold">{{ number_format($currentCalories) }}</x-text>
                        <x-text size="sm" color="gray">Goal: {{ number_format($goalCalories) }}</x-text>
                    </div>
                </div>
            </x-card-body>
        </x-card>
    </div>
</div>
```

### Quiz Score

```blade
<x-card>
    <x-card-body class="text-center">
        <x-heading size="lg" class="mb-6">Quiz Results</x-heading>
        
        <x-progress-circle 
            :value="$score" 
            :color="$score >= 80 ? 'success' : ($score >= 60 ? 'warning' : 'danger')"
            :show-value="true"
            size="xl"
            :thickness="6"
        />
        
        <x-text class="mt-4" size="lg" weight="medium">
            You scored {{ $score }}%
        </x-text>
        
        <x-text color="gray" class="mt-2">
            {{ $correctAnswers }} out of {{ $totalQuestions }} correct
        </x-text>
        
        @if($score >= 80)
        <x-alert status="success" class="mt-6">
            Excellent work! You passed with flying colors.
        </x-alert>
        @elseif($score >= 60)
        <x-alert status="warning" class="mt-6">
            Good job! You passed, but there's room for improvement.
        </x-alert>
        @else
        <x-alert status="danger" class="mt-6">
            You didn't pass this time. Please review the material and try again.
        </x-alert>
        @endif
    </x-card-body>
</x-card>
```

### Loading State

```blade
<div class="flex flex-col items-center justify-center py-12">
    <x-progress-circle 
        :indeterminate="true" 
        color="primary"
        size="xl"
    />
    <x-text class="mt-4" weight="medium">Loading your data...</x-text>
    <x-text size="sm" color="gray" class="mt-1">This may take a few moments</x-text>
</div>
```

### Profile Completion

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center gap-4">
            <x-progress-circle 
                :value="$profileCompletion" 
                :color="$profileCompletion < 50 ? 'danger' : ($profileCompletion < 80 ? 'warning' : 'success')"
                :show-value="true"
                size="xl"
            />
            
            <div class="flex-1">
                <x-heading size="md">Profile Completion</x-heading>
                <x-text color="gray" class="mt-1">
                    Complete your profile to unlock all features
                </x-text>
                
                <div class="mt-3 space-y-1">
                    @if(!$user->avatar)
                    <x-text size="sm" color="gray">• Add profile picture</x-text>
                    @endif
                    @if(!$user->bio)
                    <x-text size="sm" color="gray">• Write a bio</x-text>
                    @endif
                    @if(!$user->phone)
                    <x-text size="sm" color="gray">• Add phone number</x-text>
                    @endif
                </div>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Timer Countdown

```blade
<div 
    x-data="{ 
        timeLeft: 60,
        totalTime: 60,
        interval: null,
        start() {
            this.interval = setInterval(() => {
                this.timeLeft--;
                if (this.timeLeft <= 0) {
                    clearInterval(this.interval);
                }
            }, 1000);
        }
    }"
    x-init="start()"
>
    <div class="flex flex-col items-center">
        <x-progress-circle 
            x-bind:value="(timeLeft / totalTime) * 100" 
            color="primary"
            size="xl"
            :thickness="6"
        >
            <template x-if="timeLeft > 0">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-2xl font-bold text-blue-600" x-text="timeLeft + 's'"></span>
                </div>
            </template>
        </x-progress-circle>
        
        <x-text class="mt-4" weight="medium">Time Remaining</x-text>
    </div>
</div>
```

## Livewire Integration

```blade
<div>
    <x-button wire:click="startTask" color="primary">
        Start Task
    </x-button>
    
    @if($processing)
    <div class="mt-6 flex justify-center">
        <x-progress-circle 
            :value="$progress" 
            :show-value="true"
            label="Processing..."
            color="primary"
            size="xl"
        />
    </div>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class TaskProgress extends Component
{
    public $processing = false;
    public $progress = 0;
    
    public function startTask()
    {
        $this->processing = true;
        $this->progress = 0;
        
        // Simulate progress
        for ($i = 0; $i <= 100; $i += 10) {
            $this->progress = $i;
            usleep(500000); // 0.5 second delay
        }
        
        $this->processing = false;
    }
    
    public function render()
    {
        return view('livewire.task-progress');
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
            this.progress += 5;
            if (this.progress >= 100) {
                clearInterval(this.interval);
            }
        }, 200);
    }
}">
    <x-button @click="start()" color="primary">
        Start Progress
    </x-button>
    
    <div class="mt-6 flex justify-center">
        <x-progress-circle 
            x-bind:value="progress" 
            :show-value="true"
            label="Progress"
            color="primary"
            size="xl"
        />
    </div>
</div>
```

## Accessibility

The ProgressCircle component:
- Uses semantic `role="progressbar"` for screen readers
- Includes `aria-valuenow`, `aria-valuemin`, `aria-valuemax` attributes
- Supports `aria-label` for custom labels
- Provides visual feedback with smooth transitions
- Supports indeterminate state for unknown progress
- Uses SVG for scalable and crisp rendering
- Maintains proper color contrast ratios
- Works with keyboard navigation

