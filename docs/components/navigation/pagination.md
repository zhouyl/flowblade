# Pagination

Pagination component for navigating through pages with multiple variants. Pagination provides a flexible way to navigate through pages with support for various sizes and variants.

## Basic Usage

### With Laravel Paginator (Recommended)

The easiest way to use the pagination component is to pass a Laravel Paginator instance directly:

```blade
{{-- In your controller --}}
$users = User::paginate(10);

{{-- In your view --}}
<x-pagination :paginator="$users" />
```

### With Manual Parameters

You can also manually specify pagination parameters:

```blade
<x-pagination
    :current-page="1"
    :total-pages="10"
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `paginator` | `LengthAwarePaginator\|Paginator` | `null` | Laravel paginator instance (auto-extracts all values) |
| `variant` | `string` | `'default'` | Variant: `simple`, `default`, `verbose` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `currentPage` | `int` | `1` | Current page number (auto-set if paginator provided) |
| `totalPages` | `int` | `1` | Total number of pages (auto-set if paginator provided) |
| `total` | `int` | `0` | Total number of items (auto-set if paginator provided) |
| `perPage` | `int` | `10` | Items per page (auto-set if paginator provided) |

### Style Props

Pagination supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).
| `prevLabel` | `string` | `'Previous'` | Previous button label |
| `nextLabel` | `string` | `'Next'` | Next button label |
| `showEdges` | `bool` | `true` | Show first/last page buttons |
| `siblingCount` | `int` | `1` | Number of sibling pages to show |

## Laravel Paginator Integration

### With LengthAwarePaginator (Standard Pagination)

```php
// Controller
public function index()
{
    $users = User::paginate(15);
    return view('users.index', compact('users'));
}
```

```blade
{{-- View - Simple variant --}}
<x-pagination variant="simple" :paginator="$users" />

{{-- View - Default variant --}}
<x-pagination :paginator="$users" />

{{-- View - Verbose variant with stats --}}
<x-pagination variant="verbose" :paginator="$users" />
```

### With Simple Paginator

```php
// Controller
public function index()
{
    $posts = Post::simplePaginate(10);
    return view('posts.index', compact('posts'));
}
```

```blade
{{-- View - Works with simple paginator too --}}
<x-pagination variant="simple" :paginator="$posts" />
```

### With Custom Query

```php
// Controller
public function search(Request $request)
{
    $results = Product::query()
        ->where('name', 'like', "%{$request->q}%")
        ->paginate(20);

    return view('search.results', compact('results'));
}
```

```blade
{{-- View --}}
<x-pagination variant="verbose" :paginator="$results" />
```

## Variants

### Simple Pagination

Only shows previous and next buttons.

```blade
{{-- With paginator --}}
<x-pagination variant="simple" :paginator="$items" />

{{-- With manual parameters --}}
<x-pagination
    variant="simple"
    :current-page="5"
    :total-pages="10"
/>
```

### Default Pagination

Shows page numbers with previous and next buttons.

```blade
{{-- With paginator --}}
<x-pagination :paginator="$items" />

{{-- With manual parameters --}}
<x-pagination
    variant="default"
    :current-page="5"
    :total-pages="10"
/>
```

### Verbose Pagination

Shows statistics, jump-to-page input, and pagination buttons.

```blade
{{-- With paginator (recommended) --}}
<x-pagination variant="verbose" :paginator="$items" />

{{-- With manual parameters --}}
<x-pagination
    variant="verbose"
    :current-page="5"
    :total-pages="10"
    :total="100"
    :per-page="10"
/>
```

## Sizes

```blade
<x-pagination size="xs" :current-page="1" :total-pages="5" />
<x-pagination size="sm" :current-page="1" :total-pages="5" />
<x-pagination size="md" :current-page="1" :total-pages="5" />
<x-pagination size="lg" :current-page="1" :total-pages="5" />
<x-pagination size="xl" :current-page="1" :total-pages="5" />
```

## Custom Labels

```blade
<x-pagination 
    :current-page="5" 
    :total-pages="10"
    prev-label="← Prev"
    next-label="Next →"
