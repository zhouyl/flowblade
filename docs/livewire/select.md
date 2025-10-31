# Livewire Select Component

The Livewire Select component provides an enhanced select dropdown with search, multi-select, and dynamic option loading capabilities.

## Features

- **Search functionality**: Filter options by typing
- **Multi-select**: Select multiple options
- **Dynamic options**: Load options from the server
- **Real-time binding**: Automatically sync selected value with server
- **Validation**: Server-side validation support
- **Customizable**: Highly customizable appearance and behavior

## Basic Usage

```blade
<livewire:select 
    wire:model="selectedValue" 
    :options="$options" 
/>
```

## Properties

### Data Properties

- `value` (mixed): Selected value(s)
- `options` (array): Available options
- `multiple` (boolean): Allow multiple selections (default: false)
- `searchable` (boolean): Enable search functionality (default: false)
- `disabled` (boolean): Disable the select (default: false)
- `required` (boolean): Mark as required (default: false)
- `invalid` (boolean): Show validation error state (default: false)

### Display Properties

- `label` (string|null): Label text
- `placeholder` (string|null): Placeholder text (default: 'Choose an option')
- `size` (string): Size - 'sm', 'md', 'lg' (default: 'md')
- `variant` (string): Variant - 'default', 'underline' (default: 'default')
- `helperText` (string|null): Helper text below the select
- `errorText` (string|null): Error message text

### State Properties

- `isOpen` (boolean): Whether dropdown is open
- `search` (string): Search query

## Methods

### Selection

```php
public function selectOption(mixed $optionValue): void
public function clearSelection(): void
```

Select an option or clear the current selection.

### Dropdown Control

```php
public function toggleDropdown(): void
public function openDropdown(): void
public function closeDropdown(): void
```

Control the dropdown visibility.

## Examples

### Basic Select

```blade
<livewire:select 
    wire:model="selectedValue" 
    :options="[
        ['value' => 1, 'label' => 'Option 1'],
        ['value' => 2, 'label' => 'Option 2'],
        ['value' => 3, 'label' => 'Option 3'],
    ]"
/>
```

### Searchable Select

```blade
<livewire:select 
    wire:model="selectedValue" 
    :options="$options"
    :searchable="true"
/>
```

### Multi-select

```blade
<livewire:select 
    wire:model="selectedValues" 
    :options="$options"
    :multiple="true"
/>
```

### With Label and Helper Text

```blade
<livewire:select 
    wire:model="selectedValue" 
    :options="$options"
    label="Choose an option"
    helperText="Select one option from the list"
/>
```

### With Validation

```blade
<livewire:select 
    wire:model="selectedValue" 
    :options="$options"
    :invalid="$errors->has('selectedValue')"
    :errorText="$errors->first('selectedValue')"
/>
```

### Dynamic Options

```php
// In your Livewire component
public function updatedCategory($value)
{
    $this->options = Category::find($value)
        ->products()
        ->get()
        ->map(fn($p) => ['value' => $p->id, 'label' => $p->name])
        ->toArray();
}
```

```blade
<livewire:select 
    wire:model="category" 
    :options="$categories"
/>

<livewire:select 
    wire:model="product" 
    :options="$options"
/>
```

### Complete Example

```blade
<div>
    <form wire:submit="save">
        <div class="mb-4">
            <livewire:select 
                wire:model="form.country" 
                :options="$countries"
                label="Country"
                :searchable="true"
                :required="true"
                :invalid="$errors->has('form.country')"
                :errorText="$errors->first('form.country')"
            />
        </div>

        <div class="mb-4">
            <livewire:select 
                wire:model="form.categories" 
                :options="$categories"
                label="Categories"
                :multiple="true"
                :searchable="true"
                :invalid="$errors->has('form.categories')"
                :errorText="$errors->first('form.categories')"
            />
        </div>

        <button type="submit">Save</button>
    </form>
</div>
```

## Styling

The select component uses Flowbite styling by default. You can customize the appearance using the `size` and `variant` properties:

```blade
<livewire:select 
    wire:model="selectedValue" 
    :options="$options"
    size="lg"
    variant="underline"
/>
```

## Events

The select component dispatches the following events:

- `option-selected`: Fired when an option is selected
- `selection-cleared`: Fired when selection is cleared
- `dropdown-opened`: Fired when dropdown opens
- `dropdown-closed`: Fired when dropdown closes

## Tips and Tricks

1. **Large option lists**: Use search functionality for better UX
2. **Dynamic options**: Load options based on other field values
3. **Grouped options**: Extend the component to support option groups
4. **Custom rendering**: Customize option rendering with slots
5. **Keyboard navigation**: Use arrow keys to navigate options

## Performance

For optimal performance with large option lists:

1. Use search functionality to filter options
2. Load options on demand (lazy loading)
3. Cache frequently accessed options
4. Use pagination for very large lists
5. Debounce search input to reduce server requests

## Troubleshooting

### Options not displaying

Ensure options are in the correct format: `['value' => ..., 'label' => ...]`

### Search not working

Check that `searchable` is set to `true` and that the search query is being updated.

### Multi-select not working

Ensure `multiple` is set to `true` and that `wire:model` is bound to an array property.

### Dropdown not closing

Check that `closeDropdown()` is being called after selection.

