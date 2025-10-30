@php
// Container classes
$containerClasses = $fullWidth ? 'w-full' : 'container mx-auto max-w-7xl';

// Background classes
$bgClasses = '';
if ($bgImage) {
    $bgClasses = 'bg-cover bg-center bg-no-repeat';
} elseif ($bgGradient) {
    $bgClasses = $bgGradient;
}

// Overlay classes
$overlayClasses = match($overlay) {
    'light' => 'bg-black/10',
    'medium' => 'bg-black/30',
    'dark' => 'bg-black/50',
    default => '',
};
@endphp

<section {{ $attributes->merge(['class' => $classes() . ' ' . $bgClasses]) }} @if($bgImage) style="background-image: url('{{ $bgImage }}');" @endif>
    @if($overlay !== 'none')
        <div class="absolute inset-0 {{ $overlayClasses }}"></div>
    @endif
    
    <div class="relative {{ $containerClasses }}">
        {{ $slot }}
    </div>
</section>