/>
```

## Without Edge Buttons

```blade
<x-pagination 
    :current-page="5" 
    :total-pages="20"
    :show-edges="false"
/>
```

## Custom Sibling Count

```blade
{{-- Show 2 pages on each side of current page --}}
<x-pagination 
    :current-page="10" 
    :total-pages="20"
    :sibling-count="2"
/>
```

## Common Patterns

### Table Pagination

```php
// Controller
public function index()
{
    $users = User::paginate(15);
    return view('users.index', compact('users'));
}
```

```blade
<x-card>
    <x-card-body class="p-0">
        <x-table variant="striped">
            <x-table-header>
                <x-table-row>
                    <x-table-head>Name</x-table-head>
                    <x-table-head>Email</x-table-head>
                    <x-table-head>Role</x-table-head>
                </x-table-row>
            </x-table-header>

            <x-table-body>
                @foreach($users as $user)
                <x-table-row>
                    <x-table-cell>{{ $user->name }}</x-table-cell>
                    <x-table-cell>{{ $user->email }}</x-table-cell>
                    <x-table-cell>{{ $user->role }}</x-table-cell>
                </x-table-row>
                @endforeach
            </x-table-body>
        </x-table>
    </x-card-body>

    <x-card-footer>
        <x-pagination variant="verbose" :paginator="$users" />
    </x-card-footer>
</x-card>
```

### Blog Posts Pagination

```php
// Controller
public function index()
{
    $posts = Post::latest()->paginate(10);
    return view('blog.index', compact('posts'));
}
```

```blade
<div class="space-y-6">
    @foreach($posts as $post)
    <x-card>
        <x-card-body>
            <x-heading size="lg" class="mb-2">{{ $post->title }}</x-heading>
            <x-text color="gray">{{ $post->excerpt }}</x-text>
        </x-card-body>
    </x-card>
    @endforeach

    <div class="flex justify-center">
        <x-pagination :paginator="$posts" />
    </div>
</div>
```

### Search Results Pagination

```php
// Controller
public function search(Request $request)
{
    $results = Article::search($request->q)->paginate(20);
    return view('search.results', compact('results'));
}
```

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Search Results</x-heading>
            <x-badge>{{ $results->total() }} results</x-badge>
        </div>
    </x-card-header>

    <x-card-body>
        <div class="space-y-4">
            @foreach($results as $result)
            <div class="p-4 border border-gray-200 rounded-lg">
                <x-heading size="md" class="mb-1">{{ $result->title }}</x-heading>
                <x-text size="sm" color="gray">{{ $result->description }}</x-text>
            </div>
            @endforeach
        </div>
    </x-card-body>

    <x-card-footer>
        <x-pagination variant="verbose" :paginator="$results" />
    </x-card-footer>
</x-card>
```

### Product Listing Pagination

```php
// Controller
public function index()
{
    $products = Product::where('active', true)->paginate(12);
    return view('products.index', compact('products'));
}
```

```blade
<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @foreach($products as $product)
        <x-card>
            <x-card-body class="p-0">
                <img src="{{ $product->image }}" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <x-heading size="md" class="mb-2">{{ $product->name }}</x-heading>
                    <x-heading size="lg" color="primary">${{ $product->price }}</x-heading>
                </div>
            </x-card-body>
        </x-card>
        @endforeach
    </div>

    <div class="flex justify-center">
        <x-pagination :paginator="$products" />
    </div>
</div>
```

### Mobile-Friendly Simple Pagination

```blade
<div class="md:hidden">
    {{-- Simple pagination for mobile --}}
    <x-pagination 
        variant="simple"
        :current-page="$currentPage" 
        :total-pages="$totalPages"
    />
</div>

<div class="hidden md:block">
    {{-- Full pagination for desktop --}}
    <x-pagination 
        variant="verbose"
        :current-page="$currentPage" 
        :total-pages="$totalPages"
        :total="$total"
        :per-page="$perPage"
    />
</div>
```

### API Data Pagination

