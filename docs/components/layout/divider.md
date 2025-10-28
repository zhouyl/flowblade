# Divider Component

Enhanced separator with text/icon support for visually dividing content sections.

## Basic Usage

```blade
<x-divider />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'horizontal'` | Orientation: `horizontal`, `vertical` |
| `variant` | string | `'solid'` | Border style: `solid`, `dashed`, `dotted` |
| `align` | string | `'center'` | Text alignment: `left`, `center`, `right` |
| `icon` | string | `''` | Icon name (Iconify format) |
| `text` | string | `''` | Divider text |

## Examples

### Basic Divider

```blade
<x-divider />
```

### With Text

```blade
<x-divider text="OR" />
```

### With Icon

```blade
<x-divider icon="heroicons:star" />
```

### With Custom Content

```blade
<x-divider>
    <span class="font-bold">Section Break</span>
</x-divider>
```

### Text Alignment

```blade
{{-- Left aligned --}}
<x-divider text="Left" align="left" />

{{-- Center aligned (default) --}}
<x-divider text="Center" align="center" />

{{-- Right aligned --}}
<x-divider text="Right" align="right" />
```

### Border Variants

```blade
{{-- Solid (default) --}}
<x-divider variant="solid" />

{{-- Dashed --}}
<x-divider variant="dashed" />

{{-- Dotted --}}
<x-divider variant="dotted" />
```

### Vertical Divider

```blade
<div class="flex items-center gap-4 h-12">
    <span>Item 1</span>
    <x-divider orientation="vertical" />
    <span>Item 2</span>
    <x-divider orientation="vertical" />
    <span>Item 3</span>
</div>
```

### Login Form Example

```blade
<form>
    <x-field label="Email">
        <x-input type="email" placeholder="your@email.com" />
    </x-field>
    
    <x-field label="Password">
        <x-password-input placeholder="••••••••" />
    </x-field>
    
    <x-button type="submit" class="w-full">Sign In</x-button>
</form>

<x-divider text="OR" class="my-6" />

<x-button variant="outline" class="w-full">
    <x-icon name="logos:google-icon" class="w-5 h-5 mr-2" />
    Continue with Google
</x-button>
```

### Section Dividers

```blade
<div class="space-y-6">
    <section>
        <h2 class="text-xl font-bold mb-4">Personal Information</h2>
        <p>Your personal details...</p>
    </section>
    
    <x-divider text="Account Settings" />
    
    <section>
        <h2 class="text-xl font-bold mb-4">Account Settings</h2>
        <p>Manage your account...</p>
    </section>
    
    <x-divider text="Security" />
    
    <section>
        <h2 class="text-xl font-bold mb-4">Security</h2>
        <p>Security settings...</p>
    </section>
</div>
```

### With Icons and Text

```blade
<x-divider icon="heroicons:star" text="Featured" />

<x-divider icon="heroicons:fire" text="Hot Deals" />

<x-divider icon="heroicons:sparkles" text="New Arrivals" />
```

### Dashed Dividers

```blade
<x-divider variant="dashed" text="Step 1" />
<p>Complete your profile...</p>

<x-divider variant="dashed" text="Step 2" />
<p>Verify your email...</p>

<x-divider variant="dashed" text="Step 3" />
<p>Start using the app...</p>
```

### Dotted Dividers

```blade
<x-divider variant="dotted" />

<x-divider variant="dotted" text="More Options" />
```

### Custom Styling

```blade
<x-divider 
    text="Premium Content" 
    class="my-8"
/>

<x-divider 
    text="VIP Section" 
    class="border-yellow-500 dark:border-yellow-400"
/>
```

### Sidebar Navigation

```blade
<nav class="w-64 p-4">
    <a href="#" class="block py-2">Dashboard</a>
    <a href="#" class="block py-2">Profile</a>
    <a href="#" class="block py-2">Settings</a>
    
    <x-divider class="my-4" />
    
    <a href="#" class="block py-2">Help</a>
    <a href="#" class="block py-2">Logout</a>
</nav>
```

### Content Sections

```blade
<article>
    <h1>Article Title</h1>
    <p>Introduction paragraph...</p>
    
    <x-divider icon="heroicons:document-text" text="Main Content" class="my-6" />
    
    <p>Main content...</p>
    
    <x-divider icon="heroicons:chat-bubble-left-right" text="Comments" class="my-6" />
    
    <div class="comments">
        <!-- Comments here -->
    </div>
</article>
```

### Pricing Table

```blade
<div class="grid grid-cols-3 gap-6">
    <div class="border rounded-lg p-6">
        <h3 class="text-xl font-bold">Basic</h3>
        <p class="text-3xl font-bold my-4">$9/mo</p>
        <x-divider class="my-4" />
        <ul class="space-y-2">
            <li>Feature 1</li>
            <li>Feature 2</li>
        </ul>
    </div>
    
    <div class="border rounded-lg p-6">
        <h3 class="text-xl font-bold">Pro</h3>
        <p class="text-3xl font-bold my-4">$29/mo</p>
        <x-divider class="my-4" />
        <ul class="space-y-2">
            <li>All Basic features</li>
            <li>Feature 3</li>
            <li>Feature 4</li>
        </ul>
    </div>
    
    <div class="border rounded-lg p-6">
        <h3 class="text-xl font-bold">Enterprise</h3>
        <p class="text-3xl font-bold my-4">$99/mo</p>
        <x-divider class="my-4" />
        <ul class="space-y-2">
            <li>All Pro features</li>
            <li>Feature 5</li>
            <li>Feature 6</li>
        </ul>
    </div>
</div>
```

### Timeline with Dividers

```blade
<div class="space-y-4">
    <div>
        <h3 class="font-bold">2024</h3>
        <p>Current year events...</p>
    </div>
    
    <x-divider variant="dashed" />
    
    <div>
        <h3 class="font-bold">2023</h3>
        <p>Last year events...</p>
    </div>
    
    <x-divider variant="dashed" />
    
    <div>
        <h3 class="font-bold">2022</h3>
        <p>Previous events...</p>
    </div>
</div>
```

## Accessibility

The Divider component:
- Uses semantic HTML with proper border styling
- Supports dark mode
- Text content is readable by screen readers
- Proper contrast ratios

## Browser Support

The Divider component uses:
- CSS Flexbox for layout
- Tailwind CSS utilities
- Border styles (solid, dashed, dotted)

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Separator](./separator.md) - Simple separator line
- [Card](../data-display/card.md) - Card with dividers
- [List](../typography/list.md) - List with dividers

