# Box

Flexible layout container component with styling options.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `bg` | string | `null` | Background color (primary, secondary, success, warning, danger, info, gray) |
| `color` | string | `null` | Text color |
| `p` | string | `null` | Padding (0-16) |
| `m` | string | `null` | Margin (0-16) |
| `rounded` | string | `null` | Border radius (none, sm, md, lg, xl, full) |
| `shadow` | string | `null` | Shadow size (none, sm, md, lg, xl) |
| `border` | string | `null` | Border color |

## Basic Usage

```blade
<x-box p="6" bg="primary" rounded="lg" class="text-white">
    Content here
</x-box>
```

## Examples

### With Background Color

```blade
<x-box p="4" bg="success" rounded="md" class="text-white">
    Success message
</x-box>

<x-box p="4" bg="danger" rounded="md" class="text-white">
    Error message
</x-box>
```

### With Shadow

```blade
<x-box p="6" shadow="lg" rounded="md">
    Card-like box with shadow
</x-box>
```

### With Border

```blade
<x-box p="4" border="primary" rounded="lg">
    Bordered box
</x-box>
```

### Custom Element

```blade
<x-box as="section" p="8" bg="gray" rounded="xl">
    Section content
</x-box>
```

### Combining Props

```blade
<x-box 
    p="6" 
    m="4" 
    bg="info" 
    rounded="lg" 
    shadow="md" 
    class="text-white"
>
    Fully styled box
</x-box>
```

## With Livewire

```blade
<x-box 
    wire:click="handleClick" 
    p="4" 
    bg="primary" 
    rounded="md"
    class="cursor-pointer hover:bg-blue-700"
>
    Clickable box
</x-box>
```

## With Alpine.js

```blade
<div x-data="{ open: false }">
    <x-box
        @click="open = !open"
        p="4"
        bg="secondary"
        rounded="md"
        class="cursor-pointer"
    >
        Toggle content
    </x-box>

    <x-box x-show="open" p="4" bg="info" rounded="md" class="mt-2">
        Hidden content
    </x-box>
</div>
```

## Card Layout

```blade
<x-box p="6" bg="white" rounded="lg" shadow="md" class="dark:bg-gray-800">
    <x-heading level="3" class="mb-4">Card Title</x-heading>
    <x-text class="text-gray-600 dark:text-gray-400">
        Card content goes here. This is a common pattern for creating card-like layouts.
    </x-text>
</x-box>
```

## Dashboard Widget

```blade
<x-box p="6" bg="white" rounded="xl" shadow="lg" class="dark:bg-gray-800">
    <div class="flex items-center justify-between mb-4">
        <x-heading level="4">Total Sales</x-heading>
        <x-badge color="success">+12%</x-badge>
    </div>
    <x-text size="3xl" class="font-bold">$24,500</x-text>
    <x-text size="sm" class="text-gray-500">vs last month</x-text>
</x-box>
```

## Alert Box

```blade
<x-box p="4" bg="blue" rounded="lg" border="blue" class="text-blue-800 dark:text-blue-400">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
        </svg>
        <span>This is an informational message.</span>
    </div>
</x-box>
```

## Sidebar Section

```blade
<x-box as="aside" p="6" bg="gray" rounded="lg" class="w-64">
    <x-heading level="4" class="mb-4">Navigation</x-heading>
    <nav class="space-y-2">
        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
            Dashboard
        </a>
        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
            Settings
        </a>
    </nav>
</x-box>
```

## Feature Box

```blade
<x-box p="8" bg="white" rounded="2xl" shadow="xl" class="text-center dark:bg-gray-800">
    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </svg>
    </div>
    <x-heading level="3" class="mb-2">Fast Performance</x-heading>
    <x-text class="text-gray-600 dark:text-gray-400">
        Lightning-fast load times and optimized for performance.
    </x-text>
</x-box>
```

## Pricing Card

```blade
<x-box p="8" bg="white" rounded="xl" shadow="lg" border="gray" class="dark:bg-gray-800">
    <x-heading level="3" class="mb-2">Pro Plan</x-heading>
    <div class="mb-4">
        <span class="text-4xl font-bold">$29</span>
        <span class="text-gray-500">/month</span>
    </div>
    <ul class="space-y-2 mb-6">
        <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            Unlimited projects
        </li>
        <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            Priority support
        </li>
    </ul>
    <x-button color="primary" class="w-full">Get Started</x-button>
</x-box>
```

## Notification Box

```blade
<x-box p="4" bg="green" rounded="lg" class="flex items-center justify-between text-green-800 dark:text-green-200">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <span>Successfully saved!</span>
    </div>
    <button class="text-green-800 hover:text-green-900 dark:text-green-200 dark:hover:text-green-100">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
    </button>
</x-box>
```

## Related Components

- [Container](./container.md) - Responsive container with max-width
- [Card](../data-display/card.md) - Pre-styled card component
- [Flex](./flex.md) - Flexbox layout container
- [Grid](./grid.md) - Grid layout container

