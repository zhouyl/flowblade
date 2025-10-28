# TagsInput

Tags input component for adding and removing tags with keyboard support.

## Requirements

This component requires **Alpine.js** to be installed in your project.

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Basic Usage

```blade
<x-tags-input name="tags" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `tags` | `array` | `[]` | Initial tags array |
| `name` | `string` | `'tags'` | Form input name |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `placeholder` | `string` | `'Add a tag...'` | Input placeholder text |
| `maxTags` | `int` | `null` | Maximum number of tags allowed |
| `allowDuplicates` | `bool` | `false` | Whether to allow duplicate tags |
| `disabled` | `bool` | `false` | Whether the input is disabled |
| `readonly` | `bool` | `false` | Whether the input is readonly |
| `separator` | `string` | `null` | Character to split input into tags (e.g., ',') |

## With Initial Tags

```blade
<x-tags-input 
    name="tags" 
    :tags="['Laravel', 'PHP', 'Tailwind']" 
/>
```

## Sizes

```blade
<x-tags-input name="tags" size="xs" />
<x-tags-input name="tags" size="sm" />
<x-tags-input name="tags" size="md" />
<x-tags-input name="tags" size="lg" />
```

## Colors

```blade
<x-tags-input name="tags" color="primary" />
<x-tags-input name="tags" color="secondary" />
<x-tags-input name="tags" color="success" />
<x-tags-input name="tags" color="warning" />
<x-tags-input name="tags" color="danger" />
<x-tags-input name="tags" color="info" />
<x-tags-input name="tags" color="gray" />
```

## With Separator

Auto-split tags when typing a separator character:

```blade
<x-tags-input 
    name="tags" 
    separator="," 
    placeholder="Type tags separated by comma..."
/>
```

## Max Tags

Limit the maximum number of tags:

```blade
<x-tags-input 
    name="tags" 
    :max-tags="5"
>
    Maximum 5 tags allowed
</x-tags-input>
```

## Allow Duplicates

```blade
<x-tags-input 
    name="tags" 
    :allow-duplicates="true"
/>
```

## Disabled State

```blade
<x-tags-input 
    name="tags" 
    :tags="['Laravel', 'PHP']"
    :disabled="true"
/>
```

## Readonly State

```blade
<x-tags-input 
    name="tags" 
    :tags="['Laravel', 'PHP']"
    :readonly="true"
/>
```

## Keyboard Shortcuts

- **Enter**: Add current input as a tag
- **Backspace**: Remove last tag when input is empty
- **Separator key** (if configured): Auto-split and add tags

## Common Patterns

### Blog Post Tags

```blade
<form method="POST" action="/posts">
    @csrf
    
    <x-field label="Title" required>
        <x-input name="title" />
    </x-field>
    
    <x-field label="Tags" help-text="Press Enter to add a tag">
        <x-tags-input 
            name="tags"
            :tags="old('tags', $post->tags ?? [])"
            color="primary"
        />
    </x-field>
    
    <x-field label="Content" required>
        <x-textarea name="content" rows="10" />
    </x-field>
    
    <x-button type="submit" color="primary">
        Publish Post
    </x-button>
</form>
```

### Product Categories

```blade
<x-field label="Product Categories">
    <x-tags-input 
        name="categories"
        :tags="$product->categories"
        color="success"
        :max-tags="10"
        placeholder="Add category..."
    />
</x-field>
```

### Email Recipients

```blade
<x-field label="To" required>
    <x-tags-input 
        name="recipients"
        separator=","
        placeholder="Enter email addresses separated by comma..."
        color="info"
    />
</x-field>
```

### Skills Input

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Your Skills</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-field 
            label="Add your skills" 
            help-text="Press Enter after each skill"
        >
            <x-tags-input 
                name="skills"
                :tags="$user->skills"
                color="primary"
                placeholder="e.g., Laravel, Vue.js, Docker..."
            />
        </x-field>
    </x-card-body>
</x-card>
```

### Search Filters

```blade
<form method="GET" action="/search">
    <x-field label="Search Keywords">
        <x-tags-input 
            name="keywords"
            :tags="request('keywords', [])"
            separator=" "
            placeholder="Add keywords..."
            color="secondary"
        />
    </x-field>
    
    <x-button type="submit" color="primary">
        Search
    </x-button>
</form>
```

### Project Tags with Limit

```blade
<x-field label="Project Tags">
    <x-tags-input 
        name="project_tags"
        :tags="$project->tags"
        :max-tags="5"
        color="warning"
    >
        <div class="flex items-center justify-between">
            <span>Maximum 5 tags</span>
            <span x-text="tags.length + ' / 5'"></span>
        </div>
    </x-tags-input>
</x-field>
```

### Hashtags Input

```blade
<x-field label="Hashtags">
    <x-tags-input 
        name="hashtags"
        :tags="$post->hashtags"
        color="info"
        placeholder="Add hashtags..."
    >
        Hashtags help people discover your content
    </x-tags-input>
</x-field>
```

