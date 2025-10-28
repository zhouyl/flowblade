# Video

HTML5 video player component with enhanced features for embedding and playing video content.

## Basic Usage

```blade
<x-video src="/videos/demo.mp4" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | `string` | `''` | Video source URL |
| `poster` | `string` | `''` | Poster image URL (thumbnail) |
| `controls` | `bool` | `true` | Show video controls |
| `autoplay` | `bool` | `false` | Autoplay video on load |
| `loop` | `bool` | `false` | Loop video playback |
| `muted` | `bool` | `false` | Mute video audio |
| `preload` | `string` | `'metadata'` | Preload option: `none`, `metadata`, `auto` |
| `width` | `string` | `'w-full'` | Width classes |
| `height` | `string` | `'h-auto'` | Height classes |
| `rounded` | `bool` | `false` | Apply rounded corners |
| `border` | `bool` | `false` | Apply border |

## Examples

### Default Video Player

```blade
<x-video src="/videos/flowbite.mp4" />
```

### With Poster Image

```blade
<x-video 
    src="/videos/demo.mp4" 
    poster="/images/video-thumbnail.jpg"
/>
```

### Autoplay Video

```blade
<x-video 
    src="/videos/intro.mp4" 
    :autoplay="true"
/>
```

### Autoplay with Muted

```blade
<x-video 
    src="/videos/background.mp4" 
    :autoplay="true"
    :muted="true"
/>
```

### Looping Video

```blade
<x-video 
    src="/videos/animation.mp4" 
    :loop="true"
    :autoplay="true"
    :muted="true"
/>
```

### Without Controls

```blade
<x-video 
    src="/videos/background.mp4" 
    :controls="false"
    :autoplay="true"
    :loop="true"
    :muted="true"
/>
```

### Fixed Width

```blade
<x-video 
    src="/videos/demo.mp4" 
    width="w-96"
/>
```

### Fixed Height

```blade
<x-video 
    src="/videos/demo.mp4" 
    height="h-80"
/>
```

### Responsive Video

```blade
<x-video 
    src="/videos/demo.mp4" 
    width="w-full"
    height="h-auto"
/>
```

### With Rounded Corners

```blade
<x-video 
    src="/videos/demo.mp4" 
    :rounded="true"
/>
```

### With Border

```blade
<x-video 
    src="/videos/demo.mp4" 
    :border="true"
    :rounded="true"
/>
```

### Multiple Video Sources

```blade
<x-video poster="/images/poster.jpg">
    <source src="/videos/demo.mp4" type="video/mp4">
    <source src="/videos/demo.webm" type="video/webm">
    <source src="/videos/demo.ogv" type="video/ogg">
</x-video>
```

### With Subtitles/Captions

```blade
<x-video src="/videos/demo.mp4">
    <track 
        kind="subtitles" 
        src="/subtitles/en.vtt" 
        srclang="en" 
        label="English"
    >
    <track 
        kind="subtitles" 
        src="/subtitles/es.vtt" 
        srclang="es" 
        label="Spanish"
    >
</x-video>
```

### Preload Options

```blade
<!-- Don't preload anything -->
<x-video 
    src="/videos/large.mp4" 
    preload="none"
/>

<!-- Preload only metadata (default) -->
<x-video 
    src="/videos/demo.mp4" 
    preload="metadata"
/>

<!-- Preload entire video -->
<x-video 
    src="/videos/small.mp4" 
    preload="auto"
/>
```

## Laravel Integration

### Dynamic Video from Database

```blade
<x-video 
    src="{{ Storage::url($video->file_path) }}"
    poster="{{ Storage::url($video->thumbnail) }}"
/>
```

### Video Gallery

```blade
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($videos as $video)
        <div>
            <x-video 
                src="{{ $video->url }}"
                poster="{{ $video->thumbnail }}"
                width="w-full"
                :rounded="true"
                :border="true"
            />
            <h3 class="mt-2 text-lg font-semibold">{{ $video->title }}</h3>
            <p class="text-gray-600 dark:text-gray-400">{{ $video->description }}</p>
        </div>
    @endforeach
</div>
```

### Video with Upload

```blade
<form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <x-field label="Video Title">
        <x-input name="title" />
    </x-field>
    
    <x-field label="Video File">
        <x-file-input name="video" accept="video/*" />
    </x-field>
    
    <x-field label="Thumbnail">
        <x-file-input name="thumbnail" accept="image/*" />
    </x-field>
    
    @if(session('video_preview'))
        <x-video 
            src="{{ session('video_preview') }}"
            :rounded="true"
        />
    @endif
    
    <x-button type="submit">Upload Video</x-button>
