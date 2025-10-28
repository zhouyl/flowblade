<a 
    href="{{ $href }}" 
    {{ $attributes->merge([
        'class' => 'flex items-center space-x-3 rtl:space-x-reverse'
    ]) }}
>
    @if($logo)
        <img src="{{ $logo }}" class="h-8" alt="{{ $name ?? 'Logo' }}" />
    @endif
    
    @if($name)
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
            {{ $name }}
        </span>
    @endif
    
    {{ $slot }}
</a>

