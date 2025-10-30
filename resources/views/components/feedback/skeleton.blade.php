@php
$typeConfigs = [
    'text' => [
        'width' => $width ?? 'w-full',
        'height' => $height ?? 'h-2',
        'rounded' => $rounded ? 'rounded-full' : '',
    ],
    'image' => [
        'width' => $width ?? 'w-full',
        'height' => $height ?? 'h-48',
        'rounded' => $rounded ? 'rounded-sm' : '',
    ],
    'video' => [
        'width' => $width ?? 'w-full',
        'height' => $height ?? 'h-56',
        'rounded' => $rounded ? 'rounded-lg' : '',
    ],
    'card' => [
        'width' => $width ?? 'w-full',
        'height' => $height ?? 'h-64',
        'rounded' => $rounded ? 'rounded-lg' : '',
    ],
    'avatar' => [
        'width' => $width ?? 'w-10',
        'height' => $height ?? 'h-10',
        'rounded' => $rounded ? 'rounded-full' : '',
    ],
    'button' => [
        'width' => $width ?? 'w-24',
        'height' => $height ?? 'h-10',
        'rounded' => $rounded ? 'rounded-lg' : '',
    ],
    'circle' => [
        'width' => $width ?? 'w-12',
        'height' => $height ?? 'h-12',
        'rounded' => 'rounded-full',
    ],
    'rectangle' => [
        'width' => $width ?? 'w-full',
        'height' => $height ?? 'h-32',
        'rounded' => $rounded ? 'rounded-lg' : '',
    ],
];

$config = $typeConfigs[$type] ?? $typeConfigs['text'];
$widthClass = $config['width'];
$heightClass = $config['height'];
$roundedClass = $config['rounded'];
@endphp

<div
    role="status"
    {{ $attributes->merge([
        'class' => $classes()
    ]) }}
>
    @if($type === 'text' && $lines > 1)
        {{-- Multiple text lines --}}
        <div class="space-y-2.5">
            @for($i = 0; $i < $lines; $i++)
                @php
                    // Vary the width for more natural look
                    $lineWidth = $i === $lines - 1 ? 'max-w-[360px]' : ($i % 2 === 0 ? 'max-w-[480px]' : 'max-w-[440px]');
                @endphp
                <div class="{{ $baseClasses }} {{ $roundedClass }} {{ $heightClass }} {{ $lineWidth }}"></div>
            @endfor
        </div>
    @elseif($type === 'image' || $type === 'video')
        {{-- Image/Video placeholder with icon --}}
        <div class="flex items-center justify-center {{ $widthClass }} {{ $heightClass }} {{ $baseClasses }} {{ $roundedClass }}">
            @if($type === 'image')
            <svg class="w-10 h-10 text-gray-300 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
            </svg>
            @else
            <svg class="w-10 h-10 text-gray-300 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM9 13a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2Zm4 .382a1 1 0 0 1-1.447.894L10 13v-2l1.553-1.276a1 1 0 0 1 1.447.894v2.764Z"/>
            </svg>
            @endif
        </div>
    @elseif($type === 'avatar')
        {{-- Avatar placeholder with icon --}}
        <svg class="{{ $widthClass }} {{ $heightClass }} {{ $baseClasses }} {{ $roundedClass }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
        </svg>
    @elseif($type === 'card')
        {{-- Card placeholder --}}
        <div class="{{ $widthClass }} p-4 border border-gray-200 {{ $roundedClass }} shadow-sm dark:border-gray-700">
            <div class="flex items-center justify-center {{ $heightClass }} mb-4 {{ $baseClasses }} {{ $roundedClass }}">
                <svg class="w-10 h-10 text-gray-300 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"/>
                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                </svg>
            </div>
            <div class="h-2.5 {{ $baseClasses }} rounded-full w-48 mb-4"></div>
            <div class="h-2 {{ $baseClasses }} rounded-full mb-2.5"></div>
            <div class="h-2 {{ $baseClasses }} rounded-full mb-2.5"></div>
            <div class="h-2 {{ $baseClasses }} rounded-full"></div>
        </div>
    @else
        {{-- Simple rectangle/button/circle or custom --}}
        @if($slot->isEmpty())
            <div class="{{ $baseClasses }} {{ $roundedClass }} {{ $widthClass }} {{ $heightClass }}"></div>
        @else
            {{ $slot }}
        @endif
    @endif
    
    <span class="sr-only">Loading...</span>
</div>

