# DeviceMockup Component

Device frame mockup component for showcasing app interfaces in realistic device frames.

## Basic Usage

```blade
<x-device-mockup device="mobile">
    <img src="/path/to/screenshot.png" alt="App Screenshot" class="w-full h-full object-cover">
</x-device-mockup>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `device` | string | `'mobile'` | Device type: `mobile`, `tablet`, `laptop`, `desktop` |
| `orientation` | string | `'portrait'` | Orientation: `portrait`, `landscape` (mobile/tablet only) |
| `dark` | boolean | `false` | Dark mode device frame |
| `rounded` | boolean | `true` | Apply rounded corners |
| `shadow` | boolean | `true` | Apply shadow effect |

## Examples

### Mobile Device (Portrait)

```blade
<x-device-mockup device="mobile" orientation="portrait">
    <img src="/mobile-app.png" alt="Mobile App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Mobile Device (Landscape)

```blade
<x-device-mockup device="mobile" orientation="landscape">
    <img src="/mobile-app-landscape.png" alt="Mobile App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Tablet Device

```blade
<x-device-mockup device="tablet">
    <img src="/tablet-app.png" alt="Tablet App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Tablet Device (Landscape)

```blade
<x-device-mockup device="tablet" orientation="landscape">
    <img src="/tablet-app-landscape.png" alt="Tablet App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Laptop Device

```blade
<x-device-mockup device="laptop">
    <img src="/laptop-app.png" alt="Laptop App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Desktop Device

```blade
<x-device-mockup device="desktop">
    <img src="/desktop-app.png" alt="Desktop App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Dark Mode Frame

```blade
<x-device-mockup device="mobile" :dark="true">
    <img src="/dark-app.png" alt="Dark App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Without Rounded Corners

```blade
<x-device-mockup device="mobile" :rounded="false">
    <img src="/app.png" alt="App" class="w-full h-full object-cover">
</x-device-mockup>
```

### Without Shadow

```blade
<x-device-mockup device="mobile" :shadow="false">
    <img src="/app.png" alt="App" class="w-full h-full object-cover">
</x-device-mockup>
```

### With Custom Content

```blade
<x-device-mockup device="mobile">
    <div class="flex items-center justify-center h-full bg-gradient-to-br from-blue-500 to-purple-600">
        <div class="text-center text-white">
            <h2 class="text-2xl font-bold mb-2">My App</h2>
            <p class="text-sm">Beautiful UI Design</p>
        </div>
    </div>
</x-device-mockup>
```

### Multiple Devices Showcase

```blade
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    {{-- Mobile --}}
    <x-device-mockup device="mobile">
        <img src="/mobile.png" alt="Mobile" class="w-full h-full object-cover">
    </x-device-mockup>
    
    {{-- Tablet --}}
    <x-device-mockup device="tablet">
        <img src="/tablet.png" alt="Tablet" class="w-full h-full object-cover">
    </x-device-mockup>
    
    {{-- Laptop --}}
    <x-device-mockup device="laptop">
        <img src="/laptop.png" alt="Laptop" class="w-full h-full object-cover">
    </x-device-mockup>
</div>
```

### Landing Page Hero Section

```blade
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Beautiful App Design</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">Experience our app on any device</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <x-device-mockup device="laptop">
                <img src="/app-screenshot.png" alt="App Screenshot" class="w-full h-full object-cover">
            </x-device-mockup>
        </div>
    </div>
</section>
```

### App Store Preview

```blade
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <div>
        <h2 class="text-3xl font-bold mb-4">Download Our App</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-6">
            Available on iOS and Android. Get started today!
        </p>
        <div class="flex gap-4">
            <a href="#" class="inline-block">
                <img src="/app-store.png" alt="App Store" class="h-12">
            </a>
            <a href="#" class="inline-block">
                <img src="/play-store.png" alt="Play Store" class="h-12">
            </a>
        </div>
    </div>
    
    <x-device-mockup device="mobile">
        <img src="/app-preview.png" alt="App Preview" class="w-full h-full object-cover">
    </x-device-mockup>
</div>
```

### Responsive Showcase

```blade
<div class="space-y-8">
    {{-- Mobile View --}}
    <div class="block md:hidden">
        <x-device-mockup device="mobile">
            <img src="/mobile-view.png" alt="Mobile View" class="w-full h-full object-cover">
        </x-device-mockup>
    </div>
    
    {{-- Tablet View --}}
    <div class="hidden md:block lg:hidden">
        <x-device-mockup device="tablet">
            <img src="/tablet-view.png" alt="Tablet View" class="w-full h-full object-cover">
        </x-device-mockup>
    </div>
    
    {{-- Desktop View --}}
    <div class="hidden lg:block">
        <x-device-mockup device="desktop">
            <img src="/desktop-view.png" alt="Desktop View" class="w-full h-full object-cover">
        </x-device-mockup>
    </div>
</div>
```

## Device Dimensions

### Mobile
- **Portrait**: 375px × 667px (max-width)
- **Landscape**: 568px × 320px (max-width)

### Tablet
- **Portrait**: 768px × 1024px (max-width)
- **Landscape**: 1024px × 768px (max-width)

### Laptop
- **Default**: 1280px × 720px (max-width)

### Desktop
- **Default**: 1920px × 1080px (max-width)

## Styling Tips

### Image Optimization

```blade
<x-device-mockup device="mobile">
    <img 
        src="/app.png" 
        alt="App" 
        class="w-full h-full object-cover"
        loading="lazy"
    >
</x-device-mockup>
```

### Video Content

```blade
<x-device-mockup device="laptop">
    <video 
        class="w-full h-full object-cover" 
        autoplay 
        loop 
        muted
    >
        <source src="/demo.mp4" type="video/mp4">
    </video>
</x-device-mockup>
```

### Interactive Content

```blade
<x-device-mockup device="tablet">
    <iframe 
        src="https://example.com" 
        class="w-full h-full border-0"
        title="Live Demo"
    ></iframe>
</x-device-mockup>
```

## Accessibility

The DeviceMockup component is purely presentational and uses semantic HTML:

```blade
<x-device-mockup device="mobile">
    <img 
        src="/app.png" 
        alt="Mobile app showing user dashboard with statistics and charts"
        class="w-full h-full object-cover"
    >
</x-device-mockup>
```

Always provide descriptive alt text for images inside device mockups.

## Browser Support

The DeviceMockup component uses modern CSS features:
- CSS Grid and Flexbox
- CSS Transforms
- Border Radius
- Box Shadow

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Gallery](./gallery.md) - Image grid display
- [Carousel](./carousel.md) - Image/content slider
- [Video](./video.md) - HTML5 video player

