# Navbar

Responsive navigation bar component with logo, links, and mobile hamburger menu. Built with Flowbite's collapse functionality for mobile responsiveness. Navbar provides a flexible way to create responsive navigation bars. Perfect for website headers, application navigation, and responsive menus.

## Basic Usage

```blade
<x-navbar>
    <x-navbar-brand href="/" logo="/logo.svg" name="My App" />

    <x-navbar-toggle target="navbar-menu" />

    <x-navbar-collapse id="navbar-menu">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

## Components

### Navbar

Main navigation bar container.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string\|null` | `'default'` | Variant: `default`, `solid` |
| `sticky` | `bool` | `false` | Whether navbar is sticky |
| `border` | `bool` | `true` | Whether to show border |

Navbar supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

### NavbarBrand

Logo and brand name section. Typically placed at the start of the navigation bar. Perfect for displaying company logos, brand names, and home links.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'/'` | Brand link URL |
| `logo` | `string\|null` | `null` | Logo image URL |
| `name` | `string\|null` | `null` | Brand name |

NavbarBrand also supports all common style props for flexible styling.

#### NavbarBrand Examples

**With Logo and Text**

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <img src="/logo.png" alt="Logo" class="h-8 w-8" />
        <x-text weight="bold" size="lg" class="ml-2">Flowblade</x-text>
    </x-navbar-brand>
</x-navbar>
```

**Logo Only**

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <img src="/logo.png" alt="Logo" class="h-10" />
    </x-navbar-brand>
</x-navbar>
```

**Text Only**

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-heading as="h1" size="lg">MyBrand</x-heading>
    </x-navbar-brand>
</x-navbar>
```

**With Icon**

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-icon name="heroicons:rocket-launch" class="w-8 h-8 text-blue-600" />
        <x-text weight="bold" class="ml-2">Rocket</x-text>
    </x-navbar-brand>
</x-navbar>
```

### NavbarToggle

Hamburger menu button for mobile. Used with NavbarCollapse to toggle mobile navigation visibility. Perfect for responsive mobile navigation and hamburger menus.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `target` | `string\|null` | `'navbar-collapse'` | Target collapse element ID |

NavbarToggle supports all common style props for flexible styling.

#### NavbarToggle Examples

**Mobile Navigation**

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-text weight="bold">MyApp</x-text>
    </x-navbar-brand>

    <x-navbar-toggle />

    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

**With Custom Styling**

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>

    <x-navbar-toggle
        color="primary"
        size="lg"
    />

    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### NavbarCollapse

Collapsible navigation menu container. Used with NavbarToggle for responsive mobile navigation. Perfect for responsive navigation menus and mobile-friendly layouts.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string\|null` | `'navbar-collapse'` | Element ID for collapse target |

NavbarCollapse supports all common style props for flexible styling.

#### NavbarCollapse Examples

**Responsive Navigation**

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-text weight="bold" size="lg">MyApp</x-text>
    </x-navbar-brand>

    <x-navbar-toggle />

    <x-navbar-collapse>
        <x-navbar-link href="/" active>Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

**With User Menu**

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>

    <x-navbar-toggle />

    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>

        <x-menu>
            <x-menu-trigger>
                <x-navbar-link href="#">Account</x-navbar-link>
            </x-menu-trigger>
            <x-menu-content>
                <x-menu-item href="/profile">Profile</x-menu-item>
                <x-menu-item href="/settings">Settings</x-menu-item>
                <x-menu-divider />
                <x-menu-item href="/logout">Logout</x-menu-item>
            </x-menu-content>
        </x-menu>
    </x-navbar-collapse>
</x-navbar>
```

### NavbarLink

Navigation link item. Provides styling for active and inactive states. Perfect for main navigation items and menu links.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'#'` | Link URL |
| `active` | `boolean` | `false` | Mark as active |

NavbarLink also supports all common style props for flexible styling.

#### NavbarLink Examples

**Basic Navigation**

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>

    <x-navbar-link href="/">Home</x-navbar-link>
    <x-navbar-link href="/about">About</x-navbar-link>
    <x-navbar-link href="/services">Services</x-navbar-link>
    <x-navbar-link href="/contact">Contact</x-navbar-link>
</x-navbar>
```

**With Active State**

```blade
<x-navbar>
    <x-navbar-link href="/" active>Home</x-navbar-link>
    <x-navbar-link href="/about">About</x-navbar-link>
    <x-navbar-link href="/contact">Contact</x-navbar-link>