```blade
<div x-data="{ 
    currentPage: 1,
    totalPages: 10,
    data: [],
    async loadPage(page) {
        this.currentPage = page;
        const response = await fetch(`/api/data?page=${page}`);
        const result = await response.json();
        this.data = result.data;
        this.totalPages = result.totalPages;
    }
}" 
@page-change.window="loadPage($event.detail.page)"
x-init="loadPage(1)">
    
    <div class="space-y-4 mb-6">
        <template x-for="item in data" :key="item.id">
            <x-card>
                <x-card-body>
                    <div x-text="item.title"></div>
                </x-card-body>
            </x-card>
        </template>
    </div>
    
    <x-pagination 
        x-bind:current-page="currentPage" 
        x-bind:total-pages="totalPages"
    />
</div>
```

### Admin Panel Pagination

```php
// Controller
public function index()
{
    $users = User::with('roles')->paginate(25);
    return view('admin.users.index', compact('users'));
}
```

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Users Management</x-heading>
            <x-button>Add User</x-button>
        </div>
    </x-card-header>

    <x-card-body class="p-0">
        <x-table variant="striped">
            <x-table-header>
                <x-table-row>
                    <x-table-head>ID</x-table-head>
                    <x-table-head>Name</x-table-head>
                    <x-table-head>Email</x-table-head>
                    <x-table-head>Role</x-table-head>
                    <x-table-head>Actions</x-table-head>
                </x-table-row>
            </x-table-header>

            <x-table-body>
                @foreach($users as $user)
                <x-table-row>
                    <x-table-cell>{{ $user->id }}</x-table-cell>
                    <x-table-cell>{{ $user->name }}</x-table-cell>
                    <x-table-cell>{{ $user->email }}</x-table-cell>
                    <x-table-cell>
                        <x-badge size="sm">{{ $user->role }}</x-badge>
                    </x-table-cell>
                    <x-table-cell>
                        <div class="flex gap-2">
                            <x-button size="sm" variant="ghost">Edit</x-button>
                            <x-button size="sm" variant="ghost" color="danger">Delete</x-button>
                        </div>
                    </x-table-cell>
                </x-table-row>
                @endforeach
            </x-table-body>
        </x-table>
    </x-card-body>

    <x-card-footer>
        <x-pagination variant="verbose" :paginator="$users" />
    </x-card-footer>
</x-card>
```

## Livewire Integration

```blade
<div>
    <div class="space-y-4 mb-6">
        @foreach($items as $item)
        <x-card>
            <x-card-body>
                <x-heading size="md">{{ $item->title }}</x-heading>
            </x-card-body>
        </x-card>
        @endforeach
    </div>
    
    <x-pagination 
        variant="verbose"
        :current-page="$items->currentPage()" 
        :total-pages="$items->lastPage()"
        :total="$items->total()"
        :per-page="$items->perPage()"
        @page-change="$wire.gotoPage($event.detail.page)"
    />
</div>
```

```php
// Livewire Component
use Livewire\Component;
use Livewire\WithPagination;

class ItemsList extends Component
{
    use WithPagination;
    
    public function gotoPage($page)
    {
        $this->setPage($page);
    }
    
    public function render()
    {
        return view('livewire.items-list', [
            'items' => Item::paginate(10)
        ]);
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    currentPage: 1,
    totalPages: 20,
    total: 200,
    perPage: 10,
    changePage(page) {
        if (page >= 1 && page <= this.totalPages) {
            this.currentPage = page;
            // Fetch data for the new page
            console.log('Loading page:', page);
        }
    }
}" 
@page-change.window="changePage($event.detail.page)">
    
    <div class="mb-6">
        <p>Current Page: <span x-text="currentPage"></span></p>
    </div>
    
    <x-pagination 
        variant="verbose"
        x-bind:current-page="currentPage" 
        x-bind:total-pages="totalPages"
        x-bind:total="total"
        x-bind:per-page="perPage"
    />
</div>
```

## Accessibility

The Pagination component:
- Uses semantic HTML with button elements
- Provides clear visual feedback for current page
- Disables buttons when not applicable
- Supports keyboard navigation
- Works with screen readers
- Emits `page-change` event for integration

