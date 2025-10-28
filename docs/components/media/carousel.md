# Carousel

Image and content carousel component with automatic sliding, navigation controls, and indicators. Requires Flowbite JS.

## Components

- `<x-carousel>` - Container component
- `<x-carousel-item>` - Individual carousel slide

## Basic Usage

```blade
<x-carousel>
    <x-carousel-item :active="true">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </x-carousel-item>
</x-carousel>
```

## Props

### Carousel Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | `auto` | Unique identifier for the carousel |
| `mode` | `string` | `'slide'` | Carousel mode: `static` or `slide` |
| `showControls` | `bool` | `true` | Show prev/next navigation buttons |
| `showIndicators` | `bool` | `false` | Show slide indicators (requires manual setup) |
| `height` | `string` | `'h-56 md:h-96'` | Height classes for the carousel |

### CarouselItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `active` | `bool` | `false` | Whether this slide is initially active |
| `duration` | `string` | `'700'` | Animation duration in milliseconds |
| `easing` | `string` | `'ease-in-out'` | Animation easing function |

## Examples

### Default Carousel (Auto-slide)

```blade
<x-carousel mode="slide">
    <x-carousel-item :active="true">
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
    <x-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </x-carousel-item>
</x-carousel>
```

### Static Carousel (Manual Navigation Only)

```blade
<x-carousel mode="static">
    <x-carousel-item :active="true">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </x-carousel-item>
</x-carousel>
```

### Without Controls

```blade
<x-carousel :show-controls="false">
    <x-carousel-item :active="true">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
</x-carousel>
```

### Custom Height

```blade
<x-carousel height="h-64 md:h-80 lg:h-96">
    <x-carousel-item :active="true">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
</x-carousel>
```

### Fast Animation

```blade
<x-carousel>
    <x-carousel-item :active="true" duration="200" easing="ease-linear">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item duration="200" easing="ease-linear">
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
    <x-carousel-item duration="200" easing="ease-linear">
        <img src="/images/slide3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </x-carousel-item>
</x-carousel>
```

### With Indicators

```blade
<x-carousel :show-indicators="true">
    <x-slot:indicators>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </x-slot:indicators>
    
    <x-carousel-item :active="true">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </x-carousel-item>
</x-carousel>
```

### Custom Controls

```blade
<x-carousel>
    <x-slot:prevControl>
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 group-hover:bg-blue-600">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </span>
        </button>
    </x-slot:prevControl>
    
    <x-slot:nextControl>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 group-hover:bg-blue-600">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </span>
        </button>
    </x-slot:nextControl>
    
    <x-carousel-item :active="true">
        <img src="/images/slide1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </x-carousel-item>
    <x-carousel-item>
        <img src="/images/slide2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </x-carousel-item>
</x-carousel>
```

## Laravel Integration

### Dynamic Carousel from Database

```blade
<x-carousel>
    @foreach($slides as $index => $slide)
        <x-carousel-item :active="$index === 0">
            <img 
                src="{{ Storage::url($slide->image) }}" 
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" 
                alt="{{ $slide->title }}"
            >
        </x-carousel-item>
    @endforeach
</x-carousel>
```

### Product Image Carousel

```blade
<div class="space-y-4">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $product->name }}</h2>
    
    <x-carousel height="h-96">
        @foreach($product->images as $index => $image)
            <x-carousel-item :active="$index === 0">
                <img 
                    src="{{ $image->url }}" 
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" 
                    alt="{{ $product->name }}"
                >
            </x-carousel-item>
        @endforeach
    </x-carousel>
</div>
```

### Testimonial Carousel

```blade
<x-carousel mode="static" height="h-auto">
    @foreach($testimonials as $index => $testimonial)
        <x-carousel-item :active="$index === 0">
            <div class="flex flex-col items-center justify-center h-full p-8 text-center">
                <p class="text-xl italic text-gray-700 dark:text-gray-300 mb-4">
                    "{{ $testimonial->quote }}"
                </p>
                <p class="font-semibold text-gray-900 dark:text-white">
                    {{ $testimonial->author }}
                </p>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ $testimonial->position }}
                </p>
            </div>
        </x-carousel-item>
    @endforeach
</x-carousel>
```

### Hero Banner Carousel

```blade
<x-carousel height="h-screen">
    @foreach($banners as $index => $banner)
        <x-carousel-item :active="$index === 0">
            <div class="relative h-full">
                <img 
                    src="{{ $banner->background_image }}" 
                    class="absolute block w-full h-full object-cover" 
                    alt="{{ $banner->title }}"
                >
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h1 class="text-5xl font-bold mb-4">{{ $banner->title }}</h1>
                        <p class="text-xl mb-8">{{ $banner->subtitle }}</p>
                        <a href="{{ $banner->cta_url }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg">
                            {{ $banner->cta_text }}
                        </a>
                    </div>
                </div>
            </div>
        </x-carousel-item>
    @endforeach
</x-carousel>
```

### Content Carousel with Cards

```blade
<x-carousel height="h-auto" mode="static">
    @foreach($posts->chunk(3) as $index => $chunk)
        <x-carousel-item :active="$index === 0">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-8">
                @foreach($chunk as $post)
                    <x-card>
                        <img src="{{ $post->featured_image }}" class="rounded-t-lg" alt="{{ $post->title }}">
                        <x-slot:body>
                            <h3 class="text-xl font-bold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ Str::limit($post->excerpt, 100) }}</p>
                        </x-slot:body>
                    </x-card>
                @endforeach
            </div>
        </x-carousel-item>
    @endforeach
</x-carousel>
```

## JavaScript Integration

### Basic Initialization

```html
<!-- Include Flowbite JS -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

The carousel will automatically initialize with the default settings.

## Responsive Behavior

The carousel component is responsive by default:
- **Mobile**: Uses the first height value (e.g., `h-56`)
- **Desktop**: Uses the responsive height value (e.g., `md:h-96`)

## Accessibility

The Carousel component:
- Uses semantic HTML button elements for controls
- Includes proper ARIA labels for navigation
- Provides screen reader text for controls
- Supports keyboard navigation (when Flowbite JS is loaded)
- Uses proper color contrast ratios
- Shows visual focus indicators

## Important Notes

1. **Flowbite JS Required**: This component requires Flowbite JavaScript to function.
2. **Image Positioning**: Carousel items should use absolute positioning with centering transforms.
3. **Active Item**: Always mark one item as active using `:active="true"` to set the initial slide.
4. **Mode Differences**: `mode="slide"` auto-cycles, `mode="static"` requires manual navigation.

## Related Components

- [Gallery](./gallery.md) - Image gallery component
- [Card](../data-display/card.md) - Card component for content
- [Image](../typography/image.md) - Image component

