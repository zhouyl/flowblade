# Container

Responsive container component that centers content and applies max-width constraints.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `max-width` | string | `'7xl'` | Maximum width (sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full) |
| `center-content` | bool | `true` | Whether to center content horizontally |
| `px` | string | `'4'` | Horizontal padding (0-16) |
| `py` | string | `null` | Vertical padding (0-16) |

## Basic Usage

```blade
<x-container>
    <h1>Page Content</h1>
</x-container>
```

## Examples

### Different Max Widths

```blade
{{-- Small container --}}
<x-container max-width="sm">
    Small container content
</x-container>

{{-- Medium container --}}
<x-container max-width="md">
    Medium container content
</x-container>

{{-- Large container --}}
<x-container max-width="lg">
    Large container content
</x-container>

{{-- Extra large container --}}
<x-container max-width="7xl">
    Extra large container content
</x-container>

{{-- Full width --}}
<x-container max-width="full">
    Full width container
</x-container>
```

### With Padding

```blade
<x-container px="8" py="12">
    Container with custom padding
</x-container>
```

### Without Centering

```blade
<x-container :center-content="false">
    Left-aligned container
</x-container>
```

### Page Layout Example

```blade
<x-container max-width="7xl" px="4" py="8">
    <header>
        <h1 class="text-3xl font-bold">Page Title</h1>
    </header>
    
    <main class="mt-8">
        <p>Page content goes here...</p>
    </main>
    
    <footer class="mt-12">
        <p class="text-gray-600">Footer content</p>
    </footer>
</x-container>
```

### Nested Containers

```blade
<x-container max-width="7xl">
    <x-container max-width="md">
        Nested container for narrower content
    </x-container>
</x-container>
```

## Common Patterns

### Hero Section

```blade
<x-container max-width="7xl" px="4" py="20">
    <div class="text-center">
        <h1 class="text-5xl font-bold">Welcome</h1>
        <p class="mt-4 text-xl text-gray-600">Your tagline here</p>
    </div>
</x-container>
```

### Content Section

```blade
<x-container max-width="4xl" px="4" py="12">
    <article class="prose lg:prose-xl">
        <h2>Article Title</h2>
        <p>Article content...</p>
    </article>
</x-container>
```

### Dashboard Layout

```blade
<x-container max-width="7xl" px="4" py="8">
    {{-- Dashboard Header --}}
    <div class="flex items-center justify-between mb-8">
        <x-heading level="1">Dashboard</x-heading>
        <x-button color="primary">New Item</x-button>
    </div>

    {{-- Stats Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <x-box p="6" bg="white" rounded="lg" shadow="md" class="dark:bg-gray-800">
            <x-stat label="Total Users" value="1,234" />
        </x-box>
        <x-box p="6" bg="white" rounded="lg" shadow="md" class="dark:bg-gray-800">
            <x-stat label="Revenue" value="$45,678" />
        </x-box>
        <x-box p="6" bg="white" rounded="lg" shadow="md" class="dark:bg-gray-800">
            <x-stat label="Orders" value="890" />
        </x-box>
        <x-box p="6" bg="white" rounded="lg" shadow="md" class="dark:bg-gray-800">
            <x-stat label="Growth" value="+12%" />
        </x-box>
    </div>

    {{-- Main Content --}}
    <x-card>
        <x-card-header>Recent Activity</x-card-header>
        <x-card-body>
            <x-table>
                {{-- Table content --}}
            </x-table>
        </x-card-body>
    </x-card>
</x-container>
```

### Admin Panel Layout

```blade
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    {{-- Top Navigation --}}
    <x-navbar class="border-b">
        <x-container max-width="full" px="4">
            <x-navbar-brand>Admin Panel</x-navbar-brand>
            {{-- Navigation items --}}
        </x-container>
    </x-navbar>

    {{-- Main Content --}}
    <x-container max-width="7xl" px="4" py="8">
        <div class="grid grid-cols-12 gap-6">
            {{-- Sidebar --}}
            <aside class="col-span-3">
                <x-box p="6" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                    {{-- Sidebar content --}}
                </x-box>
            </aside>

            {{-- Main Content Area --}}
            <main class="col-span-9">
                <x-box p="6" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                    {{-- Page content --}}
                </x-box>
            </main>
        </div>
    </x-container>
</div>
```

### Form Page Layout

```blade
<x-container max-width="2xl" px="4" py="12">
    <x-box p="8" bg="white" rounded="xl" shadow="lg" class="dark:bg-gray-800">
        <x-heading level="2" class="mb-6">Create New User</x-heading>

        <form>
            <div class="space-y-6">
                <x-field label="Full Name" required>
                    <x-input name="name" placeholder="John Doe" />
                </x-field>

                <x-field label="Email" required>
                    <x-input type="email" name="email" placeholder="john@example.com" />
                </x-field>

                <x-field label="Role">
                    <x-select name="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </x-select>
                </x-field>

                <div class="flex justify-end gap-3">
                    <x-button color="secondary">Cancel</x-button>
                    <x-button type="submit" color="primary">Create User</x-button>
                </div>
            </div>
        </form>
    </x-box>
</x-container>
```

