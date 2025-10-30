@php
$sizeClasses = [
    'xs' => 'text-xs',
    'sm' => 'text-sm',
    'md' => 'text-base',
    'lg' => 'text-lg',
    'xl' => 'text-xl',
];

$variantClasses = [
    'default' => 'border-t border-gray-200',
    'separated' => 'space-y-2',
    'contained' => 'border border-gray-200 rounded-lg overflow-hidden',
];

$sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
$variantClass = $variantClasses[$variant] ?? $variantClasses['default'];
@endphp

<div
    {{ $attributes->merge(['class' => $classes() . ' ' . $sizeClass . ' ' . $variantClass]) }}
    x-data="{ 
        openItems: {{ $defaultValue ? '[\'' . $defaultValue . '\']' : '[]' }},
        multiple: {{ $multiple ? 'true' : 'false' }},
        variant: '{{ $variant }}',
        toggle(value) {
            if (this.multiple) {
                if (this.openItems.includes(value)) {
                    this.openItems = this.openItems.filter(item => item !== value);
                } else {
                    this.openItems.push(value);
                }
            } else {
                this.openItems = this.openItems.includes(value) ? [] : [value];
            }
        },
        isOpen(value) {
            return this.openItems.includes(value);
        }
    }"
>
    {{ $slot }}
</div>

