@php
    // Size configurations
    $sizeClasses = [
        'sm' => 'p-2 text-sm',
        'md' => 'p-2.5 text-sm',
        'lg' => 'px-4 py-3 text-base',
    ];
    
    // Variant configurations
    $variantClasses = [
        'default' => 'bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
        'underline' => 'bg-transparent border-0 border-b-2 border-gray-200 text-gray-500 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer',
    ];
    
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
    $variantClass = $variantClasses[$variant] ?? $variantClasses['default'];
    
    // State classes
    $stateClasses = '';
    if ($disabled) {
        $stateClasses .= ' opacity-50 cursor-not-allowed';
    }
    if ($invalid) {
        $variantClass = str_replace(
            ['border-gray-300', 'focus:border-blue-500', 'focus:ring-blue-500'],
            ['border-red-500', 'focus:border-red-500', 'focus:ring-red-500'],
            $variantClass
        );
    }
    
    // Generate unique ID
    $selectId = $attributes->get('id') ?? 'select-' . uniqid();
@endphp

<div {{ $attributes->only('class')->merge(['class' => 'w-full']) }}>
    @if($label)
    <label 
        for="{{ $selectId }}" 
        class="block mb-2 text-sm font-medium {{ $invalid ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }}"
    >
        {{ $label }}
        @if($required)
        <span class="text-red-500">*</span>
        @endif
    </label>
    @endif
    
    @if($searchable)
    {{-- Searchable select with Alpine.js --}}
    <div 
        x-data="{
            open: false,
            search: '',
            selected: {{ $multiple ? '[]' : 'null' }},
            options: [],
            filteredOptions() {
                if (!this.search) return this.options;
                return this.options.filter(opt => 
                    opt.text.toLowerCase().includes(this.search.toLowerCase())
                );
            },
            selectOption(option) {
                if ({{ $multiple ? 'true' : 'false' }}) {
                    const index = this.selected.findIndex(s => s.value === option.value);
                    if (index > -1) {
                        this.selected.splice(index, 1);
                    } else {
                        this.selected.push(option);
                    }
                } else {
                    this.selected = option;
                    this.open = false;
                }
            },
            isSelected(option) {
                if ({{ $multiple ? 'true' : 'false' }}) {
                    return this.selected.some(s => s.value === option.value);
                }
                return this.selected && this.selected.value === option.value;
            },
            init() {
                // Extract options from slot content
                const selectEl = this.$refs.hiddenSelect;
                if (selectEl) {
                    this.options = Array.from(selectEl.options).map(opt => ({
                        value: opt.value,
                        text: opt.text,
                        disabled: opt.disabled
                    }));
                }
            }
        }"
        @click.away="open = false"
        class="relative"
    >
        {{-- Display button --}}
        <button
            type="button"
            @click="open = !open"
            :disabled="{{ $disabled ? 'true' : 'false' }}"
            class="block w-full {{ $sizeClass }} {{ $variantClass }} {{ $stateClasses }} text-left flex items-center justify-between"
        >
            <span x-show="!selected || (Array.isArray(selected) && selected.length === 0)" class="text-gray-500">
                {{ $placeholder }}
            </span>
            <span x-show="selected && !Array.isArray(selected)" x-text="selected ? selected.text : ''"></span>
            <span x-show="Array.isArray(selected) && selected.length > 0" x-text="`${selected.length} selected`"></span>
            
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        
        {{-- Dropdown --}}
        <div 
            x-show="open"
            x-transition
            class="absolute z-10 w-full mt-1 bg-white divide-y divide-gray-100 rounded-lg shadow-lg dark:bg-gray-700"
        >
            {{-- Search input --}}
            <div class="p-3">
                <input
                    type="text"
                    x-model="search"
                    placeholder="Search..."
                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                >
            </div>
            
            {{-- Options list --}}
            <ul class="max-h-60 overflow-y-auto py-2 text-sm text-gray-700 dark:text-gray-200">
                <template x-for="option in filteredOptions()" :key="option.value">
                    <li>
                        <button
                            type="button"
                            @click="selectOption(option)"
                            :disabled="option.disabled"
                            class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center justify-between"
                            :class="{ 'bg-blue-50 dark:bg-blue-900': isSelected(option), 'opacity-50 cursor-not-allowed': option.disabled }"
                        >
                            <span x-text="option.text"></span>
                            <svg x-show="isSelected(option)" class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </li>
                </template>
                <li x-show="filteredOptions().length === 0" class="px-4 py-2 text-gray-500 dark:text-gray-400">
                    No options found
                </li>
            </ul>
        </div>
        
        {{-- Hidden select for form submission --}}
        <select
            x-ref="hiddenSelect"
            id="{{ $selectId }}"
            {{ $attributes->except(['class', 'id']) }}
            @if($multiple) multiple @endif
            @if($disabled) disabled @endif
            @if($required) required @endif
            class="hidden"
        >
            {{ $slot }}
        </select>
        
        {{-- Sync hidden select with Alpine state --}}
        <template x-if="selected">
            <script>
                document.addEventListener('alpine:initialized', () => {
                    const component = Alpine.$data(document.querySelector('[x-data]'));
                    if (component) {
                        component.$watch('selected', (value) => {
                            const select = component.$refs.hiddenSelect;
                            if (select) {
                                if (Array.isArray(value)) {
                                    Array.from(select.options).forEach(opt => {
                                        opt.selected = value.some(v => v.value === opt.value);
                                    });
                                } else if (value) {
                                    select.value = value.value;
                                }
                                select.dispatchEvent(new Event('change', { bubbles: true }));
                            }
                        });
                    }
                });
            </script>
        </template>
    </div>
    @else
    {{-- Standard native select --}}
    <select
        id="{{ $selectId }}"
        {{ $attributes->except(['class', 'id'])->merge([
            'class' => "block w-full {$sizeClass} {$variantClass} {$stateClasses}"
        ]) }}
        @if($multiple) multiple @endif
        @if($disabled) disabled @endif
        @if($required) required @endif
    >
        @if($placeholder && !$multiple)
        <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>
    @endif
    
    @if($helperText && !$invalid)
    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $helperText }}</p>
    @endif
    
    @if($errorText && $invalid)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errorText }}</p>
    @endif
</div>

