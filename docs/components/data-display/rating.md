# Rating

Rating component for displaying and collecting star ratings.

## Requirements

For interactive ratings, this component requires **Alpine.js** to be installed in your project.

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Basic Usage

```blade
<x-rating :value="4.5" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `float` | `0` | Current rating value (0-max) |
| `max` | `int` | `5` | Maximum rating value |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'yellow'` | Color: `yellow`, `red`, `orange`, `green`, `blue`, `purple`, `pink`, `gray` |
| `readonly` | `bool` | `true` | Whether the rating is readonly |
| `showValue` | `bool` | `false` | Whether to show the numeric value |
| `name` | `string` | `null` | Form input name (for interactive ratings) |

## Readonly Ratings

### Basic Rating

```blade
<x-rating :value="4" />
```

### Half Star Rating

```blade
<x-rating :value="3.5" />
```

### With Numeric Value

```blade
<x-rating :value="4.5" :show-value="true" />
```

### With Custom Text

```blade
<x-rating :value="4.5">
    (128 reviews)
</x-rating>
```

## Sizes

```blade
<x-rating :value="4" size="xs" />
<x-rating :value="4" size="sm" />
<x-rating :value="4" size="md" />
<x-rating :value="4" size="lg" />
<x-rating :value="4" size="xl" />
```

## Colors

```blade
<x-rating :value="4" color="yellow" />
<x-rating :value="4" color="red" />
<x-rating :value="4" color="orange" />
<x-rating :value="4" color="green" />
<x-rating :value="4" color="blue" />
<x-rating :value="4" color="purple" />
<x-rating :value="4" color="pink" />
<x-rating :value="4" color="gray" />
```

## Interactive Ratings

### Basic Interactive Rating

```blade
<x-rating :value="0" :readonly="false" name="rating" />
```

### With Initial Value

```blade
<x-rating :value="3" :readonly="false" name="rating" />
```

### With Value Display

```blade
<x-rating :value="0" :readonly="false" :show-value="true" name="rating" />
```

## Custom Max Stars

```blade
<x-rating :value="7" :max="10" />
```

## Common Patterns

### Product Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center justify-between mb-4">
            <x-heading size="lg">{{ $product->name }}</x-heading>
            <x-rating :value="$product->average_rating" :show-value="true">
                ({{ $product->reviews_count }} reviews)
            </x-rating>
        </div>
        
        <x-text>{{ $product->description }}</x-text>
    </x-card-body>
</x-card>
```

### Review List

```blade
<div class="space-y-4">
    @foreach($reviews as $review)
    <x-card>
        <x-card-body>
            <div class="flex items-start gap-4">
                <x-avatar :src="$review->user->avatar" :name="$review->user->name" />
                
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-2">
                        <x-text weight="medium">{{ $review->user->name }}</x-text>
                        <x-rating :value="$review->rating" size="sm" />
                    </div>
                    
                    <x-text color="gray" size="sm" class="mb-2">
                        {{ $review->created_at->diffForHumans() }}
                    </x-text>
                    
                    <x-text>{{ $review->comment }}</x-text>
                </div>
            </div>
        </x-card-body>
    </x-card>
    @endforeach
</div>
```

### Rating Form

```blade
<form method="POST" action="/reviews">
    @csrf
    
    <x-field label="Your Rating" required>
        <x-rating :value="0" :readonly="false" name="rating" />
    </x-field>
    
    <x-field label="Your Review" required>
        <x-textarea name="comment" rows="4" />
    </x-field>
    
    <x-button type="submit" color="primary">
        Submit Review
    </x-button>
</form>
```

### Rating Summary

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center gap-6">
            <div class="text-center">
                <div class="text-4xl font-bold text-gray-900">
                    {{ number_format($averageRating, 1) }}
                </div>
                <x-rating :value="$averageRating" size="lg" class="mt-2" />
                <x-text size="sm" color="gray" class="mt-1">
                    {{ $totalReviews }} reviews
                </x-text>
            </div>
            
            <div class="flex-1 space-y-2">
                @foreach([5, 4, 3, 2, 1] as $stars)
                <div class="flex items-center gap-2">
                    <x-text size="sm" class="w-12">{{ $stars }} star</x-text>
                    <x-progress 
                        :value="$ratingDistribution[$stars]" 
                        :max="$totalReviews"
                        size="sm"
                        class="flex-1"
                    />
                    <x-text size="sm" color="gray" class="w-12 text-right">
                        {{ $ratingDistribution[$stars] }}
                    </x-text>
                </div>
                @endforeach
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Restaurant Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-start gap-4">
            <img src="{{ $restaurant->image }}" alt="{{ $restaurant->name }}" class="w-24 h-24 rounded-lg object-cover">
            
            <div class="flex-1">
                <x-heading size="md">{{ $restaurant->name }}</x-heading>
                
                <div class="flex items-center gap-4 mt-2">
                    <x-rating :value="$restaurant->rating" size="sm" :show-value="true" />
                    <x-badge>{{ $restaurant->cuisine }}</x-badge>
                    <x-text size="sm" color="gray">
                        ${{ $restaurant->price_range }}
                    </x-text>
                </div>
                
                <x-text size="sm" color="gray" class="mt-2">
                    {{ $restaurant->address }}
                </x-text>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Course Rating

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg">{{ $course->title }}</x-heading>
        
        <div class="flex items-center gap-4 mt-3">
            <x-rating :value="$course->rating" :show-value="true" />
            <x-text size="sm" color="gray">
                ({{ number_format($course->students_count) }} students)
            </x-text>
        </div>
        
        <x-text class="mt-4">{{ $course->description }}</x-text>
        
        <div class="flex items-center gap-4 mt-4">
            <x-avatar :src="$course->instructor->avatar" :name="$course->instructor->name" size="sm" />
            <x-text size="sm">{{ $course->instructor->name }}</x-text>
        </div>
    </x-card-body>
</x-card>
```

