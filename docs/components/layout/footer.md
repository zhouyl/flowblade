# Footer

Footer section component for website pages with support for copyright notices, links, logos, and social media icons. Footer provides a flexible container for footer content with comprehensive style props support. Perfect for website footers and page bottom sections.

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
    <x-flex align="center" justify="between" class="sm:flex">
        <x-box as="a" href="/" display="flex" align="center" mb="4" class="sm:mb-0 space-x-3 rtl:space-x-reverse">
            <x-box as="img" src="/logo.svg" h="8" alt="Logo" />
            <x-text fontSize="2xl" fontWeight="semibold" class="self-center whitespace-nowrap dark:text-white">
                Flowblade
            </x-text>
        </x-box>
        <x-box as="ul" class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
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
    <x-separator my="6" />
    <x-text fontSize="sm" color="gray.500" textAlign="center" display="block">
        © 2024 <x-box as="a" href="/" class="hover:underline">Flowblade™</x-box>. All Rights Reserved.
    </x-text>
</x-footer>
```

### Footer with Social Media Icons

```blade
<x-footer>
    <x-flex align="center" justify="between" class="sm:flex">
        <x-text fontSize="sm" color="gray.500" textAlign="center">
            © 2024 <x-box as="a" href="/" class="hover:underline">Flowblade™</x-box>. All Rights Reserved.
        </x-text>
        <x-flex mt="4" justify="center" class="sm:mt-0 space-x-5 rtl:space-x-reverse">
            <x-box as="a" href="#" color="gray.500" class="hover:text-gray-900 dark:hover:text-white">
                <x-dynamic-component :component="'icon'" name="facebook" w="4" h="4" />
                <x-text as="span" class="sr-only">Facebook page</x-text>
            </x-box>
            <x-box as="a" href="#" color="gray.500" class="hover:text-gray-900 dark:hover:text-white">
                <x-dynamic-component :component="'icon'" name="twitter" w="4" h="4" />
                <x-text as="span" class="sr-only">Twitter page</x-text>
            </x-box>
            <x-box as="a" href="#" color="gray.500" class="hover:text-gray-900 dark:hover:text-white">
                <x-dynamic-component :component="'icon'" name="github" w="4" h="4" />
                <x-text as="span" class="sr-only">GitHub account</x-text>
            </x-box>
        </x-flex>
    </x-flex>
