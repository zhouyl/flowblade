@php
    // Position classes
    $positionClasses = [
        'left' => 'left-0',
        'right' => 'right-0',
    ];
    
    $positionClass = $positionClasses[$position] ?? $positionClasses['left'];
    
    // Fixed class
    $fixedClass = $fixed ? 'fixed top-0 z-40 h-screen' : '';
    
    // Off-canvas classes (drawer style)
    $offCanvasClasses = $offCanvas 
        ? 'transition-transform -translate-x-full sm:translate-x-0' 
        : '';
@endphp

<aside 
    id="{{ $id }}"
    {{ $attributes->merge([
        'class' => $fixedClass . ' ' . $positionClass . ' ' . $offCanvasClasses . ' w-64',
        'aria-label' => 'Sidebar'
    ]) }}
>
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        {{ $slot }}
    </div>
</aside>