</x-navbar>
```

**With Icons**

```blade
<x-navbar>
    <x-navbar-link href="/">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:home" class="w-4 h-4" />
            Home
        </div>
    </x-navbar-link>
    <x-navbar-link href="/settings">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:cog" class="w-4 h-4" />
            Settings
        </div>
    </x-navbar-link>
</x-navbar>
```

**With Dropdown**

```blade
<x-navbar>
    <x-navbar-link href="/">Home</x-navbar-link>

    <x-menu>
        <x-menu-trigger>
            <x-navbar-link href="#">Products</x-navbar-link>
        </x-menu-trigger>
        <x-menu-content>
            <x-menu-item href="/products/electronics">Electronics</x-menu-item>
            <x-menu-item href="/products/clothing">Clothing</x-menu-item>
        </x-menu-content>
    </x-menu>
</x-navbar>
```

## Variants

### Default

```blade
<x-navbar variant="default">
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <x-navbar-toggle target="navbar-default" />
    
    <x-navbar-collapse id="navbar-default">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/pricing">Pricing</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### Solid Background

```blade
<x-navbar variant="solid">
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <x-navbar-toggle target="navbar-solid" />
    
    <x-navbar-collapse id="navbar-solid">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/pricing">Pricing</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### Sticky Navbar

```blade
<x-navbar :sticky="true">
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <x-navbar-toggle target="navbar-sticky" />
    
    <x-navbar-collapse id="navbar-sticky">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### Without Border

```blade
<x-navbar :border="false">
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <x-navbar-toggle target="navbar-no-border" />
    
    <x-navbar-collapse id="navbar-no-border">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

## Common Patterns

### With Logo Only

```blade
<x-navbar>
    <x-navbar-brand href="/" logo="/logo.svg" />
    
    <x-navbar-toggle target="navbar-logo" />
    
    <x-navbar-collapse id="navbar-logo">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With Text Only Brand

```blade
<x-navbar>
    <x-navbar-brand href="/" name="My Application" />
    
    <x-navbar-toggle target="navbar-text" />
    
    <x-navbar-collapse id="navbar-text">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With Custom Brand Content

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <div class="flex items-center space-x-2">
            <img src="/logo.svg" class="h-8" alt="Logo" />
            <div>
                <div class="text-xl font-bold">My App</div>
                <div class="text-xs text-gray-500">Tagline here</div>
            </div>
        </div>
    </x-navbar-brand>
    
    <x-navbar-toggle target="navbar-custom" />
    
    <x-navbar-collapse id="navbar-custom">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With Dropdown Menu

```blade
<x-navbar>
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <x-navbar-toggle target="navbar-dropdown" />
    
    <x-navbar-collapse id="navbar-dropdown">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        
        <li>
            <x-menu trigger="click" placement="bottom-start">
                <x-slot:trigger>
                    <button class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        Services
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                </x-slot:trigger>
                
                <x-menu-item href="/web-design">Web Design</x-menu-item>
                <x-menu-item href="/development">Development</x-menu-item>
                <x-menu-item href="/marketing">Marketing</x-menu-item>
            </x-menu>
        </li>
        
        <x-navbar-link href="/pricing">Pricing</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With Search

```blade
<x-navbar>
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <div class="flex md:order-2">
        <x-search-input placeholder="Search..." class="mr-2" />
        <x-navbar-toggle target="navbar-search" />
    </div>
    
    <x-navbar-collapse id="navbar-search">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With CTA Button

```blade
<x-navbar>
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <x-button href="/signup">Get started</x-button>
        <x-navbar-toggle target="navbar-cta" />
    </div>
    
    <x-navbar-collapse id="navbar-cta">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/pricing">Pricing</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With User Menu

