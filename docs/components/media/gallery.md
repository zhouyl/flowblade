# Gallery

Image gallery component with responsive grid layout for displaying collections of images. Gallery provides a flexible way to display image galleries. Perfect for photo galleries, product showcases, and image collections.

## Components

- `<x-gallery>` - Container component
- `<x-gallery-item>` - Individual gallery item

## Basic Usage

```blade
<x-gallery>
    <x-gallery-item src="/images/photo1.jpg" alt="Photo 1" />
    <x-gallery-item src="/images/photo2.jpg" alt="Photo 2" />
    <x-gallery-item src="/images/photo3.jpg" alt="Photo 3" />
    <x-gallery-item src="/images/photo4.jpg" alt="Photo 4" />
    <x-gallery-item src="/images/photo5.jpg" alt="Photo 5" />
    <x-gallery-item src="/images/photo6.jpg" alt="Photo 6" />
</x-gallery>
```

## Props

### Gallery Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `cols` | `string` | `'3'` | Number of columns: `2`, `3`, `4`, `5`, `6` |
| `gap` | `string` | `'4'` | Gap size: `1`, `2`, `3`, `4`, `5`, `6`, `8` |

### Style Props

Gallery and GalleryItem support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).
| `layout` | `string` | `'grid'` | Layout type: `grid` or `masonry` |

### GalleryItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | `string` | `''` | Image source URL |
| `alt` | `string` | `''` | Image alt text |

## Examples

### Default Gallery (3 Columns)

```blade
<x-gallery>
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Gallery image 1" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Gallery image 2" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Gallery image 3" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Gallery image 4" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Gallery image 5" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="Gallery image 6" />
</x-gallery>
```

### 2 Columns Gallery

```blade
<x-gallery cols="2">
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Image 1" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Image 2" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Image 3" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Image 4" />
</x-gallery>
```

### 4 Columns Gallery

```blade
<x-gallery cols="4">
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image 1" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Image 2" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Image 3" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Image 4" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Image 5" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="Image 6" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="Image 7" />
    <x-gallery-item src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Image 8" />
</x-gallery>
```

### Custom Gap

```blade
<!-- Small gap -->
<x-gallery gap="2">
    <x-gallery-item src="/images/photo1.jpg" alt="Photo 1" />
    <x-gallery-item src="/images/photo2.jpg" alt="Photo 2" />
    <x-gallery-item src="/images/photo3.jpg" alt="Photo 3" />
</x-gallery>

<!-- Large gap -->
<x-gallery gap="8">
    <x-gallery-item src="/images/photo1.jpg" alt="Photo 1" />
    <x-gallery-item src="/images/photo2.jpg" alt="Photo 2" />
    <x-gallery-item src="/images/photo3.jpg" alt="Photo 3" />
</x-gallery>
```

### Gallery with Custom Content

```blade
<x-gallery cols="3">
    <x-gallery-item>
        <img class="h-auto max-w-full rounded-lg" src="/images/photo1.jpg" alt="Photo 1">
    </x-gallery-item>
    <x-gallery-item>
        <div class="relative">
            <img class="h-auto max-w-full rounded-lg" src="/images/photo2.jpg" alt="Photo 2">
            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2">
                <p class="text-sm">Photo Caption</p>
            </div>
        </div>
    </x-gallery-item>
    <x-gallery-item>
        <img class="h-auto max-w-full rounded-lg" src="/images/photo3.jpg" alt="Photo 3">
    </x-gallery-item>
</x-gallery>
```

### Gallery with Links

```blade
<x-gallery cols="3">
    <x-gallery-item>
        <a href="/gallery/photo1">
            <img class="h-auto max-w-full rounded-lg hover:opacity-75 transition-opacity" src="/images/photo1.jpg" alt="Photo 1">
        </a>
    </x-gallery-item>
    <x-gallery-item>
        <a href="/gallery/photo2">
            <img class="h-auto max-w-full rounded-lg hover:opacity-75 transition-opacity" src="/images/photo2.jpg" alt="Photo 2">
        </a>
    </x-gallery-item>
    <x-gallery-item>
        <a href="/gallery/photo3">
            <img class="h-auto max-w-full rounded-lg hover:opacity-75 transition-opacity" src="/images/photo3.jpg" alt="Photo 3">
        </a>
    </x-gallery-item>
</x-gallery>
```

## Laravel Integration

### Dynamic Gallery from Database

```blade
<x-gallery cols="4">
    @foreach($photos as $photo)
        <x-gallery-item 
            src="{{ $photo->url }}" 
            alt="{{ $photo->title }}"
        />
    @endforeach
</x-gallery>
```

### Gallery with Pagination

```blade
<x-gallery cols="3">
    @foreach($photos as $photo)
        <x-gallery-item 
            src="{{ Storage::url($photo->path) }}" 
            alt="{{ $photo->description }}"
        />
    @endforeach
</x-gallery>

<div class="mt-6">
    {{ $photos->links() }}
</div>
```

### Product Gallery

```blade
<div class="space-y-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Product Gallery</h2>
    
    <x-gallery cols="4" gap="4">
        @foreach($product->images as $image)
            <x-gallery-item>
                <a href="{{ $image->large_url }}" data-lightbox="product-gallery">
                    <img 
                        class="h-auto max-w-full rounded-lg hover:opacity-75 transition-opacity cursor-pointer" 
                        src="{{ $image->thumbnail_url }}" 
                        alt="{{ $product->name }}"
                    >
                </a>
            </x-gallery-item>
        @endforeach
    </x-gallery>
</div>
```

