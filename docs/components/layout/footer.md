# Footer

Footer section component for website pages with support for copyright notices, links, logos, and social media icons. Footer provides a flexible container for footer content with comprehensive style props support.

## Basic Usage

```blade
<x-footer>
    <x-flex align="center" justify="between" class="sm:flex">
        <x-text fontSize="sm" color="gray.500" textAlign="center">
            © 2024 <x-box as="a" href="/" class="hover:underline">My Company™</x-box>. All Rights Reserved.
        </x-text>
        <x-box as="ul" class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <x-box as="li">
                <x-box as="a" href="/about" class="hover:underline me-4 md:me-6">About</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" href="/privacy" class="hover:underline me-4 md:me-6">Privacy Policy</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" href="/contact" class="hover:underline">Contact</x-box>
            </x-box>
        </x-box>
    </x-flex>
</x-footer>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `sticky` | `bool` | `false` | Whether footer is sticky (fixed to bottom) |

### Style Props

Footer supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Variants

### Default Footer

```blade
<x-footer>
    <x-flex align="center" justify="between" class="sm:flex">
        <x-text fontSize="sm" color="gray.500" textAlign="center">
            © 2024 <x-box as="a" href="/" class="hover:underline">Flowblade™</x-box>. All Rights Reserved.
        </x-text>
        <x-box as="ul" class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <x-box as="li">
                <x-box as="a" href="/about" class="hover:underline me-4 md:me-6">About</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" href="/privacy" class="hover:underline me-4 md:me-6">Privacy Policy</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" href="/licensing" class="hover:underline me-4 md:me-6">Licensing</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" href="/contact" class="hover:underline">Contact</x-box>
            </x-box>
        </x-box>
    </x-flex>
</x-footer>
```

### Footer with Logo

```blade
<x-footer>
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
            <img src="/logo.svg" class="h-8" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                Flowblade
            </span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
            <li>
                <a href="/about" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="/privacy" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="/licensing" class="hover:underline me-4 md:me-6">Licensing</a>
            </li>
            <li>
                <a href="/contact" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
    <x-separator class="my-6" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
        © 2024 <a href="/" class="hover:underline">Flowblade™</a>. All Rights Reserved.
    </span>
</x-footer>
```

### Footer with Social Media Icons

```blade
<x-footer>
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © 2024 <a href="/" class="hover:underline">Flowblade™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center sm:mt-0 space-x-5 rtl:space-x-reverse">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-icon name="facebook" class="w-4 h-4" />
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-icon name="twitter" class="w-4 h-4" />
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-icon name="github" class="w-4 h-4" />
                <span class="sr-only">GitHub account</span>
            </a>
        </div>
    </div>
</x-footer>
```

### Sitemap Footer

```blade
<x-footer>
    <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="/about" class="hover:underline">About</a>
                </li>
                <li class="mb-4">
                    <a href="/careers" class="hover:underline">Careers</a>
                </li>
                <li class="mb-4">
                    <a href="/blog" class="hover:underline">Blog</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help Center</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="/support" class="hover:underline">Support</a>
                </li>
                <li class="mb-4">
                    <a href="/faq" class="hover:underline">FAQ</a>
                </li>
                <li class="mb-4">
                    <a href="/contact" class="hover:underline">Contact Us</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="/privacy" class="hover:underline">Privacy Policy</a>
                </li>
                <li class="mb-4">
                    <a href="/terms" class="hover:underline">Terms & Conditions</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="/ios" class="hover:underline">iOS</a>
                </li>
                <li class="mb-4">
                    <a href="/android" class="hover:underline">Android</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">
            © 2024 <a href="/">Flowblade™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <x-icon name="facebook" class="w-4 h-4" />
                <span class="sr-only">Facebook</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <x-icon name="twitter" class="w-4 h-4" />
                <span class="sr-only">Twitter</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <x-icon name="github" class="w-4 h-4" />
                <span class="sr-only">GitHub</span>
            </a>
        </div>
    </div>
</x-footer>
```

### Sticky Footer

```blade
<x-footer :sticky="true">
    <div class="md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © 2024 <a href="/" class="hover:underline">Flowblade™</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="/about" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="/privacy" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="/contact" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</x-footer>
```

## Laravel Integration

### With Route Helpers

```blade
<x-footer>
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © {{ date('Y') }} <a :href="route('home')" class="hover:underline">{{ config('app.name') }}™</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a :href="route('about')" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a :href="route('privacy')" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a :href="route('contact')" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</x-footer>
```

## Accessibility

The Footer component:
- Uses semantic `<footer>` element
- Includes proper screen reader text for icon-only links
- Supports keyboard navigation
- Maintains proper focus management
- Uses semantic HTML structure

## Notes

- Footer is responsive by default
- Sticky footer uses `fixed bottom-0` positioning
- Supports RTL layouts with `rtl:` classes
- Dark mode is automatically supported
- All Tailwind utility classes can be applied via attributes
- Content is fully customizable through slots

## Browser Support

- All modern browsers
- Responsive design
- RTL support
- Dark mode support