```blade
<x-navbar>
    <x-navbar-brand href="/" logo="/logo.svg" name="Flowblade" />
    
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <x-menu trigger="click" placement="bottom-end">
            <x-slot:trigger>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/user-avatar.jpg" alt="user photo">
                </button>
            </x-slot:trigger>
            
            <x-menu-header>
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">John Doe</span>
                    <span class="block text-sm text-gray-500 truncate dark:text-gray-400">john@example.com</span>
                </div>
            </x-menu-header>
            <x-menu-item href="/dashboard">Dashboard</x-menu-item>
            <x-menu-item href="/settings">Settings</x-menu-item>
            <x-menu-divider />
            <x-menu-item href="/logout" danger>Sign out</x-menu-item>
        </x-menu>
        
        <x-navbar-toggle target="navbar-user" />
    </div>
    
    <x-navbar-collapse id="navbar-user">
        <x-navbar-link href="/" :active="true">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

## Laravel Integration

### With Route Helpers

```blade
<x-navbar>
    <x-navbar-brand :href="route('home')" logo="/logo.svg" name="My App" />
    
    <x-navbar-toggle target="navbar-routes" />
    
    <x-navbar-collapse id="navbar-routes">
        <x-navbar-link :href="route('home')" :active="request()->routeIs('home')">
            Home
        </x-navbar-link>
        <x-navbar-link :href="route('about')" :active="request()->routeIs('about')">
            About
        </x-navbar-link>
        <x-navbar-link :href="route('services')" :active="request()->routeIs('services')">
            Services
        </x-navbar-link>
        <x-navbar-link :href="route('contact')" :active="request()->routeIs('contact')">
            Contact
        </x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With Authentication

```blade
<x-navbar>
    <x-navbar-brand :href="route('home')" logo="/logo.svg" name="My App" />
    
    <div class="flex items-center md:order-2">
        @auth
            <x-menu trigger="click" placement="bottom-end">
                <x-slot:trigger>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300">
                        <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->avatar }}" alt="user">
                    </button>
                </x-slot:trigger>
                
                <x-menu-header>
                    <div class="px-4 py-3">
                        <span class="block text-sm">{{ auth()->user()->name }}</span>
                        <span class="block text-sm text-gray-500 truncate">{{ auth()->user()->email }}</span>
                    </div>
                </x-menu-header>
                <x-menu-item :href="route('dashboard')">Dashboard</x-menu-item>
                <x-menu-item :href="route('profile')">Profile</x-menu-item>
                <x-menu-divider />
                <x-menu-item :href="route('logout')" danger>Sign out</x-menu-item>
            </x-menu>
        @else
            <x-button :href="route('login')" variant="outline" size="sm" class="mr-2">
                Log in
            </x-button>
            <x-button :href="route('register')" size="sm">
                Sign up
            </x-button>
        @endauth
        
        <x-navbar-toggle target="navbar-auth" />
    </div>
    
    <x-navbar-collapse id="navbar-auth">
        <x-navbar-link :href="route('home')" :active="request()->routeIs('home')">
            Home
        </x-navbar-link>
        <x-navbar-link :href="route('about')" :active="request()->routeIs('about')">
            About
        </x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

## JavaScript

The navbar uses Flowbite's Collapse component for the mobile menu toggle. Make sure to include Flowbite JS:

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or via NPM:

```bash
npm install flowbite
```

```javascript
import 'flowbite';
```

## Accessibility

### Navbar
The Navbar component:
- Uses semantic `<nav>` element
- Includes proper ARIA attributes (`aria-controls`, `aria-expanded`, `aria-current`)
- Provides screen reader text for toggle button
- Supports keyboard navigation (Tab, Enter, Escape)
- Maintains proper focus management
- Uses semantic HTML structure
- Announces navigation state to screen readers
- Supports mobile menu toggle with keyboard

### NavbarBrand
The NavbarBrand component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides clear brand identification
- Supports proper link semantics
- Announces brand link to screen readers

### NavbarToggle
The NavbarToggle component:
- Uses semantic HTML button element
- Supports keyboard navigation (Tab, Enter, Space)
- Works with screen readers
- Provides clear toggle state indication
- Announces menu state to assistive technologies
- Supports `aria-expanded` for toggle state
- Provides proper button semantics

### NavbarCollapse
The NavbarCollapse component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter, Escape)
- Works with screen readers
- Provides clear expand/collapse indicators
- Announces collapse state to screen readers
- Supports proper ARIA attributes for menu state

### NavbarLink
The NavbarLink component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides clear active state indication
- Announces active link with `aria-current="page"`
- Supports proper link semantics

## Notes

- Navbar is responsive by default (mobile menu appears below `md` breakpoint)
- Toggle button automatically hidden on desktop (`md:hidden`)
- Collapse menu automatically shown on desktop (`md:block`)
- Supports RTL layouts with `rtl:space-x-reverse`
- Dark mode is automatically supported
- All Tailwind utility classes can be applied via attributes
- Requires Flowbite JavaScript for collapse functionality

## Browser Support

- All modern browsers
- Requires JavaScript for mobile menu toggle
- Responsive design
- RTL support
- Dark mode support

