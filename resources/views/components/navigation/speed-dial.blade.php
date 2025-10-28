@php
// Position classes
$positionClasses = match($position) {
    'bottom-right' => 'fixed bottom-6 right-6',
    'bottom-left' => 'fixed bottom-6 left-6',
    'top-right' => 'fixed top-6 right-6',
    'top-left' => 'fixed top-6 left-6',
    default => 'fixed bottom-6 right-6',
};

// Trigger attribute
$triggerAttr = $trigger === 'hover' ? 'data-dial-trigger="hover"' : 'data-dial-trigger="click"';

// Tooltip position
$tooltipPosition = match($tooltip) {
    'left' => 'data-dial-tooltip-position="left"',
    'right' => 'data-dial-tooltip-position="right"',
    'top' => 'data-dial-tooltip-position="top"',
    'bottom' => 'data-dial-tooltip-position="bottom"',
    default => 'data-dial-tooltip-position="left"',
};

// Get icon component name from config
$iconComponent = config('flowblade.prefix') 
    ? config('flowblade.prefix').'.icon' 
    : 'icon';
@endphp

<div 
    {{ $attributes->merge(['class' => $positionClasses.' group']) }}
    data-dial-init
    {!! $triggerAttr !!}
    {!! $tooltipPosition !!}
    id="{{ $id }}"
>
    <div 
        id="{{ $id }}-menu" 
        class="flex flex-col items-center mb-4 space-y-2 hidden"
        data-dial-menu
    >
        {{ $slot }}
    </div>
    
    <button 
        type="button" 
        data-dial-toggle="{{ $id }}-menu" 
        aria-controls="{{ $id }}-menu" 
        aria-expanded="false"
        class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800"
    >
        <x-dynamic-component 
            :component="$iconComponent" 
            name="heroicons:plus" 
            class="w-5 h-5 transition-transform group-hover:rotate-45" 
        />
        <span class="sr-only">Open actions menu</span>
    </button>
</div>

@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all speed dials
    const speedDials = document.querySelectorAll('[data-dial-init]');
    
    speedDials.forEach(speedDial => {
        const toggle = speedDial.querySelector('[data-dial-toggle]');
        const menu = speedDial.querySelector('[data-dial-menu]');
        const trigger = speedDial.getAttribute('data-dial-trigger') || 'click';
        
        if (!toggle || !menu) return;
        
        const toggleMenu = () => {
            const isHidden = menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
            
            // Rotate icon
            const icon = toggle.querySelector('svg');
            if (icon) {
                icon.style.transform = isHidden ? 'rotate(45deg)' : 'rotate(0deg)';
            }
        };
        
        if (trigger === 'click') {
            toggle.addEventListener('click', toggleMenu);
        } else if (trigger === 'hover') {
            speedDial.addEventListener('mouseenter', () => {
                menu.classList.remove('hidden');
                toggle.setAttribute('aria-expanded', 'true');
                const icon = toggle.querySelector('svg');
                if (icon) icon.style.transform = 'rotate(45deg)';
            });
            
            speedDial.addEventListener('mouseleave', () => {
                menu.classList.add('hidden');
                toggle.setAttribute('aria-expanded', 'false');
                const icon = toggle.querySelector('svg');
                if (icon) icon.style.transform = 'rotate(0deg)';
            });
        }
    });
});
</script>
@endpush
@endonce

