@php
    $containerClasses = implode(' ', array_filter([
        'border-2 border-dashed rounded-lg p-6 text-center transition-colors',
        $disabled ? 'opacity-50 cursor-not-allowed border-gray-200 bg-gray-50' : 'border-gray-300 hover:border-gray-400 cursor-pointer',
    ]));
@endphp

<div 
    {{ $attributes->merge(['class' => 'w-full']) }}
    x-data="{
        files: [],
        isDragging: false,
        handleFiles(fileList) {
            const newFiles = Array.from(fileList);
            
            @if($maxFiles)
            if (this.files.length + newFiles.length > {{ $maxFiles }}) {
                alert('Maximum {{ $maxFiles }} files allowed');
                return;
            }
            @endif
            
            @if($maxSize)
            const maxBytes = {{ $this->parseMaxSize($maxSize) }};
            const oversized = newFiles.filter(f => f.size > maxBytes);
            if (oversized.length > 0) {
                alert('Some files exceed the maximum size of {{ $maxSize }}');
                return;
            }
            @endif
            
            @if($multiple)
            this.files = [...this.files, ...newFiles];
            @else
            this.files = newFiles.slice(0, 1);
            @endif
            
            this.$dispatch('files-selected', { files: this.files });
        },
        removeFile(index) {
            this.files.splice(index, 1);
            this.$dispatch('file-removed', { index });
        },
        formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
        }
    }"
>
    <!-- Drop Zone -->
    <div 
        class="{{ $containerClasses }}"
        :class="{ 'border-blue-500 bg-blue-50': isDragging }"
        @click="if (!{{ $disabled ? 'true' : 'false' }}) $refs.fileInput.click()"
        @dragover.prevent="if (!{{ $disabled ? 'true' : 'false' }}) isDragging = true"
        @dragleave.prevent="isDragging = false"
        @drop.prevent="
            isDragging = false;
            if (!{{ $disabled ? 'true' : 'false' }}) handleFiles($event.dataTransfer.files);
        "
    >
        <!-- Upload Icon -->
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
        </svg>
        
        <!-- Text -->
        <p class="mt-2 text-sm text-gray-600">
            {{ $placeholder }}
        </p>
        
        @if($accept)
        <p class="mt-1 text-xs text-gray-500">
            Accepted: {{ $accept }}
        </p>
        @endif
        
        @if($maxSize)
        <p class="mt-1 text-xs text-gray-500">
            Max size: {{ $maxSize }}
        </p>
        @endif
    </div>
    
    <!-- Hidden File Input -->
    <input
        type="file"
        x-ref="fileInput"
        @change="handleFiles($event.target.files)"
        @if($accept) accept="{{ $accept }}" @endif
        @if($multiple) multiple @endif
        @if($disabled) disabled @endif
        @if($required) required @endif
        class="hidden"
    />
    
    <!-- File Preview -->
    @if($showPreview)
    <div x-show="files.length > 0" class="mt-4 space-y-2">
        <template x-for="(file, index) in files" :key="index">
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center space-x-3 flex-1 min-w-0">
                    <!-- File Icon -->
                    <svg class="h-8 w-8 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    
                    <!-- File Info -->
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate" x-text="file.name"></p>
                        <p class="text-xs text-gray-500" x-text="formatFileSize(file.size)"></p>
                    </div>
                </div>
                
                <!-- Remove Button -->
                <button
                    type="button"
                    @click="removeFile(index)"
                    class="ml-3 text-gray-400 hover:text-red-600 transition-colors"
                    aria-label="Remove file"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </template>
    </div>
    @endif
</div>

@php
    // Helper method to parse max size
    if (!function_exists('parseMaxSize')) {
        function parseMaxSize($size) {
            $size = strtoupper($size);
            $units = ['B' => 1, 'KB' => 1024, 'MB' => 1048576, 'GB' => 1073741824];
            
            foreach ($units as $unit => $multiplier) {
                if (str_contains($size, $unit)) {
                    return (int) str_replace($unit, '', $size) * $multiplier;
                }
            }
            
            return (int) $size;
        }
    }
@endphp