</x-footer>
```

### Sitemap Footer

```blade
<x-footer>
    <x-grid columns="2" gap="8" px="4" py="6" class="lg:py-8 md:grid-cols-4">
        <x-box>
            <x-heading as="h2" mb="6" fontSize="sm" fontWeight="semibold" color="gray.900" class="uppercase dark:text-white">Company</x-heading>
            <x-box as="ul" color="gray.500" fontWeight="medium" class="dark:text-gray-400">
                <x-box as="li" mb="4">
                    <x-box as="a" href="/about" class="hover:underline">About</x-box>
                </x-box>
                <x-box as="li" mb="4">
                    <x-box as="a" href="/careers" class="hover:underline">Careers</x-box>
                </x-box>
                <x-box as="li" mb="4">
                    <x-box as="a" href="/blog" class="hover:underline">Blog</x-box>
                </x-box>
            </x-box>
        </x-box>
        <x-box>
            <x-heading as="h2" mb="6" fontSize="sm" fontWeight="semibold" color="gray.900" class="uppercase dark:text-white">Help Center</x-heading>
            <x-box as="ul" color="gray.500" fontWeight="medium" class="dark:text-gray-400">
                <x-box as="li" mb="4">
                    <x-box as="a" href="/support" class="hover:underline">Support</x-box>
                </x-box>
                <x-box as="li" mb="4">
                    <x-box as="a" href="/faq" class="hover:underline">FAQ</x-box>
                </x-box>
                <x-box as="li" mb="4">
                    <x-box as="a" href="/contact" class="hover:underline">Contact Us</x-box>
                </x-box>
            </x-box>
        </x-box>
        <x-box>
            <x-heading as="h2" mb="6" fontSize="sm" fontWeight="semibold" color="gray.900" class="uppercase dark:text-white">Legal</x-heading>
            <x-box as="ul" color="gray.500" fontWeight="medium" class="dark:text-gray-400">
                <x-box as="li" mb="4">
                    <x-box as="a" href="/privacy" class="hover:underline">Privacy Policy</x-box>
                </x-box>
                <x-box as="li" mb="4">
                    <x-box as="a" href="/terms" class="hover:underline">Terms & Conditions</x-box>
                </x-box>
            </x-box>
        </x-box>
        <x-box>
            <x-heading as="h2" mb="6" fontSize="sm" fontWeight="semibold" color="gray.900" class="uppercase dark:text-white">Download</x-heading>
            <x-box as="ul" color="gray.500" fontWeight="medium" class="dark:text-gray-400">
                <x-box as="li" mb="4">
                    <x-box as="a" href="/ios" class="hover:underline">iOS</x-box>
                </x-box>
                <x-box as="li" mb="4">
                    <x-box as="a" href="/android" class="hover:underline">Android</x-box>
                </x-box>
            </x-box>
        </x-box>
    </x-grid>
    <x-box px="4" py="6" bg="gray.100" class="dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <x-text fontSize="sm" color="gray.500" textAlign="center" class="dark:text-gray-300">
            © 2024 <x-box as="a" href="/">Flowblade™</x-box>. All Rights Reserved.
        </x-text>
        <x-flex mt="4" justify="center" class="md:mt-0 space-x-5 rtl:space-x-reverse">
            <x-box as="a" href="#" color="gray.400" class="hover:text-gray-900 dark:hover:text-white">
                <x-dynamic-component :component="'icon'" name="facebook" w="4" h="4" />
                <x-text as="span" class="sr-only">Facebook</x-text>
            </x-box>
            <x-box as="a" href="#" color="gray.400" class="hover:text-gray-900 dark:hover:text-white">
                <x-dynamic-component :component="'icon'" name="twitter" w="4" h="4" />
                <x-text as="span" class="sr-only">Twitter</x-text>
            </x-box>
            <x-box as="a" href="#" color="gray.400" class="hover:text-gray-900 dark:hover:text-white">
                <x-dynamic-component :component="'icon'" name="github" w="4" h="4" />
                <x-text as="span" class="sr-only">GitHub</x-text>
            </x-box>
        </x-flex>
    </x-box>
</x-footer>
```

### Sticky Footer

```blade
<x-footer :sticky="true">
    <x-flex align="center" justify="between" class="md:flex">
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
                <x-box as="a" href="/contact" class="hover:underline">Contact</x-box>
            </x-box>
        </x-box>
    </x-flex>
</x-footer>
```

## Laravel Integration

### With Route Helpers

```blade
<x-footer>
    <x-flex align="center" justify="between" class="sm:flex">
        <x-text fontSize="sm" color="gray.500" textAlign="center">
            © {{ date('Y') }} <x-box as="a" :href="route('home')" class="hover:underline">{{ config('app.name') }}™</x-box>. All Rights Reserved.
        </x-text>
        <x-box as="ul" class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <x-box as="li">
                <x-box as="a" :href="route('about')" class="hover:underline me-4 md:me-6">About</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" :href="route('privacy')" class="hover:underline me-4 md:me-6">Privacy Policy</x-box>
            </x-box>
            <x-box as="li">
                <x-box as="a" :href="route('contact')" class="hover:underline">Contact</x-box>
            </x-box>
        </x-box>
    </x-flex>
</x-footer>
```

## Accessibility

The Footer component:
- Uses semantic `<footer>` element
- Includes proper screen reader text for icon-only links
- Supports keyboard navigation (Tab)
- Maintains proper focus management
- Uses semantic HTML structure
- Announces footer content to screen readers
- Supports proper link semantics

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

