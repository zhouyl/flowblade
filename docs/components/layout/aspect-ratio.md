# AspectRatio

Maintains a consistent aspect ratio for its content.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `ratio` | string\|float | `'16/9'` | Aspect ratio (16/9, 4/3, 1/1, square, video, or custom like 3/2) |

## Basic Usage

```blade
<x-aspect-ratio ratio="16/9">
    <img src="/image.jpg" class="w-full h-full object-cover">
</x-aspect-ratio>
```

## Predefined Ratios

- `16/9` or `video` - Standard video ratio
- `4/3` - Classic photo ratio
- `1/1` or `square` - Square ratio
- `21/9` - Ultrawide ratio

## Examples

### Video Embed

```blade
<x-aspect-ratio ratio="16/9">
    <iframe 
        src="https://www.youtube.com/embed/VIDEO_ID" 
        class="w-full h-full"
        allowfullscreen
    ></iframe>
</x-aspect-ratio>
```

### Image Gallery

```blade
<x-simple-grid columns="3" spacing="md">
    @foreach($images as $image)
        <x-aspect-ratio ratio="1/1">
            <img 
                src="{{ $image }}" 
                class="w-full h-full object-cover rounded-lg"
            >
        </x-aspect-ratio>
    @endforeach
</x-simple-grid>
```

### Custom Ratio

```blade
<x-aspect-ratio ratio="3/2">
    <img src="/photo.jpg" class="w-full h-full object-cover">
</x-aspect-ratio>
```

### Numeric Ratio

```blade
<x-aspect-ratio :ratio="1.5">
    <div class="w-full h-full bg-gradient-to-r from-blue-500 to-purple-600"></div>
</x-aspect-ratio>
```

## Common Patterns

### Product Images

```blade
<x-simple-grid columns="4" spacing="lg">
    @foreach($products as $product)
        <x-box shadow="lg" rounded="xl" class="overflow-hidden">
            <x-aspect-ratio ratio="1/1">
                <img 
                    src="{{ $product->image }}" 
                    class="w-full h-full object-cover hover:scale-110 transition duration-300"
                >
            </x-aspect-ratio>
            
            <x-vstack spacing="sm" class="p-4">
                <h3 class="font-bold">{{ $product->name }}</h3>
                <p class="text-gray-600">${{ $product->price }}</p>
            </x-vstack>
        </x-box>
    @endforeach
</x-simple-grid>
```

### Video Player

```blade
<x-box shadow="xl" rounded="xl" class="overflow-hidden">
    <x-aspect-ratio ratio="16/9">
        <video 
            controls 
            class="w-full h-full"
            poster="/thumbnail.jpg"
        >
            <source src="/video.mp4" type="video/mp4">
        </video>
    </x-aspect-ratio>
</x-box>
```

### Hero Banner

```blade
<x-aspect-ratio ratio="21/9">
    <div 
        class="w-full h-full bg-cover bg-center" 
        style="background-image: url('/hero.jpg')"
    >
        <div class="w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
            <x-vstack spacing="lg" align="center" class="text-white">
                <h1 class="text-5xl font-bold">Welcome</h1>
                <p class="text-xl">Your tagline here</p>
                <x-button color="primary" size="xl">Get Started</x-button>
            </x-vstack>
        </div>
    </div>
</x-aspect-ratio>
```

### Avatar

```blade
<x-aspect-ratio ratio="1/1" class="w-32">
    <img 
        src="/avatar.jpg" 
        class="w-full h-full object-cover rounded-full"
    >
</x-aspect-ratio>
```

### Map Embed

```blade
<x-aspect-ratio ratio="16/9">
    <iframe 
        src="https://www.google.com/maps/embed?..." 
        class="w-full h-full rounded-lg"
        loading="lazy"
    ></iframe>
</x-aspect-ratio>
```

### Card with Image

```blade
<x-box shadow="lg" rounded="xl" class="overflow-hidden">
    <x-aspect-ratio ratio="16/9">
        <img 
            src="/blog-post.jpg" 
            class="w-full h-full object-cover"
        >
    </x-aspect-ratio>
    
    <x-vstack spacing="md" class="p-6">
        <span class="text-xs text-gray-500">March 15, 2024</span>
        <h2 class="text-2xl font-bold">Blog Post Title</h2>
        <p class="text-gray-600">Post excerpt goes here...</p>
        <x-button variant="link" class="self-start">Read More →</x-button>
    </x-vstack>
</x-box>
```

### Placeholder

```blade
<x-aspect-ratio ratio="16/9">
    <x-center class="w-full h-full bg-gray-100">
        <x-vstack spacing="sm" align="center" class="text-gray-400">
            <x-icon name="heroicons:photo" size="48px" />
            <span>No image</span>
        </x-vstack>
    </x-center>
</x-aspect-ratio>
```

### Thumbnail Grid

```blade
<x-wrap spacing="sm">
    @foreach($videos as $video)
        <div class="w-48">
            <x-aspect-ratio ratio="16/9">
                <div class="relative w-full h-full">
                    <img 
                        src="{{ $video->thumbnail }}" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                    <x-absolute-center>
                        <x-button size="sm" rounded="full" class="bg-black bg-opacity-75">
                            <x-icon name="heroicons:play" class="text-white" />
                        </x-button>
                    </x-absolute-center>
                </div>
            </x-aspect-ratio>
            
            <h4 class="mt-2 text-sm font-medium">{{ $video->title }}</h4>
        </div>
    @endforeach
</x-wrap>
```

## Tips

- Use predefined ratios for common use cases
- Perfect for responsive images and videos
- Prevents layout shift when content loads
- Combine with `object-cover` or `object-contain` for images
- Works great with iframes for embeds

