# AspectRatio

Maintains a consistent aspect ratio for its content. AspectRatio is useful for preventing layout shift and maintaining consistent proportions for images, videos, and other media.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `ratio` | string\|float | `'16/9'` | Aspect ratio (16/9, 4/3, 1/1, square, video, or custom like 3/2) |

### Style Props

AspectRatio supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-aspect-ratio ratio="16/9">
    <x-box as="img" src="/image.jpg" w="full" h="full" class="object-cover" />
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
    <x-box
        as="iframe"
        src="https://www.youtube.com/embed/VIDEO_ID"
        w="full"
        h="full"
        allowfullscreen
    ></x-box>
</x-aspect-ratio>
```

### Image Gallery

```blade
<x-simple-grid columns="3" spacing="md">
    @foreach($images as $image)
        <x-aspect-ratio ratio="1/1">
            <x-box
                as="img"
                src="{{ $image }}"
                w="full"
                h="full"
                class="object-cover rounded-lg"
            />
        </x-aspect-ratio>
    @endforeach
</x-simple-grid>
```

### Custom Ratio

```blade
<x-aspect-ratio ratio="3/2">
    <x-box as="img" src="/photo.jpg" w="full" h="full" class="object-cover" />
</x-aspect-ratio>
```

### Numeric Ratio

```blade
<x-aspect-ratio :ratio="1.5">
    <x-box w="full" h="full" class="bg-gradient-to-r from-blue-500 to-purple-600"></x-box>
</x-aspect-ratio>
```

## Common Patterns

### Product Images

```blade
<x-simple-grid columns="4" spacing="lg">
    @foreach($products as $product)
        <x-box shadow="lg" rounded="xl" class="overflow-hidden">
            <x-aspect-ratio ratio="1/1">
                <x-box
                    as="img"
                    src="{{ $product->image }}"
                    w="full"
                    h="full"
                    class="object-cover hover:scale-110 transition duration-300"
                />
            </x-aspect-ratio>

            <x-vstack spacing="sm" p="4">
                <x-heading as="h3" fontWeight="bold">{{ $product->name }}</x-heading>
                <x-text color="gray.600">${{ $product->price }}</x-text>
            </x-vstack>
        </x-box>
    @endforeach
</x-simple-grid>
```

### Video Player

```blade
<x-box shadow="xl" rounded="xl" class="overflow-hidden">
    <x-aspect-ratio ratio="16/9">
        <x-box
            as="video"
            w="full"
            h="full"
            controls
            poster="/thumbnail.jpg"
        >
            <source src="/video.mp4" type="video/mp4">
        </x-box>
    </x-aspect-ratio>
</x-box>
```

### Hero Banner

```blade
<x-aspect-ratio ratio="21/9">
    <x-box
        w="full"
        h="full"
        class="bg-cover bg-center"
        style="background-image: url('/hero.jpg')"
    >
        <x-flex w="full" h="full" bg="black" align="center" justify="center" class="bg-opacity-50">
            <x-vstack spacing="lg" align="center" color="white">
                <x-heading as="h1" fontSize="5xl" fontWeight="bold">Welcome</x-heading>
                <x-text fontSize="xl">Your tagline here</x-text>
                <x-button color="primary" size="xl">Get Started</x-button>
            </x-vstack>
        </x-flex>
    </x-box>
</x-aspect-ratio>
```

### Avatar

```blade
<x-aspect-ratio ratio="1/1" w="32">
    <x-box
        as="img"
        src="/avatar.jpg"
        w="full"
        h="full"
        class="object-cover rounded-full"
    />
</x-aspect-ratio>
```

### Map Embed

```blade
<x-aspect-ratio ratio="16/9">
    <x-box
        as="iframe"
        src="https://www.google.com/maps/embed?..."
        w="full"
        h="full"
        rounded="lg"
        loading="lazy"
    ></x-box>
</x-aspect-ratio>
```

### Card with Image

```blade
<x-box shadow="lg" rounded="xl" class="overflow-hidden">
    <x-aspect-ratio ratio="16/9">
        <x-box
            as="img"
            src="/blog-post.jpg"
            w="full"
            h="full"
            class="object-cover"
        />
    </x-aspect-ratio>

    <x-vstack spacing="md" p="6">
        <x-text as="span" fontSize="xs" color="gray.500">March 15, 2024</x-text>
        <x-heading as="h2" fontSize="2xl" fontWeight="bold">Blog Post Title</x-heading>
        <x-text color="gray.600">Post excerpt goes here...</x-text>
        <x-button variant="link" class="self-start">Read More →</x-button>
    </x-vstack>
</x-box>
```

### Placeholder

```blade
<x-aspect-ratio ratio="16/9">
    <x-center w="full" h="full" bg="gray.100">
        <x-vstack spacing="sm" align="center" color="gray.400">
            <x-icon name="heroicons:photo" size="48px" />
            <x-text as="span">No image</x-text>
        </x-vstack>
    </x-center>
</x-aspect-ratio>
```

### Thumbnail Grid

```blade
<x-wrap spacing="sm">
    @foreach($videos as $video)
        <x-box w="48">
            <x-aspect-ratio ratio="16/9">
                <x-box position="relative" w="full" h="full">
                    <x-box
                        as="img"
                        src="{{ $video->thumbnail }}"
                        w="full"
                        h="full"
                        class="object-cover rounded-lg"
                    />
                    <x-absolute-center>
                        <x-button size="sm" rounded="full" class="bg-black bg-opacity-75">
                            <x-icon name="heroicons:play" color="white" />
                        </x-button>
                    </x-absolute-center>
                </x-box>
            </x-aspect-ratio>

            <x-heading as="h4" mt="2" fontSize="sm" fontWeight="medium">{{ $video->title }}</x-heading>
        </x-box>
    @endforeach
</x-wrap>
```

## Tips

- Use predefined ratios for common use cases
- Perfect for responsive images and videos
- Prevents layout shift when content loads
- Combine with `object-cover` or `object-contain` for images
- Works great with iframes for embeds

