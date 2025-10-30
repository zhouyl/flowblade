# MegaMenu Component

Large dropdown menu with multi-column layout, icons, descriptions, and grouping for complex navigation. MegaMenu provides a flexible way to create complex dropdown menus. Perfect for complex navigation, product menus, and multi-column dropdowns.

## Basic Usage

```blade
<x-mega-menu>
    <x-slot name="trigger">Products</x-slot>

    <x-mega-menu-column title="Features">
        <x-mega-menu-item
            icon="heroicons:rocket-launch"
            title="Analytics"
            description="Track your metrics"
            href="/analytics"
        />
        <x-mega-menu-item
            icon="heroicons:chart-bar"
            title="Reports"
            description="Generate insights"
            href="/reports"
        />
    </x-mega-menu-column>

    <x-mega-menu-column title="Resources">
        <x-mega-menu-item
            icon="heroicons:book-open"
            title="Documentation"
            description="Learn how to use"
            href="/docs"
        />
        <x-mega-menu-item
            icon="heroicons:academic-cap"
            title="Tutorials"
            description="Step-by-step guides"
            href="/tutorials"
        />
    </x-mega-menu-column>
</x-mega-menu>
```

## Props

### MegaMenu Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `trigger` | string | `'hover'` | Trigger mode: `click`, `hover` |
| `width` | string | `'full'` | Width: `sm`, `md`, `lg`, `xl`, `full` |
| `columns` | int | `3` | Number of columns: 1-4 |
| `id` | string | auto-generated | Unique identifier |

### MegaMenuColumn Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | string | `''` | Column title |

### MegaMenuItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | string | `'#'` | Link URL |
| `icon` | string | `''` | Icon name (Iconify format) |
| `title` | string | `''` | Item title |
| `description` | string | `''` | Item description |

### Style Props

MegaMenu and related components support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Three Column Layout

```blade
<x-mega-menu :columns="3">
    <x-slot name="trigger">Products</x-slot>
    
    <x-mega-menu-column title="Analytics">
        <x-mega-menu-item 
            icon="heroicons:chart-bar" 
            title="Dashboard" 
            description="View your metrics"
            href="/dashboard"
        />
        <x-mega-menu-item 
            icon="heroicons:presentation-chart-line" 
            title="Reports" 
            description="Generate reports"
            href="/reports"
        />
        <x-mega-menu-item 
            icon="heroicons:arrow-trending-up" 
            title="Insights" 
            description="Get insights"
            href="/insights"
        />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Marketing">
        <x-mega-menu-item 
            icon="heroicons:megaphone" 
            title="Campaigns" 
            description="Manage campaigns"
            href="/campaigns"
        />
        <x-mega-menu-item 
            icon="heroicons:envelope" 
            title="Email" 
            description="Email marketing"
            href="/email"
        />
        <x-mega-menu-item 
            icon="heroicons:users" 
            title="Audience" 
            description="Manage audience"
            href="/audience"
        />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Sales">
        <x-mega-menu-item 
            icon="heroicons:shopping-cart" 
            title="Orders" 
            description="View orders"
            href="/orders"
        />
        <x-mega-menu-item 
            icon="heroicons:credit-card" 
            title="Payments" 
            description="Manage payments"
            href="/payments"
        />
        <x-mega-menu-item 
            icon="heroicons:users-group" 
            title="Customers" 
            description="Customer list"
            href="/customers"
        />
    </x-mega-menu-column>
</x-mega-menu>
```

### Four Column Layout

```blade
<x-mega-menu :columns="4" width="xl">
    <x-slot name="trigger">Resources</x-slot>
    
    <x-mega-menu-column title="Learn">
        <x-mega-menu-item icon="heroicons:book-open" title="Documentation" href="/docs" />
        <x-mega-menu-item icon="heroicons:academic-cap" title="Tutorials" href="/tutorials" />
        <x-mega-menu-item icon="heroicons:video-camera" title="Videos" href="/videos" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Community">
        <x-mega-menu-item icon="heroicons:chat-bubble-left-right" title="Forum" href="/forum" />
        <x-mega-menu-item icon="heroicons:user-group" title="Discord" href="/discord" />
        <x-mega-menu-item icon="heroicons:newspaper" title="Blog" href="/blog" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Support">
        <x-mega-menu-item icon="heroicons:question-mark-circle" title="Help Center" href="/help" />
        <x-mega-menu-item icon="heroicons:ticket" title="Submit Ticket" href="/tickets" />
        <x-mega-menu-item icon="heroicons:phone" title="Contact Us" href="/contact" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Company">
        <x-mega-menu-item icon="heroicons:building-office" title="About Us" href="/about" />
        <x-mega-menu-item icon="heroicons:briefcase" title="Careers" href="/careers" />
        <x-mega-menu-item icon="heroicons:newspaper" title="Press" href="/press" />
    </x-mega-menu-column>
</x-mega-menu>
```

