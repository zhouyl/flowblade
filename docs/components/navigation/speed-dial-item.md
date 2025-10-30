# SpeedDialItem

SpeedDialItem component for displaying individual action items within a SpeedDial. Each item is a quick action button.

## Basic Usage

```blade
<x-speed-dial>
    <x-speed-dial-item href="/new" label="New">
        <x-icon name="heroicons:plus" class="w-5 h-5" />
    </x-speed-dial-item>
    <x-speed-dial-item href="/edit" label="Edit">
        <x-icon name="heroicons:pencil" class="w-5 h-5" />
    </x-speed-dial-item>
    <x-speed-dial-item href="/delete" label="Delete">
        <x-icon name="heroicons:trash" class="w-5 h-5" />
    </x-speed-dial-item>
</x-speed-dial>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'#'` | Link URL |
| `label` | `string` | `null` | Tooltip label |

SpeedDialItem also supports all common style props for flexible styling.

## Examples

### Action Buttons

```blade
<x-speed-dial>
    <x-speed-dial-item href="/compose" label="Compose">
        <x-icon name="heroicons:pencil-square" class="w-5 h-5" />
    </x-speed-dial-item>
    <x-speed-dial-item href="/search" label="Search">
        <x-icon name="heroicons:magnifying-glass" class="w-5 h-5" />
    </x-speed-dial-item>
    <x-speed-dial-item href="/settings" label="Settings">
        <x-icon name="heroicons:cog" class="w-5 h-5" />
    </x-speed-dial-item>
</x-speed-dial>
```

## Accessibility

The SpeedDialItem component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear action labels

