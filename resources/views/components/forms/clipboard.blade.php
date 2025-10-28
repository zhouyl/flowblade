@php
    // Generate unique IDs
    $buttonId = $attributes->get('id', 'clipboard-button-' . uniqid());
    $tooltipId = 'tooltip-' . $buttonId;
    $defaultMessageId = 'default-message-' . $buttonId;
    $successMessageId = 'success-message-' . $buttonId;
    $defaultIconId = 'default-icon-' . $buttonId;
    $successIconId = 'success-icon-' . $buttonId;
    $defaultTooltipId = 'default-tooltip-' . $buttonId;
    $successTooltipId = 'success-tooltip-' . $buttonId;

    // Size classes
    $sizeClasses = [
        'xs' => 'text-xs px-2 py-1',
        'sm' => 'text-sm px-3 py-1.5',
        'md' => 'text-sm px-4 py-2',
        'lg' => 'text-base px-5 py-2.5',
        'xl' => 'text-base px-6 py-3',
    ];

    // Variant classes
    $variantClasses = [
        'primary' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
        'secondary' => 'text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700',
        'outline' => 'text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700',
    ];

    $buttonClasses = $sizeClasses[$size] . ' ' . $variantClasses[$variant];
@endphp

<button 
    id="{{ $buttonId }}"
    data-copy-to-clipboard-target="#{{ $target }}"
    data-copy-to-clipboard-content-type="{{ $contentType }}"
    @if($showTooltip)
    data-tooltip-target="#{{ $tooltipId }}"
    @endif
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'font-medium rounded-lg focus:outline-none inline-flex items-center justify-center ' . $buttonClasses
    ]) }}
>
    @if($showIcon)
        <span id="{{ $defaultIconId }}">
            <svg class="w-3.5 h-3.5 @if($buttonText) me-2 @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
            </svg>
        </span>
        <span id="{{ $successIconId }}" class="hidden">
            <svg class="w-3.5 h-3.5 @if($buttonText) me-2 @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
            </svg>
        </span>
    @endif

    @if($buttonText)
        <span id="{{ $defaultMessageId }}">{{ $buttonText }}</span>
        <span id="{{ $successMessageId }}" class="hidden">
            @if(!$showIcon)
                <div class="inline-flex items-center">
                    <svg class="w-3 h-3 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    Copied!
                </div>
            @else
                Copied!
            @endif
        </span>
    @endif

    {{ $slot }}
</button>

@if($showTooltip)
<div id="{{ $tooltipId }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    <span id="{{ $defaultTooltipId }}">Copy to clipboard</span>
    <span id="{{ $successTooltipId }}" class="hidden">Copied!</span>
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
@endif

@push('scripts')
<script>
window.addEventListener('load', function() {
    const clipboard = FlowbiteInstances.getInstance('CopyClipboard', '{{ $target }}');
    @if($showTooltip)
    const tooltip = FlowbiteInstances.getInstance('Tooltip', '{{ $tooltipId }}');
    @endif

    @if($showIcon)
    const $defaultIcon = document.getElementById('{{ $defaultIconId }}');
    const $successIcon = document.getElementById('{{ $successIconId }}');
    @endif

    @if($buttonText)
    const $defaultMessage = document.getElementById('{{ $defaultMessageId }}');
    const $successMessage = document.getElementById('{{ $successMessageId }}');
    @endif

    @if($showTooltip)
    const $defaultTooltipMessage = document.getElementById('{{ $defaultTooltipId }}');
    const $successTooltipMessage = document.getElementById('{{ $successTooltipId }}');
    @endif

    if (clipboard) {
        clipboard.updateOnCopyCallback((clipboard) => {
            showSuccess();

            // reset to default state
            setTimeout(() => {
                resetToDefault();
            }, 2000);
        });
    }

    const showSuccess = () => {
        @if($showIcon)
        $defaultIcon.classList.add('hidden');
        $successIcon.classList.remove('hidden');
        @endif

        @if($buttonText)
        $defaultMessage.classList.add('hidden');
        $successMessage.classList.remove('hidden');
        @endif

        @if($showTooltip)
        $defaultTooltipMessage.classList.add('hidden');
        $successTooltipMessage.classList.remove('hidden');
        if (tooltip) {
            tooltip.show();
        }
        @endif
    }

    const resetToDefault = () => {
        @if($showIcon)
        $defaultIcon.classList.remove('hidden');
        $successIcon.classList.add('hidden');
        @endif

        @if($buttonText)
        $defaultMessage.classList.remove('hidden');
        $successMessage.classList.add('hidden');
        @endif

        @if($showTooltip)
        $defaultTooltipMessage.classList.remove('hidden');
        $successTooltipMessage.classList.add('hidden');
        if (tooltip) {
            tooltip.hide();
        }
        @endif
    }
});
</script>
@endpush

