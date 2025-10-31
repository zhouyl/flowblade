# Flowblade Livewire Components

Flowblade provides a collection of Livewire components that extend the base Blade components with server-side interactivity. These components are designed to work seamlessly with Laravel Livewire and provide real-time data binding, validation, and state management.

## Overview

Livewire components in Flowblade are built on top of the base Blade components and add server-side functionality for:

- **Real-time data binding**: Automatically sync data between client and server
- **Server-side validation**: Validate data on the server before submission
- **Dynamic updates**: Update component state based on server logic
- **Complex interactions**: Handle complex user interactions with ease
- **Event handling**: Dispatch and listen to events for component communication

## Installation

Livewire components are automatically registered when Livewire is installed in your Laravel project. If Livewire is not installed, you can install it using:

```bash
composer require livewire/livewire
```

## Available Components

### Phase 1: High Priority Components

These components provide the most value and are recommended for most applications:

1. **[Table](./table.md)** - Data table with sorting, filtering, pagination, and row selection
2. **[Select](./select.md)** - Enhanced select with search, multi-select, and dynamic options
3. **[Datepicker](./datepicker.md)** - Date picker with validation and formatting
4. **[TagsInput](./tags-input.md)** - Dynamic tag input with validation
5. **[SearchInput](./search-input.md)** - Real-time search input with debouncing

### Phase 2: Medium Priority Components (Coming Soon)

- Form - Form submission and validation
- Field - Field-level validation and error handling
- Fieldset - Group validation
- Checkbox - Bulk operations, conditional visibility
- Radio - Conditional form sections
- Input - Real-time validation, dependent fields
- Textarea - Real-time validation, character counting
- NativeSelect - Dynamic option loading

### Phase 3: Low Priority Components (Coming Soon)

- Modal - Show/hide with form submission
- Drawer - Show/hide with navigation
- Accordion - Expand/collapse with state management
- Collapsible - Expand/collapse with state management
- Tabs - Tab switching with state management
- Menu - Menu toggle with state management
- Popover - Show/hide with state management
- Tooltip - Show/hide with state management

## Basic Usage

### Using Livewire Components in Blade

```blade
<livewire:table :columns="['id', 'name', 'email']" :rows="$users" />
```

### With Wire Directives

```blade
<livewire:select wire:model="selectedValue" :options="$options" />
```

### With Events

```blade
<livewire:search-input 
    wire:model.live.debounce.500ms="search"
    @result-selected="handleResult"
/>
```

## Component Features

### Real-time Data Binding

All Livewire components support `wire:model` for real-time data binding:

```blade
<livewire:tags-input wire:model="tags" />
```

### Event Handling

Components dispatch events that you can listen to:

```blade
<livewire:search-input @result-selected="handleResult" />
```

### Validation

Components support server-side validation:

```php
public function rules()
{
    return [
        'selectedValue' => 'required|in:' . implode(',', array_keys($this->options)),
    ];
}
```

### Computed Properties

Components use Livewire's computed properties for efficient data management:

```php
#[Computed]
public function filteredOptions(): array
{
    // Filter logic here
}
```

## Best Practices

1. **Use debouncing for search inputs**: Reduce server load with `wire:model.live.debounce`
2. **Validate on the server**: Always validate user input on the server side
3. **Handle errors gracefully**: Display validation errors to users
4. **Optimize queries**: Use pagination and filtering to reduce data transfer
5. **Cache results**: Cache frequently accessed data to improve performance

## Performance Considerations

- **Pagination**: Use pagination for large datasets to reduce memory usage
- **Filtering**: Filter data on the server to reduce data transfer
- **Debouncing**: Use debouncing for search inputs to reduce server requests
- **Caching**: Cache computed properties to improve performance
- **Lazy loading**: Load data on demand to improve initial page load time

## Troubleshooting

### Component not rendering

Ensure Livewire is properly installed and configured in your Laravel project.

### Data not updating

Check that `wire:model` is properly configured and that the component property is public.

### Validation errors not showing

Ensure you have validation rules defined in your Livewire component and that error messages are displayed in your view.

## Examples

See individual component documentation for detailed examples:

- [Table Examples](./table.md#examples)
- [Select Examples](./select.md#examples)
- [Datepicker Examples](./datepicker.md#examples)
- [TagsInput Examples](./tags-input.md#examples)
- [SearchInput Examples](./search-input.md#examples)

## Contributing

To contribute new Livewire components or improvements, please follow the existing patterns and include comprehensive documentation.

## License

Flowblade is open-source software licensed under the MIT license.

