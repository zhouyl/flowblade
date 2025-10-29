@php
    // Size configurations
    $sizeConfig = [
        'xs' => 'w-6 h-6',
        'sm' => 'w-8 h-8',
        'md' => 'w-10 h-10',
        'lg' => 'w-12 h-12',
        'xl' => 'w-16 h-16',
    ];

    $swatchSize = $sizeConfig[$size] ?? $sizeConfig['md'];

    // Variant configurations
    $variantClasses = [
        'square' => 'rounded',
        'circle' => 'rounded-full',
    ];

    $variantClass = $variantClasses[$variant] ?? $variantClasses['square'];

    // Border and shadow
    $borderClass = $withBorder ? 'ring-2 ring-gray-200 ring-offset-2' : '';
    $shadowClass = $withShadow ? 'shadow-md' : '';

    // Normalize color value for display
    $displayColor = $color;
@endphp

<div
    @if($copyable)
    x-data="{
        copied: false,
        copyColor() {
            navigator.clipboard.writeText('{{ $color }}').then(() => {
                this.copied = true;
                setTimeout(() => this.copied = false, 2000);
            });
        }
    }"
    @endif
    {{ $attributes->merge(['class' => $classes()]) }}
>
    @if($label)
        <span class="text-sm font-medium text-gray-700">{{ $label }}</span>
    @endif
    
    <div 
        class="{{ $swatchSize }} {{ $variantClass }} {{ $borderClass }} {{ $shadowClass }} transition-all"
        style="background-color: {{ $color }};"
        @if($copyable)
        @click="copyColor()"
        role="button"
        tabindex="0"
        @keydown.enter="copyColor()"
        @keydown.space.prevent="copyColor()"
        class="cursor-pointer hover:scale-110"
        title="Click to copy color value"
        @endif
    ></div>
    
    @if($showValue)
        <span class="text-xs font-mono text-gray-600">{{ $displayColor }}</span>
    @endif
    
    @if($copyable)
        <div 
            x-show="copied" 
            x-transition
            class="text-xs text-green-600 font-medium"
        >
            Copied!
        </div>
    @endif
    
    @if($slot->isNotEmpty())
        <div class="text-sm text-gray-600 text-center">
            {{ $slot }}
        </div>
    @endif
</div>

