@php
    // Size configurations
    $sizeConfig = [
        'xs' => [
            'input' => 'text-xs py-1 px-2',
            'tag' => 'text-xs px-2 py-0.5',
        ],
        'sm' => [
            'input' => 'text-sm py-1.5 px-2.5',
            'tag' => 'text-xs px-2.5 py-0.5',
        ],
        'md' => [
            'input' => 'text-sm py-2 px-3',
            'tag' => 'text-sm px-3 py-1',
        ],
        'lg' => [
            'input' => 'text-base py-2.5 px-4',
            'tag' => 'text-sm px-3 py-1',
        ],
    ];
    
    $inputSize = $sizeConfig[$size]['input'] ?? $sizeConfig['md']['input'];
    $tagSize = $sizeConfig[$size]['tag'] ?? $sizeConfig['md']['tag'];
    
    // Color configurations for tags
    $colorConfig = [
        'primary' => 'bg-blue-100 text-blue-800 hover:bg-blue-200',
        'secondary' => 'bg-gray-100 text-gray-800 hover:bg-gray-200',
        'success' => 'bg-green-100 text-green-800 hover:bg-green-200',
        'warning' => 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200',
        'danger' => 'bg-red-100 text-red-800 hover:bg-red-200',
        'info' => 'bg-cyan-100 text-cyan-800 hover:bg-cyan-200',
        'gray' => 'bg-gray-100 text-gray-800 hover:bg-gray-200',
    ];
    
    $tagColor = $colorConfig[$color] ?? $colorConfig['primary'];
    
    // Convert tags array to JSON for Alpine.js
    $initialTags = json_encode($tags);
@endphp

<div 
    x-data="{
        tags: {{ $initialTags }},
        inputValue: '',
        maxTags: {{ $maxTags ?? 'null' }},
        allowDuplicates: {{ $allowDuplicates ? 'true' : 'false' }},
        separator: {{ $separator ? "'" . $separator . "'" : 'null' }},
        
        addTag() {
            const value = this.inputValue.trim();
            
            if (!value) return;
            
            // Check if max tags reached
            if (this.maxTags && this.tags.length >= this.maxTags) {
                return;
            }
            
            // Check for duplicates
            if (!this.allowDuplicates && this.tags.includes(value)) {
                this.inputValue = '';
                return;
            }
            
            this.tags.push(value);
            this.inputValue = '';
            this.updateHiddenInput();
        },
        
        removeTag(index) {
            this.tags.splice(index, 1);
            this.updateHiddenInput();
        },
        
        handleKeydown(event) {
            // Enter or comma (if separator is comma)
            if (event.key === 'Enter' || (this.separator && event.key === this.separator)) {
                event.preventDefault();
                this.addTag();
            }
            // Backspace on empty input removes last tag
            else if (event.key === 'Backspace' && !this.inputValue) {
                event.preventDefault();
                if (this.tags.length > 0) {
                    this.removeTag(this.tags.length - 1);
                }
            }
        },
        
        handleInput(event) {
            // Auto-split on separator
            if (this.separator && this.inputValue.includes(this.separator)) {
                const parts = this.inputValue.split(this.separator);
                
                // Add all parts except the last one
                for (let i = 0; i < parts.length - 1; i++) {
                    const value = parts[i].trim();
                    if (value) {
                        if (this.maxTags && this.tags.length >= this.maxTags) break;
                        if (!this.allowDuplicates && this.tags.includes(value)) continue;
                        this.tags.push(value);
                    }
                }
                
                // Keep the last part in input
                this.inputValue = parts[parts.length - 1];
                this.updateHiddenInput();
            }
        },
        
        updateHiddenInput() {
            if (this.$refs.hiddenInput) {
                this.$refs.hiddenInput.value = JSON.stringify(this.tags);
            }
        }
    }"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    <div class="flex flex-wrap gap-2 p-2 border border-gray-300 rounded-lg bg-white focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 {{ $disabled ? 'opacity-50 cursor-not-allowed bg-gray-50' : '' }}">
        {{-- Display tags --}}
        <template x-for="(tag, index) in tags" :key="index">
            <span class="inline-flex items-center gap-1 {{ $tagSize }} {{ $tagColor }} rounded-md font-medium">
                <span x-text="tag"></span>
                @if(!$readonly && !$disabled)
                <button
                    type="button"
                    @click="removeTag(index)"
                    class="inline-flex items-center justify-center hover:bg-black/10 rounded-full p-0.5 transition-colors"
                    :aria-label="'Remove ' + tag"
                >
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                @endif
            </span>
        </template>
        
        {{-- Input field --}}
        @if(!$readonly && !$disabled)
        <input
            type="text"
            x-model="inputValue"
            @keydown="handleKeydown($event)"
            @input="handleInput($event)"
            placeholder="{{ $placeholder }}"
            class="flex-1 min-w-[120px] {{ $inputSize }} border-0 focus:ring-0 focus:outline-none bg-transparent"
            :disabled="{{ $disabled ? 'true' : 'false' }}"
        />
        @endif
    </div>
    
    {{-- Hidden input to store tags as JSON --}}
    <input 
        type="hidden" 
        name="{{ $name }}" 
        x-ref="hiddenInput"
        :value="JSON.stringify(tags)"
    />
    
    @if($slot->isNotEmpty())
        <div class="mt-2 text-sm text-gray-600">
            {{ $slot }}
        </div>
    @endif
</div>

