# SearchInput

Search input component with search icon and optional clear button. Perfect for search bars, filters, and query inputs.

## Basic Usage

```blade
<x-search-input placeholder="Search..." />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `invalid` | `boolean` | `false` | Invalid state |
| `readonly` | `boolean` | `false` | Read-only state |
| `placeholder` | `string` | `null` | Placeholder text |
| `showClear` | `boolean` | `true` | Show clear button |

## Sizes

```blade
<x-search-input size="xs" placeholder="Extra small" />
<x-search-input size="sm" placeholder="Small" />
<x-search-input size="md" placeholder="Medium" />
<x-search-input size="lg" placeholder="Large" />
<x-search-input size="xl" placeholder="Extra large" />
```

## Variants

```blade
<!-- Outline (default) -->
<x-search-input variant="outline" placeholder="Outline variant" />

<!-- Filled -->
<x-search-input variant="filled" placeholder="Filled variant" />

<!-- Flushed -->
<x-search-input variant="flushed" placeholder="Flushed variant" />
```

## Without Clear Button

```blade
<x-search-input :show-clear="false" placeholder="No clear button" />
```

## States

```blade
<!-- Disabled -->
<x-search-input disabled placeholder="Disabled" />

<!-- Required -->
<x-search-input required placeholder="Required field" />

<!-- Invalid -->
<x-search-input invalid placeholder="Invalid input" />

<!-- Read-only -->
<x-search-input readonly value="readonly search" />
```

## Common Patterns

### Search Bar

```blade
<form action="/search" method="GET">
    <x-search-input 
        name="q" 
        placeholder="Search products..." 
        required 
    />
</form>
```

### Filter Search

```blade
<div>
    <x-field label="Filter users">
        <x-search-input placeholder="Type to filter..." />
    </x-field>
</div>
```

### Search with Button

```blade
<form action="/search" method="GET" class="flex gap-2">
    <x-search-input 
        name="q" 
        placeholder="Search..." 
        class="flex-1"
    />
    <x-button type="submit">Search</x-button>
</form>
```

### Navbar Search

```blade
<nav class="flex items-center justify-between p-4">
    <div class="text-xl font-bold">Logo</div>
    
    <x-search-input 
        size="sm"
        placeholder="Search..." 
        class="w-64"
    />
    
    <div>Menu</div>
</nav>
```

## Livewire Integration

```blade
<div>
    <x-search-input 
        wire:model.live="search"
        placeholder="Search users..."
    />

    @if($search)
        <div class="mt-4">
            Searching for: {{ $search }}
        </div>
    @endif
</div>
```

### Debounced Search

```blade
<div>
    <x-search-input 
        wire:model.live.debounce.500ms="search"
        placeholder="Search products..."
    />

    <div class="mt-4">
        @foreach($results as $result)
            <div>{{ $result->name }}</div>
        @endforeach
    </div>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    search: '', 
    results: [],
    async performSearch() {
        if (this.search.length < 2) {
            this.results = [];
            return;
        }
        const response = await fetch(`/api/search?q=${this.search}`);
        this.results = await response.json();
    }
}">
    <x-search-input 
        x-model="search"
        @input.debounce.500ms="performSearch()"
        placeholder="Search..."
    />

    <div class="mt-4">
        <template x-for="result in results" :key="result.id">
            <div x-text="result.name"></div>
        </template>
    </div>
</div>
```

### Instant Search with Highlighting

```blade
<div x-data="{ 
    query: '',
    items: ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'],
    get filteredItems() {
        if (!this.query) return this.items;
        return this.items.filter(item => 
            item.toLowerCase().includes(this.query.toLowerCase())
        );
    }
}">
    <x-search-input 
        x-model="query"
        placeholder="Search fruits..."
    />

    <div class="mt-4 space-y-2">
        <template x-for="item in filteredItems" :key="item">
            <div class="p-2 hover:bg-gray-100 rounded" x-text="item"></div>
        </template>
        
        <div x-show="filteredItems.length === 0" class="text-gray-500">
            No results found
        </div>
    </div>
</div>
```

## Keyboard Shortcuts

```blade
<div x-data="{ focused: false }">
    <x-search-input 
        x-ref="search"
        @focus="focused = true"
        @blur="focused = false"
        placeholder="Press / to focus"
    />
</div>

<script>
document.addEventListener('keydown', (e) => {
    if (e.key === '/' && !['INPUT', 'TEXTAREA'].includes(e.target.tagName)) {
        e.preventDefault();
        document.querySelector('input[type="search"]').focus();
    }
});
</script>
```

## Accessibility

The SearchInput component includes:
- Proper `type="search"` attribute
- Clear button with `aria-label`
- Support for `required` and `aria-invalid` attributes
- Keyboard navigation support (Tab, Enter)
- Focus management for clear button
- Announces search input to screen readers
- Supports proper ARIA attributes for search input validation

