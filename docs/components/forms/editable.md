# Editable

Editable text component for inline editing. Perfect for inline content editing, profile fields, and quick edits.

## Basic Usage

```blade
<x-editable value="Click to edit me" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | `null` | Default value |
| `placeholder` | `string` | `'Click to edit'` | Placeholder text |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `selectAllOnFocus` | `boolean` | `true` | Select all text on focus |
| `submitOnBlur` | `boolean` | `true` | Submit on blur |
| `submitOnEnter` | `boolean` | `true` | Submit on Enter key |
| `cancelOnEscape` | `boolean` | `true` | Cancel on Escape key |

## Events

| Event | Payload | Description |
|-------|---------|-------------|
| `editable-submit` | `{ value }` | Fired when value is submitted |
| `editable-cancel` | - | Fired when editing is cancelled |

## Sizes

```blade
<x-editable size="xs" value="Extra small" />
<x-editable size="sm" value="Small" />
<x-editable size="md" value="Medium" />
<x-editable size="lg" value="Large" />
<x-editable size="xl" value="Extra large" />
```

## With Placeholder

```blade
<x-editable placeholder="Enter your name" />
```

## Disabled State

```blade
<x-editable value="Cannot edit this" disabled />
```

## Custom Behavior

```blade
<!-- Don't submit on blur -->
<x-editable 
    value="Press Enter to save"
    :submit-on-blur="false"
/>

<!-- Don't select all on focus -->
<x-editable 
    value="Cursor at end"
    :select-all-on-focus="false"
/>
```

## Common Patterns

### Editable Title

```blade
<h1>
    <x-editable 
        value="Page Title"
        size="xl"
        @editable-submit="$wire.updateTitle($event.detail.value)"
    />
</h1>
```

### Editable Description

```blade
<p>
    <x-editable 
        value="Click to edit description"
        placeholder="Add a description"
        @editable-submit="$wire.updateDescription($event.detail.value)"
    />
</p>
```

### Editable List Items

```blade
<ul class="space-y-2">
    <li>
        <x-editable 
            value="Task 1"
            @editable-submit="$wire.updateTask(1, $event.detail.value)"
        />
    </li>
    <li>
        <x-editable 
            value="Task 2"
            @editable-submit="$wire.updateTask(2, $event.detail.value)"
        />
    </li>
    <li>
        <x-editable 
            value="Task 3"
            @editable-submit="$wire.updateTask(3, $event.detail.value)"
        />
    </li>
</ul>
```

### Editable Table Cells

```blade
<table class="w-full">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <x-editable value="John Doe" />
            </td>
            <td>
                <x-editable value="john@example.com" />
            </td>
            <td>
                <x-editable value="Admin" />
            </td>
        </tr>
    </tbody>
</table>
```

### Editable Card

```blade
<div class="border rounded-lg p-4">
    <h3 class="font-semibold mb-2">
        <x-editable 
            value="Card Title"
            size="lg"
        />
    </h3>
    <p class="text-gray-600">
        <x-editable 
            value="Card description goes here"
            placeholder="Add description"
        />
    </p>
</div>
```

## Livewire Integration

```blade
<div>
    <x-editable 
        :value="$title"
        @editable-submit="$wire.updateTitle($event.detail.value)"
    />
    
    @if($errors->has('title'))
        <p class="text-sm text-red-600 mt-1">{{ $errors->first('title') }}</p>
    @endif
</div>
```

### Livewire Component Example

```php
class EditableDemo extends Component
{
    public $title = 'My Title';
    public $description = 'My Description';
    
    public function updateTitle($value)
    {
        $this->validate([
            'title' => 'required|min:3|max:100',
        ]);
        
        $this->title = $value;
        $this->dispatch('title-updated');
    }
    
    public function updateDescription($value)
    {
        $this->description = $value;
    }
}
```

```blade
<div>
    <h1>
        <x-editable 
            :value="$title"
            size="xl"
            @editable-submit="updateTitle($event.detail.value)"
        />
    </h1>
    
    <p>
        <x-editable 
            :value="$description"
            @editable-submit="updateDescription($event.detail.value)"
        />
    </p>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    items: ['Item 1', 'Item 2', 'Item 3'],
    updateItem(index, value) {
        this.items[index] = value;
    }
}">
    <ul class="space-y-2">
        <template x-for="(item, index) in items" :key="index">
            <li>
                <x-editable 
                    :value="item"
                    @editable-submit="updateItem(index, $event.detail.value)"
                />
            </li>
        </template>
    </ul>
</div>
```

### With Confirmation

```blade
<div x-data="{ 
    value: 'Original Value',
    async handleSubmit(newValue) {
        if (confirm('Save changes?')) {
            this.value = newValue;
            // Save to server
            await fetch('/api/update', {
                method: 'POST',
                body: JSON.stringify({ value: newValue })
            });
        }
    }
}">
    <x-editable 
        :value="value"
        @editable-submit="handleSubmit($event.detail.value)"
    />
</div>
```

### With Auto-save

```blade
<div x-data="{ 
    value: 'Auto-save enabled',
    async autoSave(newValue) {
        this.value = newValue;
        // Debounced save to server
        clearTimeout(this.saveTimeout);
        this.saveTimeout = setTimeout(async () => {
            await fetch('/api/save', {
                method: 'POST',
                body: JSON.stringify({ value: newValue })
            });
        }, 1000);
    }
}">
    <x-editable 
        :value="value"
        @editable-submit="autoSave($event.detail.value)"
    />
</div>
```

## Keyboard Shortcuts

- **Enter**: Submit changes (if `submitOnEnter` is true)
- **Escape**: Cancel editing (if `cancelOnEscape` is true)
- **Tab**: Submit and move to next field (if `submitOnBlur` is true)

## Accessibility

The Editable component:
- Supports keyboard navigation (Tab, Enter, Escape)
- Provides clear visual feedback for editable state
- Maintains focus management
- Supports required field validation
- Works with screen readers
- Announces editable state to screen readers
- Supports proper ARIA attributes for inline editing

