# Jumbotron Component

Large showcase section component for hero areas and landing pages. Jumbotron provides a flexible container for creating impressive hero sections with support for background images, gradients, and comprehensive style props. Perfect for hero sections and landing pages.

## Basic Usage

```blade
<x-jumbotron>
    <x-heading as="h1" fontSize="4xl" fontWeight="bold" mb="4">Welcome to Our Website</x-heading>
    <x-text fontSize="xl" mb="6">Discover amazing features and services</x-text>
    <x-button color="primary" size="lg">Get Started</x-button>
</x-jumbotron>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'lg'` | Size: `sm`, `md`, `lg`, `xl` |
| `align` | string | `'center'` | Text alignment: `left`, `center`, `right` |
| `fullWidth` | boolean | `false` | Full width without container |
| `bgImage` | string | `''` | Background image URL |
| `bgGradient` | string | `''` | Background gradient classes |
| `overlay` | string | `'none'` | Overlay opacity: `none`, `light`, `medium`, `dark` |

### Style Props

Jumbotron supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Jumbotron

```blade
<x-jumbotron>
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" color="gray.900" mb="4" class="dark:text-white">
        Welcome to Flowblade
    </x-heading>
    <x-text fontSize="xl" color="gray.600" mb="8" class="dark:text-gray-400">
        Build beautiful Laravel applications with Blade components
    </x-text>
    <x-flex gap="4" justify="center">
        <x-button color="primary" size="lg">Get Started</x-button>
        <x-button variant="outline" size="lg">Learn More</x-button>
    </x-flex>
</x-jumbotron>
```

### Small Size

```blade
<x-jumbotron size="sm">
    <x-heading as="h2" fontSize="3xl" fontWeight="bold" mb="2">Small Hero Section</x-heading>
    <x-text fontSize="lg" mb="4">Perfect for secondary pages</x-text>
    <x-button color="primary">Learn More</x-button>
</x-jumbotron>
```

### Extra Large Size

```blade
<x-jumbotron size="xl">
    <x-heading as="h1" fontSize="6xl" fontWeight="bold" mb="6">Extra Large Hero</x-heading>
    <x-text fontSize="2xl" mb="8">Maximum impact for your landing page</x-text>
    <x-button color="primary" size="xl">Get Started Now</x-button>
</x-jumbotron>
```

### Left Aligned

```blade
<x-jumbotron align="left">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" mb="4">Left Aligned Content</x-heading>
    <x-text fontSize="xl" mb="6">Perfect for content-heavy sections</x-text>
    <x-button color="primary" size="lg">Read More</x-button>
</x-jumbotron>
```

### Right Aligned

```blade
<x-jumbotron align="right">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" mb="4">Right Aligned Content</x-heading>
    <x-text fontSize="xl" mb="6">Unique layout for your hero section</x-text>
    <x-button color="primary" size="lg">Explore</x-button>
</x-jumbotron>
```

### Full Width

```blade
<x-jumbotron :fullWidth="true">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" mb="4">Full Width Hero</x-heading>
    <x-text fontSize="xl" mb="6">Spans the entire viewport width</x-text>
    <x-button color="primary" size="lg">Get Started</x-button>
</x-jumbotron>
```

### With Background Image

```blade
<x-jumbotron bgImage="/images/hero-bg.jpg" overlay="medium">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" color="white" mb="4">
        Beautiful Background
    </x-heading>
    <x-text fontSize="xl" color="white" mb="6">
        With image overlay for better readability
    </x-text>
    <x-button color="primary" size="lg">Explore Now</x-button>
</x-jumbotron>
```

### With Background Image (Dark Overlay)

```blade
<x-jumbotron bgImage="/images/hero.jpg" overlay="dark">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" color="white" mb="4">
        Dark Overlay
    </x-heading>
    <x-text fontSize="xl" color="white" mb="6" class="opacity-90">
        Maximum contrast for text readability
    </x-text>
    <x-button color="white" size="lg">Get Started</x-button>
</x-jumbotron>
```

### With Gradient Background

```blade
<x-jumbotron bgGradient="bg-gradient-to-r from-blue-500 to-purple-600">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" color="white" mb="4">
        Gradient Background
    </x-heading>
    <x-text fontSize="xl" color="white" mb="6" class="opacity-90">
        Modern and eye-catching design
    </x-text>
    <x-button color="white" size="lg">Learn More</x-button>
</x-jumbotron>
```

### With Multiple Gradients

```blade
<x-jumbotron bgGradient="bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500">
    <x-heading as="h1" fontSize="5xl" fontWeight="bold" color="white" mb="4">
        Multi-Color Gradient
    </x-heading>
    <x-text fontSize="xl" color="white" mb="6" class="opacity-90">
        Vibrant and dynamic background
    </x-text>
    <x-button color="white" size="lg">Get Started</x-button>
</x-jumbotron>
```

### Landing Page Hero