### Click Trigger

```blade
<x-mega-menu trigger="click">
    <x-slot name="trigger">Services</x-slot>
    
    <x-mega-menu-column title="Design">
        <x-mega-menu-item 
            icon="heroicons:paint-brush" 
            title="UI Design" 
            description="Beautiful interfaces"
        />
        <x-mega-menu-item 
            icon="heroicons:sparkles" 
            title="UX Design" 
            description="User experience"
        />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Development">
        <x-mega-menu-item 
            icon="heroicons:code-bracket" 
            title="Web Development" 
            description="Modern web apps"
        />
        <x-mega-menu-item 
            icon="heroicons:device-phone-mobile" 
            title="Mobile Apps" 
            description="iOS and Android"
        />
    </x-mega-menu-column>
</x-mega-menu>
```

### Two Column Layout

```blade
<x-mega-menu :columns="2" width="lg">
    <x-slot name="trigger">Solutions</x-slot>
    
    <x-mega-menu-column title="For Business">
        <x-mega-menu-item 
            icon="heroicons:building-office-2" 
            title="Enterprise" 
            description="For large organizations"
            href="/enterprise"
        />
        <x-mega-menu-item 
            icon="heroicons:building-storefront" 
            title="Small Business" 
            description="For small teams"
            href="/small-business"
        />
        <x-mega-menu-item 
            icon="heroicons:user" 
            title="Freelancers" 
            description="For individuals"
            href="/freelancers"
        />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="By Industry">
        <x-mega-menu-item 
            icon="heroicons:shopping-bag" 
            title="E-commerce" 
            description="Online stores"
            href="/ecommerce"
        />
        <x-mega-menu-item 
            icon="heroicons:heart" 
            title="Healthcare" 
            description="Medical services"
            href="/healthcare"
        />
        <x-mega-menu-item 
            icon="heroicons:academic-cap" 
            title="Education" 
            description="Schools and courses"
            href="/education"
        />
    </x-mega-menu-column>
</x-mega-menu>
```

### Without Icons

```blade
<x-mega-menu>
    <x-slot name="trigger">Categories</x-slot>
    
    <x-mega-menu-column title="Electronics">
        <x-mega-menu-item title="Laptops" href="/laptops" />
        <x-mega-menu-item title="Phones" href="/phones" />
        <x-mega-menu-item title="Tablets" href="/tablets" />
        <x-mega-menu-item title="Accessories" href="/accessories" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Fashion">
        <x-mega-menu-item title="Men's Clothing" href="/mens" />
        <x-mega-menu-item title="Women's Clothing" href="/womens" />
        <x-mega-menu-item title="Shoes" href="/shoes" />
        <x-mega-menu-item title="Accessories" href="/fashion-accessories" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Home & Garden">
        <x-mega-menu-item title="Furniture" href="/furniture" />
        <x-mega-menu-item title="Decor" href="/decor" />
        <x-mega-menu-item title="Kitchen" href="/kitchen" />
        <x-mega-menu-item title="Garden" href="/garden" />
    </x-mega-menu-column>
</x-mega-menu>
```

### Custom Content

```blade
<x-mega-menu :columns="2">
    <x-slot name="trigger">Featured</x-slot>
    
    <x-mega-menu-column>
        <li class="p-3">
            <img src="/images/featured-product.jpg" alt="Featured" class="rounded-lg mb-2" />
            <h4 class="font-semibold text-gray-900 dark:text-white">New Product Launch</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">Check out our latest innovation</p>
            <a href="/new-product" class="text-blue-600 hover:underline text-sm">Learn more →</a>
        </li>
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Quick Links">
        <x-mega-menu-item icon="heroicons:star" title="Best Sellers" href="/best-sellers" />
        <x-mega-menu-item icon="heroicons:fire" title="Hot Deals" href="/deals" />
        <x-mega-menu-item icon="heroicons:gift" title="Gift Cards" href="/gift-cards" />
    </x-mega-menu-column>
</x-mega-menu>
```