### Data Table Page

```blade
<x-container max-width="7xl" px="4" py="8">
    {{-- Page Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <x-heading level="1">Users</x-heading>
            <x-text class="text-gray-600 dark:text-gray-400">
                Manage your user accounts
            </x-text>
        </div>
        <div class="flex gap-3">
            <x-button color="secondary">Export</x-button>
            <x-button color="primary">Add User</x-button>
        </div>
    </div>

    {{-- Filters --}}
    <x-box p="4" bg="white" rounded="lg" shadow="sm" class="mb-6 dark:bg-gray-800">
        <div class="flex gap-4">
            <x-search-input placeholder="Search users..." class="flex-1" />
            <x-select name="status" class="w-48">
                <option>All Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </x-select>
        </div>
    </x-box>

    {{-- Data Table --}}
    <x-card>
        <x-table>
            {{-- Table content --}}
        </x-table>
    </x-card>

    {{-- Pagination --}}
    <div class="mt-6">
        <x-pagination :total="100" :per-page="10" />
    </div>
</x-container>
```

### Settings Page Layout

```blade
<x-container max-width="5xl" px="4" py="8">
    <x-heading level="1" class="mb-8">Settings</x-heading>

    <div class="grid grid-cols-12 gap-6">
        {{-- Settings Navigation --}}
        <aside class="col-span-3">
            <x-box p="4" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                <nav class="space-y-1">
                    <a href="#" class="block px-3 py-2 rounded bg-blue-50 text-blue-700 dark:bg-blue-900 dark:text-blue-200">
                        Profile
                    </a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        Security
                    </a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        Notifications
                    </a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        Billing
                    </a>
                </nav>
            </x-box>
        </aside>

        {{-- Settings Content --}}
        <main class="col-span-9">
            <x-box p="6" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                <x-heading level="2" class="mb-6">Profile Settings</x-heading>
                {{-- Settings form --}}
            </x-box>
        </main>
    </div>
</x-container>
```

### Landing Page Sections

```blade
{{-- Hero Section --}}
<x-container max-width="7xl" px="4" py="20">
    <div class="text-center">
        <x-heading level="1" class="text-5xl mb-4">
            Build Amazing Applications
        </x-heading>
        <x-text size="xl" class="text-gray-600 dark:text-gray-400 mb-8">
            The best component library for Laravel developers
        </x-text>
        <div class="flex justify-center gap-4">
            <x-button color="primary" size="lg">Get Started</x-button>
            <x-button color="secondary" size="lg">Learn More</x-button>
        </div>
    </div>
</x-container>

{{-- Features Section --}}
<x-container max-width="7xl" px="4" py="16" class="bg-gray-50 dark:bg-gray-900">
    <x-heading level="2" class="text-center mb-12">Features</x-heading>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        {{-- Feature cards --}}
    </div>
</x-container>

{{-- CTA Section --}}
<x-container max-width="4xl" px="4" py="20">
    <x-box p="12" bg="primary" rounded="2xl" class="text-center text-white">
        <x-heading level="2" class="mb-4">Ready to get started?</x-heading>
        <x-text size="lg" class="mb-8">
            Join thousands of developers building with Flowblade
        </x-text>
        <x-button color="white" size="lg">Start Free Trial</x-button>
    </x-box>
</x-container>
```

## Best Practices

### Responsive Design

Use appropriate max-width values for different content types:
- **sm/md**: Forms, login pages, narrow content
- **lg/xl**: Blog posts, articles, documentation
- **2xl/3xl**: Standard page layouts
- **7xl**: Wide dashboards, data tables
- **full**: Full-width layouts, landing pages

### Padding Guidelines

- **px="4"**: Default horizontal padding for most pages
- **px="6" or px="8"**: More spacious layouts
- **py="8" or py="12"**: Standard vertical spacing
- **py="20"**: Hero sections, landing pages

### Nesting Containers

Avoid deeply nesting containers. Use one main container per page section:

```blade
{{-- Good ✅ --}}
<x-container max-width="7xl">
    <div class="grid grid-cols-2 gap-6">
        <x-box>Content 1</x-box>
        <x-box>Content 2</x-box>
    </div>
</x-container>

{{-- Avoid ❌ --}}
<x-container max-width="7xl">
    <x-container max-width="5xl">
        <x-container max-width="3xl">
            Content
        </x-container>
    </x-container>
</x-container>
```

## Related Components

- [Box](./box.md) - Flexible layout container with styling
- [Flex](./flex.md) - Flexbox layout container
- [Grid](./grid.md) - Grid layout container
- [Center](./center.md) - Center content horizontally and vertically

