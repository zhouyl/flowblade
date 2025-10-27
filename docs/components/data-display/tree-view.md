# TreeView

Tree view component for displaying hierarchical data in an expandable/collapsible structure.

## Basic Usage

```blade
<x-tree-view>
    <x-tree-view-item label="Documents" :has-children="true" expanded>
        <x-tree-view-item label="Work" :has-children="true">
            <x-tree-view-item label="Project A" />
            <x-tree-view-item label="Project B" />
        </x-tree-view-item>
        <x-tree-view-item label="Personal" :has-children="true">
            <x-tree-view-item label="Photos" />
            <x-tree-view-item label="Videos" />
        </x-tree-view-item>
    </x-tree-view-item>
</x-tree-view>
```

## Props

### TreeView Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |

### TreeViewItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Label text |
| `icon` | `string` | `null` | Icon name |
| `expanded` | `boolean` | `false` | Is expanded by default |
| `hasChildren` | `boolean` | `false` | Has children nodes |

## With Icons

```blade
<x-tree-view>
    <x-tree-view-item 
        label="Documents" 
        icon="heroicons:folder"
        :has-children="true" 
        expanded
    >
        <x-tree-view-item 
            label="report.pdf" 
            icon="heroicons:document-text"
        />
        <x-tree-view-item 
            label="presentation.pptx" 
            icon="heroicons:presentation-chart-bar"
        />
    </x-tree-view-item>
    
    <x-tree-view-item 
        label="Images" 
        icon="heroicons:photo"
        :has-children="true"
    >
        <x-tree-view-item 
            label="photo1.jpg" 
            icon="heroicons:photo"
        />
        <x-tree-view-item 
            label="photo2.jpg" 
            icon="heroicons:photo"
        />
    </x-tree-view-item>
</x-tree-view>
```

## Sizes

```blade
<x-tree-view size="xs">
    <x-tree-view-item label="Small Tree" :has-children="true">
        <x-tree-view-item label="Child" />
    </x-tree-view-item>
</x-tree-view>

<x-tree-view size="sm">
    <x-tree-view-item label="Small Tree" :has-children="true">
        <x-tree-view-item label="Child" />
    </x-tree-view-item>
</x-tree-view>

<x-tree-view size="md">
    <x-tree-view-item label="Medium Tree" :has-children="true">
        <x-tree-view-item label="Child" />
    </x-tree-view-item>
</x-tree-view>

<x-tree-view size="lg">
    <x-tree-view-item label="Large Tree" :has-children="true">
        <x-tree-view-item label="Child" />
    </x-tree-view-item>
</x-tree-view>

<x-tree-view size="xl">
    <x-tree-view-item label="Extra Large Tree" :has-children="true">
        <x-tree-view-item label="Child" />
    </x-tree-view-item>
</x-tree-view>
```

## Expanded by Default

```blade
<x-tree-view>
    <x-tree-view-item label="Root" :has-children="true" expanded>
        <x-tree-view-item label="Child 1" :has-children="true" expanded>
            <x-tree-view-item label="Grandchild 1" />
            <x-tree-view-item label="Grandchild 2" />
        </x-tree-view-item>
        <x-tree-view-item label="Child 2" />
    </x-tree-view-item>
</x-tree-view>
```

## Common Patterns

### File System Browser

```blade
<x-card>
    <x-heading size="lg" class="mb-4">File Browser</x-heading>
    
    <x-tree-view>
        <x-tree-view-item 
            label="My Computer" 
            icon="heroicons:computer-desktop"
            :has-children="true" 
            expanded
        >
            <x-tree-view-item 
                label="Documents" 
                icon="heroicons:folder"
                :has-children="true"
            >
                <x-tree-view-item 
                    label="Work" 
                    icon="heroicons:folder"
                    :has-children="true"
                >
                    <x-tree-view-item 
                        label="project.docx" 
                        icon="heroicons:document-text"
                    />
                    <x-tree-view-item 
                        label="budget.xlsx" 
                        icon="heroicons:table-cells"
                    />
                </x-tree-view-item>
                <x-tree-view-item 
                    label="Personal" 
                    icon="heroicons:folder"
                    :has-children="true"
                >
                    <x-tree-view-item 
                        label="resume.pdf" 
                        icon="heroicons:document-text"
                    />
                </x-tree-view-item>
            </x-tree-view-item>
            
            <x-tree-view-item 
                label="Downloads" 
                icon="heroicons:arrow-down-tray"
                :has-children="true"
            >
                <x-tree-view-item 
                    label="installer.exe" 
                    icon="heroicons:cog"
                />
            </x-tree-view-item>
        </x-tree-view-item>
    </x-tree-view>
</x-card>
```

