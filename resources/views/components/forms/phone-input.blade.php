@php
// Size classes
$sizeClasses = match($size) {
    'sm' => 'text-sm',
    'lg' => 'text-lg',
    default => 'text-base',
};

$inputSizeClasses = match($size) {
    'sm' => 'py-2 px-3 text-sm',
    'lg' => 'py-3 px-4 text-lg',
    default => 'py-2.5 px-4 text-base',
};

// State classes
$stateClasses = $invalid
    ? 'border-red-500 focus:ring-red-500 focus:border-red-500 dark:border-red-500'
    : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500';

// Get countries
$countries = $this->getCountries();
$defaultCountryData = $countries[$defaultCountry] ?? $countries['US'];
@endphp

<div {{ $attributes->merge(['class' => 'relative']) }} x-data="{
    open: false,
    selectedCountry: '{{ $defaultCountry }}',
    selectedCode: '{{ $defaultCountryData['code'] }}',
    selectedFlag: '{{ $defaultCountryData['flag'] }}',
    search: '',
    countries: {{ json_encode($countries) }},
    get filteredCountries() {
        if (!this.search) return this.countries;
        const searchLower = this.search.toLowerCase();
        return Object.fromEntries(
            Object.entries(this.countries).filter(([code, data]) => 
                data.name.toLowerCase().includes(searchLower) || 
                data.code.includes(searchLower) ||
                code.toLowerCase().includes(searchLower)
            )
        );
    },
    selectCountry(code, dialCode, flag) {
        this.selectedCountry = code;
        this.selectedCode = dialCode;
        this.selectedFlag = flag;
        this.open = false;
        this.search = '';
    }
}">
    <div class="flex">
        {{-- Country selector button --}}
        <button
            type="button"
            @click="open = !open"
            @click.away="open = false"
            @if($disabled) disabled @endif
            class="flex-shrink-0 z-10 inline-flex items-center {{ $inputSizeClasses }} font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600 {{ $disabled ? 'opacity-50 cursor-not-allowed' : '' }}"
        >
            <span x-text="selectedFlag" class="mr-2"></span>
            <span x-text="selectedCode" class="{{ $sizeClasses }}"></span>
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>

        {{-- Dropdown --}}
        <div
            x-show="open"
            x-transition
            class="absolute top-full left-0 z-20 mt-1 bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700"
            style="display: none;"
        >
            {{-- Search input --}}
            <div class="p-2">
                <input
                    type="text"
                    x-model="search"
                    placeholder="Search country..."
                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>

            {{-- Country list --}}
            <ul class="max-h-48 overflow-y-auto text-sm text-gray-700 dark:text-gray-200">
                <template x-for="[code, data] in Object.entries(filteredCountries)" :key="code">
                    <li>
                        <button
                            type="button"
                            @click="selectCountry(code, data.code, data.flag)"
                            class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                            :class="{ 'bg-gray-100 dark:bg-gray-600': selectedCountry === code }"
                        >
                            <span class="inline-flex items-center">
                                <span x-text="data.flag" class="mr-2"></span>
                                <span x-text="data.name" class="mr-2"></span>
                                <span x-text="data.code" class="text-gray-500 dark:text-gray-400"></span>
                            </span>
                        </button>
                    </li>
                </template>
            </ul>
        </div>

        {{-- Phone number input --}}
        <div class="relative w-full">
            <input
                type="tel"
                id="{{ $id }}"
                class="block {{ $inputSizeClasses }} w-full z-20 text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border {{ $stateClasses }} dark:bg-gray-700 dark:text-white {{ $disabled ? 'opacity-50 cursor-not-allowed' : '' }}"
                placeholder="{{ $placeholder ?: 'Phone number' }}"
                @if($disabled) disabled @endif
            />
        </div>
    </div>

    {{-- Hidden input for country code --}}
    <input type="hidden" x-model="selectedCountry" name="{{ $attributes->get('name') }}_country" />
</div>

@once
@push('scripts')
<script>
// Phone number formatting (basic implementation)
document.addEventListener('DOMContentLoaded', function() {
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            // Remove all non-digit characters
            let value = e.target.value.replace(/\D/g, '');
            
            // Basic formatting (can be enhanced based on country)
            if (value.length > 0) {
                // Format as: (XXX) XXX-XXXX for US/CA style
                if (value.length <= 3) {
                    value = value;
                } else if (value.length <= 6) {
                    value = '(' + value.slice(0, 3) + ') ' + value.slice(3);
                } else {
                    value = '(' + value.slice(0, 3) + ') ' + value.slice(3, 6) + '-' + value.slice(6, 10);
                }
            }
            
            e.target.value = value;
        });
    });
});
</script>
@endpush
@endonce

