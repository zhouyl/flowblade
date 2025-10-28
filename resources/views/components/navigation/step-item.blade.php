@php
    // Get parent Steps component data
    $parentOrientation = $attributes->get('data-parent-orientation', 'horizontal');
    $parentVariant = $attributes->get('data-parent-variant', 'default');
    $isLast = $attributes->get('data-is-last', false);
    
    // Status-based classes
    $statusColors = [
        'complete' => 'text-blue-600 dark:text-blue-500',
        'current' => 'text-blue-600 dark:text-blue-500',
        'pending' => 'text-gray-500 dark:text-gray-400',
    ];
    
    $statusColor = $statusColors[$status] ?? $statusColors['pending'];
    
    // Connector line classes
    $connectorClasses = '';
    if ($parentOrientation === 'horizontal' && !$isLast) {
        if ($status === 'complete') {
            $connectorClasses = "after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800";
        } else {
            $connectorClasses = "after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700";
        }
    }
    
    // Item wrapper classes
    $itemClasses = '';
    if ($parentOrientation === 'horizontal') {
        $itemClasses = 'flex items-center ' . ($isLast ? '' : 'md:w-full ') . $connectorClasses;
    } elseif ($parentOrientation === 'vertical') {
        $itemClasses = 'mb-10 ms-6';
    }
    
    // Icon/Number container classes
    $iconContainerClasses = '';
    if ($parentVariant === 'progress') {
        if ($status === 'complete') {
            $iconContainerClasses = 'flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0';
        } else {
            $iconContainerClasses = 'flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0';
        }
    } elseif ($parentVariant === 'breadcrumb') {
        if ($status === 'complete' || $status === 'current') {
            $iconContainerClasses = 'flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500';
        } else {
            $iconContainerClasses = 'flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400';
        }
    } elseif ($parentVariant === 'detailed') {
        if ($status === 'complete') {
            $iconContainerClasses = 'w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400';
        } elseif ($status === 'current') {
            $iconContainerClasses = 'w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400';
        } else {
            $iconContainerClasses = 'w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400';
        }
    } elseif ($parentOrientation === 'vertical') {
        if ($status === 'complete') {
            $iconContainerClasses = 'absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900';
        } else {
            $iconContainerClasses = 'absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700';
        }
    } else {
        $iconContainerClasses = 'flex items-center justify-center w-8 h-8 border border-' . ($status === 'complete' || $status === 'current' ? 'blue-600' : 'gray-500') . ' rounded-full shrink-0 dark:border-' . ($status === 'complete' || $status === 'current' ? 'blue-500' : 'gray-400');
    }
@endphp

<li 
    {{ $attributes->merge([
        'class' => $itemClasses . ' ' . $statusColor
    ]) }}
>
    @if($parentVariant === 'detailed')
        <div class="{{ $iconContainerClasses }}" role="alert">
            <div class="flex items-center justify-between">
                <span class="sr-only">{{ $title }}</span>
                <h3 class="font-medium">{{ $number ? $number . '. ' : '' }}{{ $title }}</h3>
                @if($status === 'complete' && $showIcon)
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                @elseif($status === 'current')
                    <svg class="rtl:rotate-180 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                @endif
            </div>
            @if($description)
                <p class="text-sm mt-1">{{ $description }}</p>
            @endif
        </div>
    @else
        @if($parentVariant === 'progress' || $parentOrientation === 'vertical')
            <span class="{{ $iconContainerClasses }}">
                @if($status === 'complete' && $showIcon)
                    <svg class="w-3.5 h-3.5 {{ $status === 'complete' ? 'text-blue-600 dark:text-blue-300' : 'text-gray-500 dark:text-gray-400' }} lg:w-4 lg:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                @elseif($icon)
                    @php
                        $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
                    @endphp
                    <x-dynamic-component :component="$iconComponent" :name="$icon" class="w-4 h-4 lg:w-5 lg:h-5" />
                @else
                    <span class="text-sm">{{ $number }}</span>
                @endif
            </span>
        @endif
        
        @if($parentOrientation === 'horizontal')
            <span class="flex items-center {{ $parentVariant === 'breadcrumb' ? '' : 'after:content-[\'/\'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500' }}">
                @if($parentVariant === 'breadcrumb')
                    <span class="{{ $iconContainerClasses }}">
                        {{ $number }}
                    </span>
                @elseif($parentVariant === 'default')
                    <span class="{{ $iconContainerClasses }}">
                        @if($status === 'complete' && $showIcon)
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                        @else
                            <span class="me-2">{{ $number }}</span>
                        @endif
                    </span>
                @endif
                
                {{ $title }} <span class="hidden sm:inline-flex sm:ms-2">{{ $description }}</span>
                
                @if($parentVariant === 'breadcrumb' && !$isLast)
                    <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                    </svg>
                @endif
            </span>
        @else
            <h3 class="font-medium leading-tight">{{ $title }}</h3>
            @if($description)
                <p class="text-sm">{{ $description }}</p>
            @endif
        @endif
    @endif
</li>

