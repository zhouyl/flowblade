@php
    // Size configurations
    $sizeConfig = [
        'xs' => 'w-3 h-3',
        'sm' => 'w-4 h-4',
        'md' => 'w-5 h-5',
        'lg' => 'w-6 h-6',
        'xl' => 'w-8 h-8',
    ];
    
    $starSize = $sizeConfig[$size] ?? $sizeConfig['md'];
    
    // Color configurations
    $colorConfig = [
        'yellow' => 'text-yellow-400',
        'red' => 'text-red-500',
        'orange' => 'text-orange-500',
        'green' => 'text-green-500',
        'blue' => 'text-blue-500',
        'purple' => 'text-purple-500',
        'pink' => 'text-pink-500',
        'gray' => 'text-gray-400',
    ];
    
    $starColor = $colorConfig[$color] ?? $colorConfig['yellow'];
    
    // Calculate filled and empty stars
    $filledStars = floor($value);
    $hasHalfStar = ($value - $filledStars) >= 0.5;
    $emptyStars = $max - $filledStars - ($hasHalfStar ? 1 : 0);
@endphp

<div
    @if(!$readonly)
    x-data="{
        rating: {{ $value }},
        hoverRating: 0,
        setRating(value) {
            this.rating = value;
            if (this.$refs.input) {
                this.$refs.input.value = value;
                this.$refs.input.dispatchEvent(new Event('change'));
            }
        }
    }"
    @endif
    {{ $attributes->merge(['class' => $classes()]) }}
>
    <div class="flex items-center gap-0.5">
        @for($i = 1; $i <= $max; $i++)
            @if($readonly)
                {{-- Readonly stars --}}
                @if($i <= $filledStars)
                    {{-- Filled star --}}
                    <svg class="{{ $starSize }} {{ $starColor }}" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                @elseif($i == $filledStars + 1 && $hasHalfStar)
                    {{-- Half star --}}
                    <div class="relative {{ $starSize }}">
                        <svg class="absolute inset-0 {{ $starSize }} text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="absolute inset-0 {{ $starSize }} {{ $starColor }}" fill="currentColor" viewBox="0 0 20 20" style="clip-path: inset(0 50% 0 0);">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                @else
                    {{-- Empty star --}}
                    <svg class="{{ $starSize }} text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                @endif
            @else
                {{-- Interactive stars --}}
                <button
                    type="button"
                    @click="setRating({{ $i }})"
                    @mouseenter="hoverRating = {{ $i }}"
                    @mouseleave="hoverRating = 0"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-500 rounded"
                >
                    <svg 
                        class="{{ $starSize }} transition-colors"
                        :class="(hoverRating >= {{ $i }} || (!hoverRating && rating >= {{ $i }})) ? '{{ $starColor }}' : 'text-gray-300'"
                        fill="currentColor" 
                        viewBox="0 0 20 20"
                    >
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </button>
            @endif
        @endfor
    </div>
    
    @if($showValue)
        <span class="text-sm font-medium text-gray-700">
            {{ number_format($value, 1) }}
        </span>
    @endif
    
    @if(!$readonly && $name)
        <input type="hidden" name="{{ $name }}" x-ref="input" :value="rating">
    @endif
    
    @if($slot->isNotEmpty())
        <div class="text-sm text-gray-600">
            {{ $slot }}
        </div>
    @endif
</div>