### Organization Chart

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Organization</x-heading>
    
    <x-tree-view>
        <x-tree-view-item 
            label="CEO - John Doe" 
            icon="heroicons:user-circle"
            :has-children="true" 
            expanded
        >
            <x-tree-view-item 
                label="CTO - Jane Smith" 
                icon="heroicons:user"
                :has-children="true"
            >
                <x-tree-view-item 
                    label="Engineering Team" 
                    icon="heroicons:user-group"
                    :has-children="true"
                >
                    <x-tree-view-item 
                        label="Frontend Developer" 
                        icon="heroicons:user"
                    />
                    <x-tree-view-item 
                        label="Backend Developer" 
                        icon="heroicons:user"
                    />
                </x-tree-view-item>
            </x-tree-view-item>
            
            <x-tree-view-item 
                label="CFO - Bob Johnson" 
                icon="heroicons:user"
                :has-children="true"
            >
                <x-tree-view-item 
                    label="Finance Team" 
                    icon="heroicons:user-group"
                    :has-children="true"
                >
                    <x-tree-view-item 
                        label="Accountant" 
                        icon="heroicons:user"
                    />
                </x-tree-view-item>
            </x-tree-view-item>
        </x-tree-view-item>
    </x-tree-view>
</x-card>
```

### Navigation Menu

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Navigation</x-heading>
    
    <x-tree-view>
        <x-tree-view-item 
            label="Dashboard" 
            icon="heroicons:home"
        />
        
        <x-tree-view-item 
            label="Products" 
            icon="heroicons:shopping-bag"
            :has-children="true"
        >
            <x-tree-view-item 
                label="All Products" 
                icon="heroicons:list-bullet"
            />
            <x-tree-view-item 
                label="Categories" 
                icon="heroicons:tag"
            />
            <x-tree-view-item 
                label="Inventory" 
                icon="heroicons:cube"
            />
        </x-tree-view-item>
        
        <x-tree-view-item 
            label="Orders" 
            icon="heroicons:shopping-cart"
            :has-children="true"
        >
            <x-tree-view-item 
                label="All Orders" 
                icon="heroicons:list-bullet"
            />
            <x-tree-view-item 
                label="Pending" 
                icon="heroicons:clock"
            />
            <x-tree-view-item 
                label="Completed" 
                icon="heroicons:check-circle"
            />
        </x-tree-view-item>
        
        <x-tree-view-item 
            label="Settings" 
            icon="heroicons:cog"
        />
    </x-tree-view>
</x-card>
```

### Category Tree

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Categories</x-heading>
    
    <x-tree-view>
        <x-tree-view-item 
            label="Electronics" 
            :has-children="true" 
            expanded
        >
            <x-tree-view-item 
                label="Computers" 
                :has-children="true"
            >
                <x-tree-view-item label="Laptops" />
                <x-tree-view-item label="Desktops" />
                <x-tree-view-item label="Tablets" />
            </x-tree-view-item>
            
            <x-tree-view-item 
                label="Mobile Phones" 
                :has-children="true"
            >
                <x-tree-view-item label="Smartphones" />
                <x-tree-view-item label="Feature Phones" />
            </x-tree-view-item>
        </x-tree-view-item>
        
        <x-tree-view-item 
            label="Clothing" 
            :has-children="true"
        >
            <x-tree-view-item label="Men's Clothing" />
            <x-tree-view-item label="Women's Clothing" />
            <x-tree-view-item label="Kids' Clothing" />
        </x-tree-view-item>
    </x-tree-view>
</x-card>
```

## Livewire Integration

```blade
<x-card>
    <x-heading size="lg" class="mb-4">File System</x-heading>
    
    <x-tree-view>
        @foreach($folders as $folder)
            <x-tree-view-item 
                :label="$folder->name" 
                icon="heroicons:folder"
                :has-children="$folder->hasChildren()"
                :expanded="$folder->isExpanded()"
            >
                @if($folder->hasChildren())
                    @foreach($folder->children as $child)
                        <x-tree-view-item 
                            :label="$child->name" 
                            :icon="$child->isFolder() ? 'heroicons:folder' : 'heroicons:document'"
                        />
                    @endforeach
                @endif
            </x-tree-view-item>
        @endforeach
    </x-tree-view>
</x-card>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    tree: [
        {
            label: 'Root',
            icon: 'heroicons:folder',
            expanded: true,
            children: [
                { label: 'Child 1', icon: 'heroicons:document' },
                { 
                    label: 'Child 2', 
                    icon: 'heroicons:folder',
                    children: [
                        { label: 'Grandchild 1', icon: 'heroicons:document' }
                    ]
                }
            ]
        }
    ]
}">
    <x-tree-view>
        <template x-for="node in tree" :key="node.label">
            <x-tree-view-item 
                :label="node.label"
                :icon="node.icon"
                :has-children="node.children && node.children.length > 0"
                :expanded="node.expanded"
            >
                <template x-if="node.children">
                    <template x-for="child in node.children" :key="child.label">
                        <x-tree-view-item 
                            :label="child.label"
                            :icon="child.icon"
                        />
                    </template>
                </template>
            </x-tree-view-item>
        </template>
    </x-tree-view>
</div>
```

## Accessibility

The TreeView component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Provides visual feedback for expand/collapse
- Maintains proper focus management
- Works with screen readers
- Clear visual hierarchy

