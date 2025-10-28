@php
// Width classes
$widthClasses = match($width) {
    'sm' => 'max-w-screen-sm',
    'md' => 'max-w-screen-md',
    'lg' => 'max-w-screen-lg',
    'xl' => 'max-w-screen-xl',
    'full' => 'w-full',
    default => 'w-full',
};

// Column classes
$columnClasses = match($columns) {
    1 => 'grid-cols-1',
    2 => 'grid-cols-1 md:grid-cols-2',
    3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
    4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
    default => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
};

// Trigger attribute
$triggerAttr = $trigger === 'hover' ? 'data-dropdown-trigger="hover"' : 'data-dropdown-trigger="click"';
@endphp

<div {{ $attributes->merge(['class' => 'relative']) }} id="{{ $id }}">
    <button 
        type="button"
        id="{{ $id }}-button"
        data-dropdown-toggle="{{ $id }}-dropdown"
        {!! $triggerAttr !!}
        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
    >
        {{ $trigger ?? 'Menu' }}
        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
    </button>

    <div 
        id="{{ $id }}-dropdown"
        class="absolute z-10 hidden bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 {{ $widthClasses }}"
    >
        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
            <div class="grid {{ $columnClasses }} gap-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all mega menus
    const megaMenus = document.querySelectorAll('[data-dropdown-toggle]');
    
    megaMenus.forEach(button => {
        const dropdownId = button.getAttribute('data-dropdown-toggle');
        const dropdown = document.getElementById(dropdownId);
        const trigger = button.getAttribute('data-dropdown-trigger') || 'click';
        
        if (!dropdown) return;
        
        const toggleDropdown = () => {
            dropdown.classList.toggle('hidden');
        };
        
        const showDropdown = () => {
            dropdown.classList.remove('hidden');
        };
        
        const hideDropdown = () => {
            dropdown.classList.add('hidden');
        };
        
        if (trigger === 'click') {
            button.addEventListener('click', toggleDropdown);
            
            // Close on click outside
            document.addEventListener('click', (e) => {
                if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                    hideDropdown();
                }
            });
        } else if (trigger === 'hover') {
            const container = button.closest('[id]');
            
            container.addEventListener('mouseenter', showDropdown);
            container.addEventListener('mouseleave', hideDropdown);
        }
    });
});
</script>
@endpush
@endonce

