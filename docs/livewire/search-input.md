# Livewire SearchInput Component

The Livewire SearchInput component provides a real-time search input with debouncing, result filtering, and highlighting capabilities.

## Features

- **Real-time search**: Search as you type with server-side processing
- **Debouncing**: Reduce server load with configurable debouncing
- **Result filtering**: Filter and limit search results
- **Query highlighting**: Highlight search terms in results
- **Loading state**: Show loading indicator during search
- **Result selection**: Handle result selection with events
- **Keyboard navigation**: Navigate results with arrow keys

## Basic Usage

```blade
<livewire:search-input wire:model.live.debounce.500ms="search" />
```

## Properties

### Data Properties

- `query` (string): Search query
- `results` (array): Search results
- `isLoading` (boolean): Whether search is loading
- `minChars` (int): Minimum characters to trigger search (default: 1)
- `maxResults` (int): Maximum results to display (default: 10)

### Display Properties

- `size` (string): Input size - 'xs', 'sm', 'md', 'lg', 'xl' (default: 'md')
- `variant` (string): Variant - 'outline', 'filled', 'flushed' (default: 'outline')
- `placeholder` (string|null): Placeholder text
- `showClear` (boolean): Show clear button (default: true)
- `disabled` (boolean): Disable input (default: false)
- `required` (boolean): Mark as required (default: false)
- `invalid` (boolean): Show validation error state (default: false)
- `readonly` (boolean): Read-only input (default: false)

### State Properties

- `isOpen` (boolean): Whether results dropdown is open

## Methods

### Search Control

```php
public function updatedQuery(): void
public function setResults(array $results): void
public function clearSearch(): void
```

Update search query, set results, or clear search.

### Result Handling

```php
public function selectResult(mixed $result): void
public function highlightQuery(string $text): string
```

Select a result or highlight search terms in text.

### Dropdown Control

```php
public function openResults(): void
public function closeResults(): void
```

Control results dropdown visibility.

## Examples

### Basic Search

```blade
<livewire:search-input 
    wire:model.live.debounce.500ms="search"
    placeholder="Search..."
/>
```

### With Results Display

```blade
<livewire:search-input 
    wire:model.live.debounce.500ms="search"
    placeholder="Search users..."
/>

@if($search)
    <div class="mt-4">
        @forelse($results as $result)
            <div class="p-2 border-b">
                {{ $result['name'] }}
            </div>
        @empty
            <div class="p-2 text-gray-500">
                No results found
            </div>
        @endforelse
    </div>
@endif
```

### With Custom Size

```blade
<livewire:search-input 
    wire:model.live.debounce.500ms="search"
    size="lg"
    placeholder="Search products..."
/>
```

### With Result Selection

```blade
<livewire:search-input 
    wire:model.live.debounce.500ms="search"
    @result-selected="handleResultSelected"
    placeholder="Search..."
/>
```

### Complete Example

```blade
<div>
    <div class="mb-4">
        <livewire:search-input 
            wire:model.live.debounce.500ms="search"
            placeholder="Search users by name or email..."
            size="md"
        />
    </div>

    @if($search)
        <div class="bg-white rounded-lg shadow">
            @if($isLoading)
                <div class="p-4 text-center">
                    <x-spinner size="sm" />
                </div>
            @elseif(count($results) > 0)
                <div class="divide-y">
                    @foreach($results as $result)
                        <div 
                            class="p-4 hover:bg-gray-50 cursor-pointer"
                            wire:click="selectResult({{ $result['id'] }})"
                        >
                            <div class="font-medium">
                                {!! $highlightQuery($result['name']) !!}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $result['email'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="p-4 text-center text-gray-500">
                    No users found
                </div>
            @endif
        </div>
    @endif
</div>
```

## Styling

The search input component uses Flowbite styling by default. Results are displayed in a dropdown that appears below the input.

## Events

The search input component dispatches the following events:

- `search`: Fired when search query changes
- `result-selected`: Fired when a result is selected
- `search-cleared`: Fired when search is cleared

## Tips and Tricks

1. **Debouncing**: Use `wire:model.live.debounce.500ms` to reduce server requests
2. **Minimum characters**: Set `minChars` to reduce unnecessary searches
3. **Result limiting**: Use `maxResults` to limit displayed results
4. **Query highlighting**: Use `highlightQuery()` to highlight search terms
5. **Loading state**: Show loading indicator while searching

## Performance

For optimal performance:

1. Use debouncing to reduce server requests
2. Set minimum characters to trigger search
3. Limit the number of results displayed
4. Cache frequently searched terms
5. Use database indexes on searchable columns

## Troubleshooting

### Search not triggering

Ensure `wire:model.live` is properly configured and that the query is being updated.

### Results not displaying

Check that `setResults()` is being called with the correct data format.

### Debouncing not working

Ensure you're using `wire:model.live.debounce.500ms` (adjust delay as needed).

### Highlighting not working

Check that `highlightQuery()` is being called on the result text.

## Keyboard Shortcuts

- **Enter**: Select highlighted result
- **Arrow Up/Down**: Navigate results
- **Escape**: Close results dropdown
- **Backspace**: Clear search

