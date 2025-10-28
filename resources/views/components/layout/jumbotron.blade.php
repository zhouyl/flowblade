@php
// Base classes
$baseClasses = 'relative';

// Size classes
$sizeClasses = match($size) {
    'sm' => 'py-8 px-4',
    'md' => 'py-12 px-6',
    'lg' => 'py-16 px-8',
    'xl' => 'py-24 px-12',
    default => 'py-16 px-8',
};

// Alignment classes
$alignClasses = match($align) {
    'left' => 'text-left',
    'center' => 'text-center',
    'right' => 'text-right',
    default => 'text-center',
};

// Container classes
$containerClasses = $fullWidth ? 'w-full' : 'container mx-auto max-w-7xl';

// Background classes
$bgClasses = '';
if ($bgImage) {
    $bgClasses = 'bg-cover bg-center bg-no-repeat';
} elseif ($bgGradient) {
    $bgClasses = $bgGradient;
} else {
    $bgClasses = 'bg-white dark:bg-gray-900';
}

// Overlay classes
$overlayClasses = match($overlay) {
    'light' => 'bg-black/10',
    'medium' => 'bg-black/30',
    'dark' => 'bg-black/50',
    default => '',
};
@endphp

<section {{ $attributes->merge(['class' => $baseClasses.' '.$bgClasses]) }} @if($bgImage) style="background-image: url('{{ $bgImage }}');" @endif>
    @if($overlay !== 'none')
        <div class="absolute inset-0 {{ $overlayClasses }}"></div>
    @endif
    
    <div class="relative {{ $containerClasses }} {{ $sizeClasses }} {{ $alignClasses }}">
        {{ $slot }}
    </div>
</section>

