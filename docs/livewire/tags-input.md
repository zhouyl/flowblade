# Livewire TagsInput Component

The Livewire TagsInput component provides an interactive input for managing multiple tags with validation and customization options.

## Features

- **Dynamic tag management**: Add and remove tags easily
- **Validation**: Server-side validation for tags
- **Duplicate prevention**: Optionally prevent duplicate tags
- **Tag limits**: Set maximum number of tags allowed
- **Auto-split**: Automatically split input by separator character
- **Real-time binding**: Automatically sync tags with server
- **Keyboard shortcuts**: Use Enter to add, Backspace to remove

## Basic Usage

```blade
<livewire:tags-input wire:model="tags" />
```

## Properties

### Data Properties

- `tags` (array): Array of tags
- `input` (string): Current input value
- `name` (string): Form input name (default: 'tags')
- `maxTags` (int|null): Maximum number of tags (null for unlimited)
- `allowDuplicates` (boolean): Allow duplicate tags (default: false)
- `separator` (string|null): Character to auto-split input (e.g., ',', ';')

### Display Properties

- `size` (string): Input size - 'xs', 'sm', 'md', 'lg' (default: 'md')
- `color` (string): Tag color - 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray' (default: 'primary')
- `placeholder` (string): Placeholder text (default: 'Add a tag...')
- `disabled` (boolean): Disable input (default: false)
- `readonly` (boolean): Read-only input (default: false)

## Methods

### Tag Management

```php
public function addTag(): void
public function removeTag(int $index): void
public function clearTags(): void
```

Add, remove, or clear tags.

### Input Handling

```php
public function handleKeyDown(string $key): void
```

Handle keyboard input for adding/removing tags.

### Utilities

```php
public function getRemainingSlots(): ?int
public function isMaxTagsReached(): bool
```

Get remaining tag slots or check if max tags reached.

## Examples

### Basic TagsInput

```blade
<livewire:tags-input wire:model="tags" />
```

### With Max Tags

```blade
<livewire:tags-input 
    wire:model="tags"
    :maxTags="5"
/>
```

### With Auto-split

```blade
<livewire:tags-input 
    wire:model="tags"
    separator=","
/>
```

### With Color

```blade
<livewire:tags-input 
    wire:model="tags"
    color="success"
/>
```

### With Validation

```blade
<livewire:tags-input 
    wire:model="tags"
    :maxTags="10"
    :allowDuplicates="false"
/>

@if($errors->has('tags'))
    <span class="text-red-600">{{ $errors->first('tags') }}</span>
@endif
```

### Complete Example

```blade
<div>
    <form wire:submit="save">
        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">
                Skills (max 10)
            </label>
            
            <livewire:tags-input 
                wire:model="form.skills"
                placeholder="Add a skill and press Enter..."
                :maxTags="10"
                :allowDuplicates="false"
                color="primary"
            />

            @if($errors->has('form.skills'))
                <span class="text-red-600 text-sm">
                    {{ $errors->first('form.skills') }}
                </span>
            @endif

            @if($form['skills'])
                <div class="mt-2 text-sm text-gray-600">
                    {{ count($form['skills']) }} / 10 skills added
                </div>
            @endif
        </div>

        <button type="submit">Save</button>
    </form>
</div>
```

## Styling

The tags input component uses Flowbite styling by default. Tags are displayed as colored badges that can be removed by clicking the close button.

## Events

The tags input component dispatches the following events:

- `tags-updated`: Fired when tags are added or removed
- `search-cleared`: Fired when input is cleared

## Tips and Tricks

1. **Auto-split**: Use separator to allow pasting comma-separated values
2. **Validation**: Validate tags on the server side
3. **Suggestions**: Add autocomplete suggestions for common tags
4. **Keyboard shortcuts**: Use Enter to add, Backspace to remove
5. **Tag limits**: Set reasonable limits to prevent abuse

## Performance

For optimal performance:

1. Limit the maximum number of tags
2. Validate tags on the server side
3. Cache frequently used tags
4. Use debouncing for tag suggestions

## Troubleshooting

### Tags not adding

Ensure the input value is not empty and that max tags limit is not reached.

### Duplicates appearing

Check that `allowDuplicates` is set to `false`.

### Auto-split not working

Ensure the `separator` property is set to the correct character.

### Tags not updating

Check that `wire:model` is properly configured and that the component property is public.

## Keyboard Shortcuts

- **Enter**: Add current input as tag
- **Backspace** (empty input): Remove last tag
- **Separator character**: Auto-split input into tags (if separator is set)

