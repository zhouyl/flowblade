# Avatar

Avatar component for displaying user profile images with fallback options. Avatar provides a flexible way to display user avatars with support for various sizes and shapes.

## Basic Usage

```blade
<x-avatar src="/avatar.jpg" name="John Doe" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `src` | `string` | `null` | Image source URL |
| `name` | `string` | `null` | Name for fallback initials |
| `icon` | `string` | `null` | Icon name (Iconify format) for fallback |
| `shape` | `string` | `'circle'` | Shape: `circle`, `square`, `rounded` |

## Style Props

Avatar supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## With Image

```blade
<x-avatar src="/user1.jpg" name="John Doe" />
<x-avatar src="/user2.jpg" name="Jane Smith" />
```

## With Initials (Fallback)

When no image is provided, the avatar displays initials from the name:

```blade
<x-avatar name="John Doe" />
<x-avatar name="Jane Smith" />
<x-avatar name="Bob Johnson" />
```

## With Icon (Fallback)

```blade
<x-avatar icon="heroicons:user" />
<x-avatar icon="heroicons:user-circle" />
<x-avatar icon="heroicons:user-group" />
```

## Sizes

```blade
<x-avatar size="2xs" name="JD" />
<x-avatar size="xs" name="JD" />
<x-avatar size="sm" name="JD" />
<x-avatar size="md" name="JD" />
<x-avatar size="lg" name="JD" />
<x-avatar size="xl" name="JD" />
<x-avatar size="2xl" name="JD" />
<x-avatar size="3xl" name="JD" />
<x-avatar size="4xl" name="JD" />
```

## Shapes

### Circle (Default)

```blade
<x-avatar shape="circle" src="/avatar.jpg" />
```

### Square

```blade
<x-avatar shape="square" src="/avatar.jpg" />
```

### Rounded

```blade
<x-avatar shape="rounded" src="/avatar.jpg" />
```

## Common Patterns

### User Profile

```blade
<x-flex align="center" gap="3">
    <x-avatar src="/avatar.jpg" name="John Doe" size="lg" />
    <x-box>
        <x-heading size="md">John Doe</x-heading>
        <x-text fontSize="sm" color="gray">Software Developer</x-text>
    </x-box>
</x-flex>
```

### User List

```blade
<x-vstack gap="3">
    <x-flex align="center" gap="3">
        <x-avatar src="/user1.jpg" name="John Doe" />
        <x-box flex="1">
            <x-text fontWeight="medium">John Doe</x-text>
            <x-text fontSize="sm" color="gray">john@example.com</x-text>
        </x-box>
        <x-badge color="success">Active</x-badge>
    </x-flex>

    <x-flex align="center" gap="3">
        <x-avatar name="Jane Smith" />
        <x-box flex="1">
            <x-text fontWeight="medium">Jane Smith</x-text>
            <x-text fontSize="sm" color="gray">jane@example.com</x-text>
        </x-box>
        <x-badge color="gray">Offline</x-badge>
    </x-flex>
</x-vstack>
```

### Avatar Group (Stacked)

```blade
<x-flex class="-space-x-2">
    <x-avatar src="/user1.jpg" name="User 1" class="ring-2 ring-white" />
    <x-avatar src="/user2.jpg" name="User 2" class="ring-2 ring-white" />
    <x-avatar src="/user3.jpg" name="User 3" class="ring-2 ring-white" />
    <x-avatar name="+5" class="ring-2 ring-white bg-gray-300" />
</x-flex>
```

### With Status Indicator

```blade
<x-box position="relative" display="inline-block">
    <x-avatar src="/avatar.jpg" name="John Doe" size="lg" />
    <x-box position="absolute" bottom="0" right="0" w="4" h="4" bg="green.500" border="2" borderColor="white" rounded="full"></x-box>
</x-box>
```

### With Badge

```blade
<x-box position="relative" display="inline-block">
    <x-avatar src="/avatar.jpg" name="John Doe" size="lg" />
    <x-box position="absolute" top="-1" right="-1">
        <x-badge size="xs" color="danger">3</x-badge>
    </x-box>
</x-box>
```

### Comment Author

```blade
<div class="flex gap-3">
    <x-avatar src="/avatar.jpg" name="John Doe" size="sm" />
    <div class="flex-1">
        <div class="flex items-center gap-2 mb-1">
            <x-text weight="medium">John Doe</x-text>
            <x-text size="xs" color="gray">2 hours ago</x-text>
        </div>
        <x-text>This is a great article! Thanks for sharing.</x-text>
    </div>
