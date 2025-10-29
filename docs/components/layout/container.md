# Container

Responsive container component that centers content and applies max-width constraints. The Container component provides a consistent layout wrapper with automatic centering and responsive padding, perfect for page layouts and content sections.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `max-width` | string | `'7xl'` | Maximum width (sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full) |
| `center-content` | bool | `true` | Whether to center content horizontally |

### Style Props

Container component supports all style props from the HasStyleProps trait, including:

**Spacing**
- `px`, `py`, `p` - Padding (0-96, default px='4')
- `mx`, `my`, `m` - Margin (0-96)

**Colors**
- `bg` - Background color
- `color` - Text color

**Borders**
- `border`, `rounded` - Border and radius

For a complete list of available style props, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-container>
    <x-heading as="h1">Page Content</x-heading>
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
    <x-box as="header">
        <x-heading as="h1" fontSize="3xl" fontWeight="bold">Page Title</x-heading>
    </x-box>

    <x-box as="main" mt="8">
        <x-text>Page content goes here...</x-text>
    </x-box>

    <x-box as="footer" mt="12">
        <x-text color="gray.600">Footer content</x-text>
    </x-box>
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
    <x-box textAlign="center">
        <x-heading as="h1" fontSize="5xl" fontWeight="bold">Welcome</x-heading>
        <x-text mt="4" fontSize="xl" color="gray.600">Your tagline here</x-text>
    </x-box>
</x-container>
```

### Content Section

```blade
<x-container max-width="4xl" px="4" py="12">
    <x-box as="article" class="prose lg:prose-xl">
        <x-heading as="h2">Article Title</x-heading>
        <x-text>Article content...</x-text>
    </x-box>
</x-container>
```

### Dashboard Layout

```blade
<x-container max-width="7xl" px="4" py="8">
    {{-- Dashboard Header --}}
    <x-flex align="center" justify="between" mb="8">
        <x-heading as="h1">Dashboard</x-heading>
        <x-button color="primary">New Item</x-button>
    </x-flex>

    {{-- Stats Grid --}}
    <x-grid templateColumns="4" gap="6" mb="8" class="grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
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
    </x-grid>

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
<x-box minH="screen" bg="gray.100" class="dark:bg-gray-900">
    {{-- Top Navigation --}}
    <x-navbar class="border-b">
        <x-container max-width="full" px="4">
            <x-navbar-brand>Admin Panel</x-navbar-brand>
            {{-- Navigation items --}}
        </x-container>
    </x-navbar>

    {{-- Main Content --}}
    <x-container max-width="7xl" px="4" py="8">
        <x-grid templateColumns="12" gap="6">
            {{-- Sidebar --}}
            <x-box as="aside" class="col-span-3">
                <x-box p="6" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                    {{-- Sidebar content --}}
                </x-box>
            </x-box>

            {{-- Main Content Area --}}
            <x-box as="main" class="col-span-9">
                <x-box p="6" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                    {{-- Page content --}}
                </x-box>
            </x-box>
        </x-grid>
    </x-container>
</x-box>
```

### Form Page Layout

```blade
<x-container max-width="2xl" px="4" py="12">
    <x-box p="8" bg="white" rounded="xl" shadow="lg" class="dark:bg-gray-800">
        <x-heading as="h2" mb="6">Create New User</x-heading>

        <x-box as="form">
            <x-vstack spacing="lg">
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

                <x-flex justify="end" gap="3">
                    <x-button color="secondary">Cancel</x-button>
                    <x-button type="submit" color="primary">Create User</x-button>
                </x-flex>
            </x-vstack>
        </x-box>
    </x-box>