</form>
```

### Background Video Section

```blade
<div class="relative h-screen overflow-hidden">
    <x-video 
        src="/videos/hero-background.mp4"
        :controls="false"
        :autoplay="true"
        :loop="true"
        :muted="true"
        width="w-full"
        height="h-full"
        class="object-cover"
    />
    
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Welcome to Our Site</h1>
            <p class="text-xl mb-8">Discover amazing content</p>
            <x-button size="lg">Get Started</x-button>
        </div>
    </div>
</div>
```

### Video Player with Custom Controls

```blade
<div x-data="{ playing: false }" class="relative">
    <x-video 
        src="/videos/demo.mp4"
        :controls="false"
        x-ref="video"
        @click="playing = !playing; $refs.video.paused ? $refs.video.play() : $refs.video.pause()"
    />
    
    <button 
        @click="playing = !playing; $refs.video.paused ? $refs.video.play() : $refs.video.pause()"
        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30 hover:bg-opacity-50 transition"
        x-show="!playing"
    >
        <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
        </svg>
    </button>
</div>
```

### Video Course Player

```blade
<div class="max-w-4xl mx-auto">
    <x-card>
        <x-slot:header>
            <h2 class="text-2xl font-bold">{{ $lesson->title }}</h2>
        </x-slot:header>

        <x-video
            src="{{ $lesson->video_url }}"
            poster="{{ $lesson->thumbnail }}"
            :rounded="true"
        />

        <x-slot:body>
            <div class="prose dark:prose-invert max-w-none">
                {!! $lesson->description !!}
            </div>

            <div class="mt-6 flex justify-between">
                @if($previousLesson)
                    <x-button href="{{ route('lessons.show', $previousLesson) }}" variant="outline">
                        Previous Lesson
                    </x-button>
                @endif

                @if($nextLesson)
                    <x-button href="{{ route('lessons.show', $nextLesson) }}">
                        Next Lesson
                    </x-button>
                @endif
            </div>
        </x-slot:body>
    </x-card>
</div>
```

## Responsive Behavior

The video component is responsive by default with `w-full h-auto max-w-full` classes:

```blade
<!-- Mobile-first responsive -->
<x-video
    src="/videos/demo.mp4"
    width="w-full sm:w-3/4 md:w-2/3 lg:w-1/2"
/>

<!-- Different heights for different screens -->
<x-video
    src="/videos/demo.mp4"
    height="h-48 sm:h-64 md:h-80 lg:h-96"
/>
```

## Accessibility

The Video component:
- Uses semantic HTML5 `<video>` element
- Provides fallback text for unsupported browsers
- Supports captions and subtitles via `<track>` elements
- Includes native browser controls for keyboard navigation
- Works with screen readers

### Adding Captions for Accessibility

```blade
<x-video src="/videos/demo.mp4">
    <track
        kind="captions"
        src="/captions/en.vtt"
        srclang="en"
        label="English"
        default
    >
</x-video>
```

## Performance Tips

1. **Use Appropriate Formats**: Provide multiple formats for better browser compatibility
```blade
<x-video>
    <source src="/videos/demo.mp4" type="video/mp4">
    <source src="/videos/demo.webm" type="video/webm">
</x-video>
```

2. **Optimize Video Files**: Compress videos before uploading
```bash
# Using ffmpeg
ffmpeg -i input.mp4 -c:v libx264 -crf 23 -c:a aac -b:a 128k output.mp4
```

3. **Use Poster Images**: Always provide a poster image to improve perceived performance
```blade
<x-video src="/videos/demo.mp4" poster="/images/poster.jpg" />
```

4. **Lazy Loading**: Use preload="none" for videos below the fold
```blade
<x-video src="/videos/demo.mp4" preload="none" />
```

5. **Responsive Videos**: Serve different video sizes for different devices
```blade
<x-video>
    <source src="/videos/demo-mobile.mp4" type="video/mp4" media="(max-width: 640px)">
    <source src="/videos/demo-desktop.mp4" type="video/mp4">
</x-video>
```

## Browser Support

The Video component uses HTML5 video, which is supported by all modern browsers:
- Chrome 4+
- Firefox 3.5+
- Safari 4+
- Edge (all versions)
- Opera 10.5+

For older browsers, the fallback text will be displayed.

## Important Notes

1. **Autoplay Restrictions**: Most browsers block autoplay with sound. Use `muted` with `autoplay`:
```blade
<x-video src="/videos/demo.mp4" :autoplay="true" :muted="true" />
```

2. **Video Formats**: Use MP4 (H.264) for best compatibility across all browsers.

3. **File Size**: Keep video files small for better performance. Consider using streaming services for large videos.

4. **HTTPS Required**: Some features like autoplay may require HTTPS.

## Related Components

- [Carousel](./carousel.md) - Image/content carousel
- [Gallery](./gallery.md) - Image gallery component
- [Modal](../overlay/modal.md) - Modal for video lightbox
- [Card](../data-display/card.md) - Card component for video containers