</div>
```

### Team Members

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Team Members</x-heading>
    </x-card-header>
    
    <x-card-body class="p-0">
        <div class="divide-y">
            <div class="px-4 py-3 flex items-center gap-3">
                <x-avatar src="/user1.jpg" name="John Doe" />
                <div class="flex-1">
                    <x-text weight="medium">John Doe</x-text>
                    <x-text size="sm" color="gray">Team Lead</x-text>
                </div>
                <x-badge size="sm" variant="subtle" color="primary">Admin</x-badge>
            </div>
            
            <div class="px-4 py-3 flex items-center gap-3">
                <x-avatar name="Jane Smith" />
                <div class="flex-1">
                    <x-text weight="medium">Jane Smith</x-text>
                    <x-text size="sm" color="gray">Developer</x-text>
                </div>
                <x-badge size="sm" variant="subtle" color="success">Member</x-badge>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Message Thread

```blade
<div class="space-y-4">
    <div class="flex gap-3">
        <x-avatar src="/user1.jpg" name="John Doe" size="sm" />
        <div class="flex-1">
            <div class="bg-gray-100 rounded-lg p-3">
                <x-text weight="medium" class="mb-1">John Doe</x-text>
                <x-text>Hey, how are you doing?</x-text>
            </div>
            <x-text size="xs" color="gray" class="mt-1 ml-3">10:30 AM</x-text>
        </div>
    </div>
    
    <div class="flex gap-3 flex-row-reverse">
        <x-avatar name="You" size="sm" />
        <div class="flex-1 flex flex-col items-end">
            <div class="bg-blue-600 text-white rounded-lg p-3">
                <x-text>I'm doing great, thanks!</x-text>
            </div>
            <x-text size="xs" color="gray" class="mt-1 mr-3">10:32 AM</x-text>
        </div>
    </div>
</div>
```

### User Card

```blade
<x-card class="max-w-sm">
    <x-card-body class="text-center">
        <x-avatar src="/avatar.jpg" name="John Doe" size="2xl" class="mx-auto mb-4" />
        
        <x-heading size="xl" class="mb-1">John Doe</x-heading>
        <x-text color="gray" class="mb-4">Software Developer</x-text>
        
        <div class="flex justify-center gap-4 mb-4">
            <div class="text-center">
                <x-heading size="lg">1.2K</x-heading>
                <x-text size="sm" color="gray">Followers</x-text>
            </div>
            <div class="text-center">
                <x-heading size="lg">543</x-heading>
                <x-text size="sm" color="gray">Following</x-text>
            </div>
        </div>
        
        <div class="flex gap-2">
            <x-button class="flex-1">Follow</x-button>
            <x-button variant="outline" class="flex-1">Message</x-button>
        </div>
    </x-card-body>
</x-card>
```

### Table with Avatars

```blade
<x-table variant="striped">
    <x-table-header>
        <x-table-row>
            <x-table-head>User</x-table-head>
            <x-table-head>Role</x-table-head>
            <x-table-head>Status</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>
                <div class="flex items-center gap-3">
                    <x-avatar src="/user1.jpg" name="John Doe" size="sm" />
                    <div>
                        <x-text weight="medium">John Doe</x-text>
                        <x-text size="sm" color="gray">john@example.com</x-text>
                    </div>
                </div>
            </x-table-cell>
            <x-table-cell>Admin</x-table-cell>
            <x-table-cell>
                <x-badge color="success">Active</x-badge>
            </x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

## Livewire Integration

```blade
<div>
    @foreach($users as $user)
        <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer"
             wire:click="selectUser({{ $user->id }})">
            <x-avatar 
                :src="$user->avatar_url" 
                :name="$user->name" 
            />
            <div class="flex-1">
                <x-text weight="medium">{{ $user->name }}</x-text>
                <x-text size="sm" color="gray">{{ $user->email }}</x-text>
            </div>
        </div>
    @endforeach
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    users: [
        { id: 1, name: 'John Doe', avatar: '/user1.jpg', online: true },
        { id: 2, name: 'Jane Smith', avatar: null, online: false }
    ]
}">
    <template x-for="user in users" :key="user.id">
        <div class="flex items-center gap-3 p-3">
            <div class="relative">
                <x-avatar 
                    x-bind:src="user.avatar" 
                    x-bind:name="user.name" 
                />
                <span 
                    x-show="user.online"
                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"
                ></span>
            </div>
            <x-text x-text="user.name"></x-text>
        </div>
    </template>
</div>
```

## Accessibility

The Avatar component:
- Uses semantic HTML with proper alt text
- Provides fallback options (initials, icon)
- Maintains proper contrast ratios
- Works with screen readers
- Supports keyboard navigation when interactive