</x-container>
```

### Data Table Page

```blade
<x-container max-width="7xl" px="4" py="8">
    {{-- Page Header --}}
    <x-flex align="center" justify="between" mb="6">
        <x-box>
            <x-heading as="h1">Users</x-heading>
            <x-text color="gray.600" class="dark:text-gray-400">
                Manage your user accounts
            </x-text>
        </x-box>
        <x-flex gap="3">
            <x-button color="secondary">Export</x-button>
            <x-button color="primary">Add User</x-button>
        </x-flex>
    </x-flex>

    {{-- Filters --}}
    <x-box p="4" bg="white" rounded="lg" shadow="sm" mb="6" class="dark:bg-gray-800">
        <x-flex gap="4">
            <x-search-input placeholder="Search users..." class="flex-1" />
            <x-select name="status" w="48">
                <option>All Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </x-select>
        </x-flex>
    </x-box>

    {{-- Data Table --}}
    <x-card>
        <x-table>
            {{-- Table content --}}
        </x-table>
    </x-card>

    {{-- Pagination --}}
    <x-box mt="6">
        <x-pagination :total="100" :per-page="10" />
    </x-box>
</x-container>
```

### Settings Page Layout

```blade
<x-container max-width="5xl" px="4" py="8">
    <x-heading as="h1" mb="8">Settings</x-heading>

    <x-grid templateColumns="12" gap="6">
        {{-- Settings Navigation --}}
        <x-box as="aside" class="col-span-3">
            <x-box p="4" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                <x-vstack as="nav" spacing="xs">
                    <x-box
                        as="a"
                        href="#"
                        display="block"
                        px="3"
                        py="2"
                        rounded="md"
                        bg="blue.50"
                        color="blue.700"
                        class="dark:bg-blue-900 dark:text-blue-200"
                    >
                        Profile
                    </x-box>
                    <x-box
                        as="a"
                        href="#"
                        display="block"
                        px="3"
                        py="2"
                        rounded="md"
                        class="hover:bg-gray-100 dark:hover:bg-gray-700"
                    >
                        Security
                    </x-box>
                    <x-box
                        as="a"
                        href="#"
                        display="block"
                        px="3"
                        py="2"
                        rounded="md"
                        class="hover:bg-gray-100 dark:hover:bg-gray-700"
                    >
                        Notifications
                    </x-box>
                    <x-box
                        as="a"
                        href="#"
                        display="block"
                        px="3"
                        py="2"
                        rounded="md"
                        class="hover:bg-gray-100 dark:hover:bg-gray-700"
                    >
                        Billing
                    </x-box>
                </x-vstack>
            </x-box>
        </x-box>

        {{-- Settings Content --}}
        <x-box as="main" class="col-span-9">
            <x-box p="6" bg="white" rounded="lg" shadow="sm" class="dark:bg-gray-800">
                <x-heading as="h2" mb="6">Profile Settings</x-heading>
                {{-- Settings form --}}
            </x-box>
        </x-box>
    </x-grid>
</x-container>
```

### Landing Page Sections

```blade
{{-- Hero Section --}}
<x-container max-width="7xl" px="4" py="20">
    <x-box textAlign="center">
        <x-heading as="h1" fontSize="5xl" mb="4">
            Build Amazing Applications
        </x-heading>
        <x-text fontSize="xl" color="gray.600" mb="8" class="dark:text-gray-400">
            The best component library for Laravel developers
        </x-text>
        <x-flex justify="center" gap="4">
            <x-button color="primary" size="lg">Get Started</x-button>
            <x-button color="secondary" size="lg">Learn More</x-button>
        </x-flex>
    </x-box>
</x-container>

{{-- Features Section --}}
<x-container max-width="7xl" px="4" py="16" bg="gray.50" class="dark:bg-gray-900">
    <x-heading as="h2" textAlign="center" mb="12">Features</x-heading>
    <x-grid templateColumns="3" gap="8" class="grid-cols-1 md:grid-cols-3">
        {{-- Feature cards --}}
    </x-grid>
</x-container>

{{-- CTA Section --}}
<x-container max-width="4xl" px="4" py="20">
    <x-box p="12" bg="primary" rounded="2xl" textAlign="center" color="white">
        <x-heading as="h2" mb="4">Ready to get started?</x-heading>
        <x-text fontSize="lg" mb="8">
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
    <x-grid templateColumns="2" gap="6">
        <x-box>Content 1</x-box>
        <x-box>Content 2</x-box>
    </x-grid>
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