### E-commerce Navigation

```blade
<x-mega-menu :columns="4" width="full">
    <x-slot name="trigger">Shop</x-slot>
    
    <x-mega-menu-column title="Men">
        <x-mega-menu-item title="Shirts" href="/men/shirts" />
        <x-mega-menu-item title="Pants" href="/men/pants" />
        <x-mega-menu-item title="Shoes" href="/men/shoes" />
        <x-mega-menu-item title="Accessories" href="/men/accessories" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Women">
        <x-mega-menu-item title="Dresses" href="/women/dresses" />
        <x-mega-menu-item title="Tops" href="/women/tops" />
        <x-mega-menu-item title="Shoes" href="/women/shoes" />
        <x-mega-menu-item title="Accessories" href="/women/accessories" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Kids">
        <x-mega-menu-item title="Boys" href="/kids/boys" />
        <x-mega-menu-item title="Girls" href="/kids/girls" />
        <x-mega-menu-item title="Toys" href="/kids/toys" />
        <x-mega-menu-item title="School" href="/kids/school" />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Sale">
        <x-mega-menu-item title="Clearance" href="/sale/clearance" />
        <x-mega-menu-item title="Outlet" href="/sale/outlet" />
        <x-mega-menu-item title="Deals" href="/sale/deals" />
        <x-mega-menu-item title="Gift Cards" href="/gift-cards" />
    </x-mega-menu-column>
</x-mega-menu>
```

### SaaS Product Navigation

```blade
<x-mega-menu :columns="3">
    <x-slot name="trigger">Platform</x-slot>
    
    <x-mega-menu-column title="Core Features">
        <x-mega-menu-item 
            icon="heroicons:chart-bar" 
            title="Analytics" 
            description="Real-time insights"
            href="/features/analytics"
        />
        <x-mega-menu-item 
            icon="heroicons:users" 
            title="Team Collaboration" 
            description="Work together"
            href="/features/collaboration"
        />
        <x-mega-menu-item 
            icon="heroicons:shield-check" 
            title="Security" 
            description="Enterprise-grade"
            href="/features/security"
        />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Integrations">
        <x-mega-menu-item 
            icon="heroicons:puzzle-piece" 
            title="API" 
            description="Developer tools"
            href="/integrations/api"
        />
        <x-mega-menu-item 
            icon="heroicons:link" 
            title="Webhooks" 
            description="Real-time events"
            href="/integrations/webhooks"
        />
        <x-mega-menu-item 
            icon="heroicons:squares-plus" 
            title="Apps" 
            description="Third-party apps"
            href="/integrations/apps"
        />
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Resources">
        <x-mega-menu-item 
            icon="heroicons:book-open" 
            title="Documentation" 
            description="Learn the basics"
            href="/docs"
        />
        <x-mega-menu-item 
            icon="heroicons:code-bracket" 
            title="API Reference" 
            description="Technical docs"
            href="/api-reference"
        />
        <x-mega-menu-item 
            icon="heroicons:chat-bubble-left-right" 
            title="Community" 
            description="Get help"
            href="/community"
        />
    </x-mega-menu-column>
</x-mega-menu>
```

## Styling Tips

### Custom Width

```blade
<x-mega-menu width="lg">
    <!-- Content -->
</x-mega-menu>
```

### Custom Column Styling

```blade
<x-mega-menu-column title="Featured" class="bg-gray-50 dark:bg-gray-900 rounded-lg p-4">
    <!-- Items -->
</x-mega-menu-column>
```

## Accessibility

The MegaMenu component includes proper ARIA attributes and keyboard navigation:

- Uses semantic HTML (`<nav>`, `<ul>`, `<li>`)
- Keyboard accessible (Tab, Enter, Escape, Arrow keys)
- Screen reader friendly
- Focus management
- Announces menu structure to screen readers
- Supports proper ARIA attributes for menu state

## Browser Support

The MegaMenu component uses:
- CSS Grid for layout
- Flexbox for alignment
- JavaScript for interaction
- Tailwind CSS utilities

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Menu](../overlay/menu.md) - Dropdown menu
- [Navbar](./navbar.md) - Navigation bar
- [Sidebar](./sidebar.md) - Sidebar navigation

