# Banner

Sticky banner component for announcements, marketing messages, and notifications fixed to the top or bottom of the page. Banner provides a flexible way to display sticky banners. Perfect for system announcements, promotional messages, and important notifications.

## Basic Usage

```blade
<x-banner id="sticky-banner">
    <x-flex align="center" fontSize="sm" color="gray.500">
        <x-box p="1" me="3" bg="gray.200" rounded="full" w="6" h="6" display="flex" align="center" justify="center">
            <x-dynamic-component :component="'icon'" name="megaphone" w="3" h="3" />
            <x-text as="span" srOnly>Announcement</x-text>
        </x-box>
        <x-text as="span">New brand identity has been launched for the <x-link href="https://example.com" fontWeight="medium" textDecoration="underline">Company</x-link></x-text>
    </x-flex>
</x-banner>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | `'banner'` | Unique identifier for the banner (required for dismissible) |
| `position` | `string` | `'top'` | Position of the banner: `top` or `bottom` |
| `dismissible` | `bool` | `true` | Whether the banner can be dismissed |

### Style Props

Banner supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Variants

### Default Sticky Banner (Top)

```blade
<x-banner id="sticky-banner">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center shrink-0">
            <x-icon name="megaphone" class="w-3 h-3 text-gray-500 dark:text-gray-400" />
            <span class="sr-only">Light bulb</span>
        </span>
        <span>New brand identity has been launched for the <a href="https://flowbite.com" class="inline font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Flowblade Library</a></span>
    </p>
</x-banner>
```

### Bottom Banner Position

```blade
<x-banner id="bottom-banner" position="bottom">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center">
            <x-icon name="discount" class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" />
            <span class="sr-only">Discount</span>
        </span>
        <span>Get 5% commission per sale <a href="https://example.com" class="flex items-center ms-0 text-sm font-medium text-blue-600 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline">Become a partner <x-icon name="arrow-right" class="w-3 h-3 ms-2 rtl:rotate-180" /></a></span>
    </p>
</x-banner>
```

### Marketing CTA Banner

```blade
<x-banner id="marketing-banner" class="flex-col md:flex-row w-[calc(100%-2rem)] -translate-x-1/2 bg-white border border-gray-100 rounded-lg shadow-xs lg:max-w-7xl left-1/2 top-6 dark:bg-gray-700 dark:border-gray-600">
    <div class="flex flex-col items-start mb-3 me-4 md:items-center md:flex-row md:mb-0">
        <a href="https://example.com" class="flex items-center mb-2 border-gray-200 md:pe-4 md:me-4 md:border-e md:mb-0 dark:border-gray-600">
            <img src="/logo.svg" class="h-6 me-2" alt="Logo" />
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">Flowblade</span>
        </a>
        <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">Build websites even faster with components on top of Tailwind CSS</p>
    </div>
    <div class="flex items-center shrink-0">
        <a href="#" class="px-5 py-2 me-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
    </div>
</x-banner>
```

### Newsletter Sign-up Banner

```blade
<x-banner id="newsletter-banner">
    <div class="flex items-center shrink-0 w-full mx-auto sm:w-auto">
        <form class="flex flex-col items-center w-full md:flex-row">
            <label for="email" class="shrink-0 mb-2 me-auto text-sm font-medium text-gray-500 md:mb-0 md:me-4 dark:text-gray-400 md:m-0">Sign up for our newsletter</label>
            <input type="email" id="email" placeholder="Enter your email" class="bg-white border border-gray-300 text-gray-900 md:w-64 mb-2 md:mb-0 md:me-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
        </form>
    </div>
</x-banner>
```

### Informational Banner

```blade
<x-banner id="informational-banner" class="flex-col md:flex-row">
    <div class="mb-4 md:mb-0 md:me-4">
        <h2 class="mb-1 text-base font-semibold text-gray-900 dark:text-white">Integration is the key</h2>
        <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">You can integrate Flowblade with many tools to make your work even more efficient and lightning fast based on Tailwind CSS.</p>
    </div>
    <div class="flex items-center shrink-0">
        <a href="#" class="inline-flex items-center justify-center px-3 py-2 me-3 text-xs font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            <x-icon name="book" class="w-3 h-3 me-2" />
            Learn more
        </a>
        <a href="#" class="inline-flex items-center justify-center px-3 py-2 me-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Get started
            <x-icon name="arrow-right" class="w-3 h-3 ms-2 rtl:rotate-180" />
        </a>
    </div>
</x-banner>
```

### Non-dismissible Banner

```blade
<x-banner id="permanent-banner" :dismissible="false">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center shrink-0">
            <x-icon name="info" class="w-3 h-3 text-gray-500 dark:text-gray-400" />
            <span class="sr-only">Info</span>
        </span>
        <span>This is a permanent banner that cannot be dismissed</span>
    </p>
</x-banner>
```

## Laravel Integration

### With Dynamic Content

```blade
<x-banner id="dynamic-banner">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center shrink-0">
            <x-icon name="bell" class="w-3 h-3 text-gray-500 dark:text-gray-400" />
            <span class="sr-only">Notification</span>
        </span>
        <span>{{ $announcement->message }} <a :href="route('announcements.show', $announcement)" class="inline font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Learn more</a></span>
    </p>
</x-banner>
```

### With Conditional Display

```blade
@if(session('show_banner'))
<x-banner id="session-banner">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span class="inline-flex p-1 me-3 bg-green-200 rounded-full dark:bg-green-600 w-6 h-6 items-center justify-center shrink-0">
            <x-icon name="check" class="w-3 h-3 text-green-500 dark:text-green-400" />
            <span class="sr-only">Success</span>
        </span>
        <span>{{ session('banner_message') }}</span>
    </p>
</x-banner>
@endif
```

### With Alpine.js

```blade
<div x-data="{ showBanner: true }">
    <x-banner id="alpine-banner" x-show="showBanner">
        <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
            <span>This banner uses Alpine.js for state management</span>
        </p>
    </x-banner>
</div>
```

## JavaScript Integration

The Banner component uses Flowbite's Dismiss plugin for the close functionality. Make sure you have Flowbite JS included in your project:

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or if using npm:

```bash
npm install flowbite
```

```javascript
import 'flowbite';
```

## Accessibility

The Banner component:
- Uses semantic HTML structure
- Includes proper ARIA attributes (`tabindex="-1"`, `role="alert"` for important messages)
- Provides screen reader text for icon-only elements using `sr-only` class
- Supports keyboard navigation (Tab, Enter for close button)
- Includes focus management for the close button
- Uses proper color contrast ratios (WCAG AA compliant)
- Dismissible banners should have clear close button with accessible label
- Important announcements should use `role="alert"` for immediate screen reader notification

## Notes

- Banner is fixed to the viewport by default
- Use unique `id` prop for each banner on the page
- The `data-dismiss-target` attribute enables Flowbite's dismiss functionality
- Content is fully customizable through slots
- Supports RTL layouts with `rtl:` classes
- Dark mode is automatically supported
- All Tailwind utility classes can be applied via attributes

## Browser Support

- All modern browsers
- Responsive design
- RTL support
- Dark mode support
- Requires Flowbite JS for dismiss functionality