```blade
<x-jumbotron size="xl" bgGradient="bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-6xl font-bold text-white mb-6">
            Build Amazing Web Applications
        </h1>
        <p class="text-2xl text-white/90 mb-8">
            The most comprehensive Laravel Blade component library
        </p>
        <div class="flex gap-4 justify-center">
            <x-button color="white" size="xl">
                Get Started Free
            </x-button>
            <x-button variant="outline" size="xl" class="text-white border-white hover:bg-white/10">
                View Documentation
            </x-button>
        </div>
        <div class="mt-8 text-white/80">
            <p class="text-sm">No credit card required • 14-day free trial</p>
        </div>
    </div>
</x-jumbotron>
```

### Product Showcase

```blade
<x-jumbotron size="lg" align="left" bgImage="/images/product-bg.jpg" overlay="medium">
    <div class="max-w-2xl">
        <div class="inline-block px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-semibold mb-4">
            New Release
        </div>
        <h1 class="text-5xl font-bold text-white mb-4">
            Introducing Our Latest Product
        </h1>
        <p class="text-xl text-white/90 mb-6">
            Revolutionary features that will transform your workflow
        </p>
        <ul class="text-white/80 mb-8 space-y-2">
            <li class="flex items-center">
                <x-icon name="heroicons:check-circle" class="mr-2" />
                Feature one with amazing capabilities
            </li>
            <li class="flex items-center">
                <x-icon name="heroicons:check-circle" class="mr-2" />
                Feature two that saves you time
            </li>
            <li class="flex items-center">
                <x-icon name="heroicons:check-circle" class="mr-2" />
                Feature three for better results
            </li>
        </ul>
        <x-button color="primary" size="lg">
            Learn More
        </x-button>
    </div>
</x-jumbotron>
```

### Newsletter Signup

```blade
<x-jumbotron size="md" bgGradient="bg-gradient-to-r from-green-400 to-blue-500">
    <h2 class="text-4xl font-bold text-white mb-4">
        Subscribe to Our Newsletter
    </h2>
    <p class="text-xl text-white/90 mb-6">
        Get the latest updates and exclusive offers
    </p>
    <form class="max-w-md mx-auto">
        <div class="flex gap-2">
            <x-input 
                type="email" 
                placeholder="Enter your email" 
                class="flex-1"
            />
            <x-button color="white" type="submit">
                Subscribe
            </x-button>
        </div>
    </form>
</x-jumbotron>
```

### Call to Action

```blade
<x-jumbotron size="md" bgGradient="bg-gradient-to-r from-purple-600 to-pink-600">
    <h2 class="text-4xl font-bold text-white mb-4">
        Ready to Get Started?
    </h2>
    <p class="text-xl text-white/90 mb-8">
        Join thousands of satisfied customers today
    </p>
    <div class="flex gap-4 justify-center">
        <x-button color="white" size="lg">
            Start Free Trial
        </x-button>
        <x-button variant="outline" size="lg" class="text-white border-white hover:bg-white/10">
            Contact Sales
        </x-button>
    </div>
    <div class="mt-6 flex items-center justify-center gap-8 text-white/80">
        <div class="flex items-center">
            <x-icon name="heroicons:check-circle" class="mr-2" />
            <span>No credit card required</span>
        </div>
        <div class="flex items-center">
            <x-icon name="heroicons:check-circle" class="mr-2" />
            <span>Cancel anytime</span>
        </div>
    </div>
</x-jumbotron>
```

## Styling Tips

### Custom Background

```blade
<x-jumbotron class="bg-gray-100 dark:bg-gray-800">
    <h1 class="text-4xl font-bold mb-4">Custom Background</h1>
    <p class="text-xl mb-6">Use Tailwind classes for custom styling</p>
</x-jumbotron>
```

### With Border

```blade
<x-jumbotron class="border-t-4 border-blue-500">
    <h1 class="text-4xl font-bold mb-4">With Top Border</h1>
    <p class="text-xl mb-6">Add visual emphasis with borders</p>
</x-jumbotron>
```

### Rounded Corners

```blade
<x-jumbotron class="rounded-3xl mx-4" bgGradient="bg-gradient-to-r from-blue-500 to-purple-600">
    <h1 class="text-4xl font-bold text-white mb-4">Rounded Jumbotron</h1>
    <p class="text-xl text-white/90 mb-6">Modern card-like appearance</p>
</x-jumbotron>
```

## Accessibility

The Jumbotron component uses semantic HTML:

```blade
<x-jumbotron>
    <h1 class="text-5xl font-bold mb-4">
        Accessible Hero Section
    </h1>
    <p class="text-xl mb-6">
        Properly structured content for screen readers
    </p>
    <x-button color="primary" size="lg" aria-label="Get started with our service">
        Get Started
    </x-button>
</x-jumbotron>
```

- Uses semantic HTML structure
- Maintains proper heading hierarchy
- Supports keyboard navigation
- Announces content to screen readers
- Supports proper ARIA attributes

## Browser Support

The Jumbotron component uses modern CSS features:
- CSS Grid and Flexbox
- Background images and gradients
- Overlay with opacity
- Responsive design

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Container](./container.md) - Responsive container
- [Box](./box.md) - Flexible box component
- [Button](../buttons/button.md) - Call-to-action buttons

