# Livewire Table Component

The Livewire Table component provides a powerful data table with server-side sorting, filtering, pagination, and row selection capabilities.

## Features

- **Server-side sorting**: Sort data on the server for large datasets
- **Filtering**: Filter data based on search queries
- **Pagination**: Display data in pages with configurable page size
- **Row selection**: Select individual or multiple rows
- **Responsive**: Automatically adapts to different screen sizes
- **Customizable**: Highly customizable appearance and behavior

## Basic Usage

```blade
<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users" 
/>
```

## Properties

### Data Properties

- `columns` (array): Column names to display
- `rows` (array): Table data rows
- `size` (string): Table size - 'xs', 'sm', 'md', 'lg', 'xl' (default: 'md')
- `variant` (string): Visual variant - 'simple', 'striped', 'bordered' (default: 'simple')
- `hover` (boolean): Enable row hover effect (default: false)
- `selectable` (boolean): Enable row selection (default: false)

### State Properties

- `sortBy` (string|null): Current sort column
- `sortDirection` (string): Sort direction - 'asc' or 'desc' (default: 'asc')
- `currentPage` (int): Current page number (default: 1)
- `perPage` (int): Items per page (default: 10)
- `search` (string): Search query
- `selectedRows` (array): Selected row IDs

## Methods

### Sorting

```php
public function sortBy(string $column): void
```

Sort by a column. Clicking the same column toggles between ascending and descending.

### Pagination

```php
public function goToPage(int $page): void
```

Navigate to a specific page.

### Row Selection

```php
public function toggleRow(mixed $rowId): void
public function selectAll(): void
public function deselectAll(): void
```

Toggle individual row selection or select/deselect all rows.

## Examples

### Basic Table

```blade
<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users" 
/>
```

### With Sorting

```blade
<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users"
    wire:click="sortBy('name')"
/>
```

### With Pagination

```blade
<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users"
    :perPage="20"
/>
```

### With Row Selection

```blade
<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users"
    :selectable="true"
/>

@if(count($selectedRows) > 0)
    <button wire:click="deleteSelected">Delete Selected</button>
@endif
```

### With Search

```blade
<x-input 
    wire:model.live="search" 
    placeholder="Search users..."
/>

<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users"
/>
```

### Complete Example

```blade
<div>
    <div class="mb-4 flex gap-2">
        <x-input 
            wire:model.live.debounce.500ms="search" 
            placeholder="Search..."
            class="flex-1"
        />
        <x-select 
            wire:model="perPage"
            :options="[
                ['value' => 10, 'label' => '10 per page'],
                ['value' => 20, 'label' => '20 per page'],
                ['value' => 50, 'label' => '50 per page'],
            ]"
        />
    </div>

    <livewire:table 
        :columns="['id', 'name', 'email', 'created_at']" 
        :rows="$users"
        :selectable="true"
        :hover="true"
        variant="striped"
    />

    <div class="mt-4 flex justify-between">
        <button 
            wire:click="goToPage({{ $currentPage - 1 }})"
            :disabled="$currentPage === 1"
        >
            Previous
        </button>
        
        <span>Page {{ $currentPage }} of {{ $totalPages }}</span>
        
        <button 
            wire:click="goToPage({{ $currentPage + 1 }})"
            :disabled="$currentPage === $totalPages"
        >
            Next
        </button>
    </div>
</div>
```

## Styling

The table component uses Flowbite styling by default. You can customize the appearance using the `size`, `variant`, and `hover` properties:

```blade
<livewire:table 
    :columns="['id', 'name', 'email']" 
    :rows="$users"
    size="lg"
    variant="bordered"
    :hover="true"
/>
```

## Events

The table component dispatches the following events:

- `sort-changed`: Fired when sorting changes
- `page-changed`: Fired when page changes
- `search-changed`: Fired when search query changes
- `selection-changed`: Fired when row selection changes

## Tips and Tricks

1. **Large datasets**: Use pagination to handle large datasets efficiently
2. **Real-time search**: Use `wire:model.live.debounce` for search inputs
3. **Bulk operations**: Use row selection for bulk delete/update operations
4. **Custom columns**: Extend the component to add custom column rendering
5. **Export data**: Add export functionality to download table data

## Performance

For optimal performance with large datasets:

1. Use pagination to limit the number of rows displayed
2. Use server-side filtering to reduce data transfer
3. Use debouncing for search inputs to reduce server requests
4. Cache frequently accessed data
5. Use database indexes on sortable columns

## Troubleshooting

### Table not updating after sort

Ensure the `sortBy` method is being called and that the component is properly re-rendering.

### Pagination not working

Check that `perPage` is set correctly and that the total number of rows is greater than `perPage`.

### Row selection not working

Ensure that `selectable` is set to `true` and that rows have unique IDs.