### Hotel Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center justify-between mb-4">
            <div>
                <x-heading size="lg">{{ $hotel->name }}</x-heading>
                <x-rating :value="$hotel->rating" size="sm" class="mt-1" />
            </div>
            
            <div class="text-right">
                <x-text size="sm" color="gray">From</x-text>
                <x-text size="xl" weight="bold" color="primary">
                    ${{ $hotel->price_per_night }}
                </x-text>
                <x-text size="sm" color="gray">per night</x-text>
            </div>
        </div>
        
        <x-text size="sm" color="gray">
            {{ $hotel->location }}
        </x-text>
    </x-card-body>
</x-card>
```

### App Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-start gap-4">
            <img src="{{ $app->icon }}" alt="{{ $app->name }}" class="w-16 h-16 rounded-xl">
            
            <div class="flex-1">
                <x-heading size="md">{{ $app->name }}</x-heading>
                <x-text size="sm" color="gray">{{ $app->developer }}</x-text>
                
                <div class="flex items-center gap-4 mt-2">
                    <x-rating :value="$app->rating" size="sm" :show-value="true" />
                    <x-text size="sm" color="gray">
                        {{ number_format($app->downloads) }} downloads
                    </x-text>
                </div>
            </div>
            
            <x-button color="primary">Install</x-button>
        </div>
    </x-card-body>
</x-card>
```

### Book Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-start gap-4">
            <img src="{{ $book->cover }}" alt="{{ $book->title }}" class="w-24 h-32 rounded object-cover">
            
            <div class="flex-1">
                <x-heading size="md">{{ $book->title }}</x-heading>
                <x-text size="sm" color="gray">by {{ $book->author }}</x-text>
                
                <x-rating :value="$book->rating" size="sm" :show-value="true" class="mt-2">
                    ({{ number_format($book->ratings_count) }} ratings)
                </x-rating>
                
                <x-text size="sm" class="mt-3">{{ $book->description }}</x-text>
                
                <div class="flex items-center gap-2 mt-3">
                    <x-button color="primary" size="sm">Buy Now</x-button>
                    <x-button variant="outline" size="sm">Add to Wishlist</x-button>
                </div>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Service Provider Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center gap-4">
            <x-avatar :src="$provider->avatar" :name="$provider->name" size="lg" />
            
            <div class="flex-1">
                <x-heading size="md">{{ $provider->name }}</x-heading>
                <x-text size="sm" color="gray">{{ $provider->profession }}</x-text>
                
                <div class="flex items-center gap-4 mt-2">
                    <x-rating :value="$provider->rating" size="sm" :show-value="true" />
                    <x-text size="sm" color="gray">
                        {{ $provider->completed_jobs }} jobs completed
                    </x-text>
                </div>
            </div>
            
            <x-button color="primary">Hire</x-button>
        </div>
    </x-card-body>
</x-card>
```

### Movie Rating

```blade
<x-card>
    <x-card-body>
        <div class="flex items-start gap-4">
            <img src="{{ $movie->poster }}" alt="{{ $movie->title }}" class="w-32 h-48 rounded object-cover">
            
            <div class="flex-1">
                <x-heading size="lg">{{ $movie->title }}</x-heading>
                <x-text size="sm" color="gray">{{ $movie->year }} • {{ $movie->duration }}</x-text>
                
                <x-rating :value="$movie->rating" :show-value="true" class="mt-2">
                    ({{ number_format($movie->votes) }} votes)
                </x-rating>
                
                <div class="flex flex-wrap gap-2 mt-3">
                    @foreach($movie->genres as $genre)
                    <x-badge>{{ $genre }}</x-badge>
                    @endforeach
                </div>
                
                <x-text class="mt-3">{{ $movie->plot }}</x-text>
            </div>
        </div>
    </x-card-body>
</x-card>
```

## Livewire Integration

```blade
<div>
    <x-rating 
        :value="$rating" 
        :readonly="false" 
        name="rating"
        wire:model="rating"
    />
    
    @if($rating > 0)
    <x-text size="sm" color="gray" class="mt-2">
        You rated this {{ $rating }} out of 5 stars
    </x-text>
    @endif
</div>
```

```php
// Livewire Component
use Livewire\Component;

class RatingForm extends Component
{
    public $rating = 0;
    
    public function updatedRating($value)
    {
        // Save rating
        auth()->user()->ratings()->create([
            'product_id' => $this->productId,
            'rating' => $value,
        ]);
    }
    
    public function render()
    {
        return view('livewire.rating-form');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ rating: 0 }">
    <x-rating 
        x-bind:value="rating" 
        :readonly="false"
    />
    
    <template x-if="rating > 0">
        <x-text size="sm" color="gray" class="mt-2">
            You selected <span x-text="rating"></span> stars
        </x-text>
    </template>
</div>
```

## Accessibility

The Rating component:
- Uses semantic HTML structure
- Provides keyboard navigation for interactive ratings
- Includes focus indicators for interactive stars
- Supports screen readers with proper ARIA attributes
- Maintains proper color contrast ratios
- Works with form submissions
- Provides visual feedback on hover and click
- Supports half-star ratings for precise display

