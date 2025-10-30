# TabsContent

TabsContent component for displaying content panels within a Tabs component. Each panel is associated with a TabsTrigger.

## Basic Usage

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Tab 1</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="tab1">
        Content for tab 1
    </x-tabs-content>
    <x-tabs-content value="tab2">
        Content for tab 2
    </x-tabs-content>
</x-tabs>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | `null` | Tab identifier (must match TabsTrigger value) |

TabsContent also supports all common style props for flexible styling.

## Examples

### Basic Tab Content

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="overview">Overview</x-tabs-trigger>
        <x-tabs-trigger value="details">Details</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="overview">
        <x-heading size="lg" class="mb-3">Overview</x-heading>
        <x-text>This is the overview content</x-text>
    </x-tabs-content>
    
    <x-tabs-content value="details">
        <x-heading size="lg" class="mb-3">Details</x-heading>
        <x-text>This is the details content</x-text>
    </x-tabs-content>
</x-tabs>
```

### With Rich Content

```blade
<x-tabs>
    <x-tabs-list>
        <x-tabs-trigger value="settings">Settings</x-tabs-trigger>
        <x-tabs-trigger value="security">Security</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="settings">
        <x-card>
            <x-card-body class="space-y-4">
                <x-field label="Email">
                    <x-input type="email" />
                </x-field>
                <x-field label="Language">
                    <x-native-select>
                        <option>English</option>
                        <option>Spanish</option>
                    </x-native-select>
                </x-field>
            </x-card-body>
        </x-card>
    </x-tabs-content>
    
    <x-tabs-content value="security">
        <x-card>
            <x-card-body>
                <x-text>Security settings content</x-text>
            </x-card-body>
        </x-card>
    </x-tabs-content>
</x-tabs>
```

## Accessibility

The TabsContent component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Maintains proper content association