### Interests Selection

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Your Interests</x-heading>
        <x-text size="sm" color="gray">
            Tell us what you're interested in
        </x-text>
    </x-card-header>
    
    <x-card-body>
        <x-tags-input 
            name="interests"
            :tags="$user->interests"
            color="purple"
            :max-tags="10"
            placeholder="Add an interest..."
        />
        
        <div class="mt-4">
            <x-text size="sm" weight="medium" class="mb-2">
                Suggested interests:
            </x-text>
            <div class="flex flex-wrap gap-2">
                @foreach(['Technology', 'Design', 'Business', 'Marketing', 'Science'] as $suggestion)
                <x-button 
                    size="sm" 
                    variant="outline"
                    @click="if (!tags.includes('{{ $suggestion }}')) { tags.push('{{ $suggestion }}'); updateHiddenInput(); }"
                >
                    + {{ $suggestion }}
                </x-button>
                @endforeach
            </div>
        </div>
    </x-card-body>
</x-card>
```

### File Tags

```blade
<x-field label="File Tags">
    <x-tags-input 
        name="file_tags"
        :tags="$file->tags"
        color="gray"
        separator=","
        placeholder="Add tags to organize your files..."
    />
</x-field>
```

### Contact Groups

```blade
<form method="POST" action="/contacts/{{ $contact->id }}/groups">
    @csrf
    
    <x-field label="Add to Groups">
        <x-tags-input 
            name="groups"
            :tags="$contact->groups"
            color="success"
            placeholder="Type group name..."
        />
    </x-field>
    
    <x-button type="submit" color="primary">
        Update Groups
    </x-button>
</form>
```

### Recipe Ingredients

```blade
<x-field label="Ingredients">
    <x-tags-input 
        name="ingredients"
        :tags="$recipe->ingredients"
        color="warning"
        separator=","
        placeholder="Add ingredients separated by comma..."
    />
</x-field>
```

### Task Labels

```blade
<x-field label="Labels">
    <x-tags-input 
        name="labels"
        :tags="$task->labels"
        color="danger"
        :max-tags="8"
        placeholder="Add label..."
    >
        <div class="flex items-center gap-2">
            <span>Quick add:</span>
            @foreach(['urgent', 'bug', 'feature'] as $label)
            <button 
                type="button"
                class="text-xs text-blue-600 hover:underline"
                @click="if (!tags.includes('{{ $label }}')) { tags.push('{{ $label }}'); updateHiddenInput(); }"
            >
                {{ $label }}
            </button>
            @endforeach
        </div>
    </x-tags-input>
</x-field>
```

## Livewire Integration

```blade
<div>
    <x-field label="Tags">
        <x-tags-input 
            name="tags"
            :tags="$tags"
            wire:model="tags"
        />
    </x-field>
    
    @if(count($tags) > 0)
    <x-text size="sm" color="gray" class="mt-2">
        {{ count($tags) }} tag(s) added
    </x-text>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class TagsForm extends Component
{
    public $tags = [];
    
    public function updatedTags($value)
    {
        // Tags are stored as JSON string, decode it
        $this->tags = json_decode($value, true) ?? [];
    }
    
    public function save()
    {
        $this->validate([
            'tags' => 'required|array|min:1',
        ]);
        
        // Save tags
        auth()->user()->update([
            'tags' => $this->tags,
        ]);
        
        session()->flash('message', 'Tags saved successfully!');
    }
    
    public function render()
    {
        return view('livewire.tags-form');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ tags: ['Laravel', 'PHP'] }">
    <x-tags-input 
        name="tags"
        x-bind:tags="tags"
    />
    
    <div class="mt-4">
        <x-text size="sm" weight="medium">Current tags:</x-text>
        <template x-for="tag in tags" :key="tag">
            <x-badge x-text="tag" class="mr-2"></x-badge>
        </template>
    </div>
</div>
```

## Form Submission

The component stores tags as a JSON string in a hidden input. To process it in your controller:

```php
// Controller
public function store(Request $request)
{
    $tags = json_decode($request->input('tags'), true) ?? [];
    
    $request->validate([
        'tags' => 'required|array|min:1',
    ]);
    
    $post = Post::create([
        'title' => $request->input('title'),
        'tags' => $tags,
    ]);
    
    return redirect()->route('posts.show', $post);
}
```

## Accessibility

The TagsInput component:
- Uses semantic HTML structure
- Provides keyboard navigation (Enter, Backspace)
- Includes focus indicators
- Supports screen readers with proper ARIA labels
- Maintains proper color contrast ratios
- Works with form submissions
- Provides visual feedback on tag addition/removal
- Supports disabled and readonly states
- Auto-splits tags with configurable separator
- Prevents duplicate tags (configurable)
- Limits maximum tags (configurable)