### Portfolio Gallery

```blade
<div class="space-y-6">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">My Portfolio</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400">A collection of my best work</p>
    </div>
    
    <x-gallery cols="3" gap="6">
        @foreach($projects as $project)
            <x-gallery-item>
                <div class="relative group">
                    <img 
                        class="h-auto max-w-full rounded-lg" 
                        src="{{ $project->featured_image }}" 
                        alt="{{ $project->title }}"
                    >
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 rounded-lg flex items-center justify-center">
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">{{ $project->title }}</h3>
                            <p class="text-sm">{{ $project->category }}</p>
                        </div>
                    </div>
                </div>
            </x-gallery-item>
        @endforeach
    </x-gallery>
</div>
```

### Team Photos Gallery

```blade
<div class="space-y-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Our Team</h2>
    
    <x-gallery cols="4" gap="4">
        @foreach($teamMembers as $member)
            <x-gallery-item>
                <div class="text-center">
                    <img 
                        class="h-auto max-w-full rounded-lg mb-2" 
                        src="{{ $member->photo }}" 
                        alt="{{ $member->name }}"
                    >
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $member->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $member->position }}</p>
                </div>
            </x-gallery-item>
        @endforeach
    </x-gallery>
</div>
```

### Gallery with Upload

```blade
<form method="POST" action="{{ route('gallery.upload') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Upload Images
        </label>
        <x-file-upload 
            name="images[]" 
            :multiple="true"
            accept="image/*"
        />
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Upload Images
    </button>
</form>

@if($images->count() > 0)
    <div class="mt-8">
        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Uploaded Images</h3>
        <x-gallery cols="4">
            @foreach($images as $image)
                <x-gallery-item>
                    <div class="relative group">
                        <img 
                            class="h-auto max-w-full rounded-lg" 
                            src="{{ Storage::url($image->path) }}" 
                            alt="{{ $image->filename }}"
                        >
                        <button 
                            type="button"
                            onclick="deleteImage({{ $image->id }})"
                            class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity bg-red-600 text-white p-2 rounded-lg hover:bg-red-700"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </x-gallery-item>
            @endforeach
        </x-gallery>
    </div>
@endif
```

## Responsive Behavior

The gallery component is responsive by default:
- **Mobile (< 768px)**: Always shows 2 columns
- **Desktop (≥ 768px)**: Shows the number of columns specified in the `cols` prop

## Accessibility

The Gallery component:
- Uses semantic HTML img elements
- Includes proper alt text for images
- Supports keyboard navigation for links
- Provides screen reader support
- Uses proper color contrast ratios
- Shows visual focus indicators

## Notes

- Images are automatically responsive with `h-auto max-w-full`
- All images have rounded corners by default
- The `cols` prop controls desktop columns (mobile is always 2)
- The `gap` prop controls spacing between items
- You can use the slot in `gallery-item` for custom content
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported
- Responsive design

## Integration with Lightbox Libraries

### With Lightbox2

```html
<!-- Include Lightbox2 CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
```

```blade
<x-gallery cols="3">
    @foreach($images as $image)
        <x-gallery-item>
            <a href="{{ $image->large_url }}" data-lightbox="gallery" data-title="{{ $image->title }}">
                <img class="h-auto max-w-full rounded-lg hover:opacity-75 transition-opacity" src="{{ $image->thumbnail_url }}" alt="{{ $image->title }}">
            </a>
        </x-gallery-item>
    @endforeach
</x-gallery>
```

### With GLightbox

```html
<!-- Include GLightbox CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
```

```blade
<x-gallery cols="3">
    @foreach($images as $image)
        <x-gallery-item>
            <a href="{{ $image->large_url }}" class="glightbox" data-gallery="gallery1">
                <img class="h-auto max-w-full rounded-lg hover:opacity-75 transition-opacity" src="{{ $image->thumbnail_url }}" alt="{{ $image->title }}">
            </a>
        </x-gallery-item>
    @endforeach
</x-gallery>

<script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
</script>
```

## Performance Tips

1. **Lazy Loading**: Use native lazy loading for images
```blade
<x-gallery-item>
    <img class="h-auto max-w-full rounded-lg" src="{{ $image->url }}" alt="{{ $image->alt }}" loading="lazy">
</x-gallery-item>
```

2. **Image Optimization**: Use optimized images
```blade
<x-gallery-item>
    <img
        class="h-auto max-w-full rounded-lg"
        src="{{ $image->thumbnail }}"
        srcset="{{ $image->thumbnail }} 300w, {{ $image->medium }} 600w, {{ $image->large }} 1200w"
        sizes="(max-width: 768px) 50vw, 33vw"
        alt="{{ $image->alt }}"
    >
</x-gallery-item>
```

3. **Pagination**: Use pagination for large galleries
```blade
<x-gallery cols="4">
    @foreach($images as $image)
        <x-gallery-item src="{{ $image->url }}" alt="{{ $image->alt }}" />
    @endforeach
</x-gallery>

{{ $images->links() }}
```

## Accessibility

The Gallery component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Arrow keys)
- Works with screen readers
- Provides proper alt text for images
- Maintains proper image hierarchy
- Announces gallery content to screen readers
- Supports proper ARIA attributes for gallery navigation

## Related Components

- [Image](../typography/image.md) - Image component
- [Card](../data-display/card.md) - Card component for image cards
- [Grid](../layout/grid.md) - Grid layout component
- [AspectRatio](../layout/aspect-ratio.md) - Aspect ratio container


