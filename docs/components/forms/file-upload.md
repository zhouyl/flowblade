# FileUpload

File upload component with drag and drop support. Perfect for document uploads, image uploads, and file management.

## Basic Usage

```blade
<x-file-upload />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `accept` | `string` | `null` | Accepted file types (e.g., "image/*", ".pdf") |
| `multiple` | `boolean` | `false` | Allow multiple files |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `maxSize` | `string` | `null` | Max file size (e.g., "5MB", "10MB") |
| `maxFiles` | `int` | `null` | Max number of files |
| `showPreview` | `boolean` | `true` | Show file preview |
| `placeholder` | `string` | `'Click to upload or drag and drop'` | Placeholder text |

## Events

| Event | Payload | Description |
|-------|---------|-------------|
| `files-selected` | `{ files }` | Fired when files are selected |
| `file-removed` | `{ index }` | Fired when a file is removed |

## Single File Upload

```blade
<x-file-upload placeholder="Upload your resume" />
```

## Multiple Files

```blade
<x-file-upload multiple placeholder="Upload multiple images" />
```

## With File Type Restriction

```blade
<!-- Images only -->
<x-file-upload accept="image/*" />

<!-- PDF only -->
<x-file-upload accept=".pdf" />

<!-- Multiple types -->
<x-file-upload accept=".pdf,.doc,.docx" />
```

## With Size Limit

```blade
<x-file-upload max-size="5MB" />

<x-file-upload max-size="10MB" multiple />
```

## With File Count Limit

```blade
<x-file-upload multiple :max-files="3" />
```

## Disabled State

```blade
<x-file-upload disabled />
```

## Without Preview

```blade
<x-file-upload :show-preview="false" />
```

## Common Patterns

### Avatar Upload

```blade
<x-field label="Profile Picture">
    <x-file-upload 
        accept="image/*"
        max-size="2MB"
        placeholder="Upload your avatar"
    />
</x-field>
```

### Document Upload

```blade
<x-field label="Upload Documents">
    <x-file-upload 
        accept=".pdf,.doc,.docx"
        multiple
        :max-files="5"
        max-size="10MB"
        placeholder="Upload up to 5 documents"
    />
</x-field>
```

### Image Gallery

```blade
<x-field label="Gallery Images">
    <x-file-upload 
        accept="image/*"
        multiple
        :max-files="10"
        max-size="5MB"
        placeholder="Upload up to 10 images"
    />
</x-field>
```

### Resume Upload

```blade
<x-field label="Resume" required>
    <x-file-upload 
        accept=".pdf,.doc,.docx"
        max-size="5MB"
        placeholder="Upload your resume (PDF or Word)"
        required
    />
</x-field>
```

## Livewire Integration

```blade
<x-file-upload 
    wire:model="files"
    multiple
    accept="image/*"
/>

@if($files)
    <div class="mt-4">
        <p>{{ count($files) }} file(s) selected</p>
    </div>
@endif
```

### Livewire Component Example

```php
class FileUploadDemo extends Component
{
    public $files = [];
    
    public function save()
    {
        $this->validate([
            'files.*' => 'required|file|max:5120', // 5MB
        ]);
        
        foreach ($this->files as $file) {
            $file->store('uploads');
        }
        
        session()->flash('message', 'Files uploaded successfully!');
    }
}
```

```blade
<form wire:submit.prevent="save">
    <x-field label="Upload Files">
        <x-file-upload 
            wire:model="files"
            multiple
            max-size="5MB"
        />
    </x-field>
    
    @error('files.*')
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
    
    <x-button type="submit" class="mt-4">Upload</x-button>
</form>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    uploadedFiles: [],
    async handleUpload(files) {
        const formData = new FormData();
        files.forEach(file => formData.append('files[]', file));
        
        try {
            const response = await fetch('/api/upload', {
                method: 'POST',
                body: formData
            });
            
            const data = await response.json();
            this.uploadedFiles = data.files;
        } catch (error) {
            alert('Upload failed');
        }
    }
}">
    <x-file-upload 
        multiple
        @files-selected="handleUpload($event.detail.files)"
    />
    
    <div x-show="uploadedFiles.length > 0" class="mt-4">
        <p>Uploaded <span x-text="uploadedFiles.length"></span> file(s)</p>
    </div>
</div>
```

### With Progress Bar

```blade
<div x-data="{ 
    progress: 0,
    uploading: false,
    async uploadFiles(files) {
        this.uploading = true;
        this.progress = 0;
        
        const formData = new FormData();
        files.forEach(file => formData.append('files[]', file));
        
        const xhr = new XMLHttpRequest();
        
        xhr.upload.addEventListener('progress', (e) => {
            if (e.lengthComputable) {
                this.progress = Math.round((e.loaded / e.total) * 100);
            }
        });
        
        xhr.addEventListener('load', () => {
            this.uploading = false;
            if (xhr.status === 200) {
                alert('Upload complete!');
            }
        });
        
        xhr.open('POST', '/api/upload');
        xhr.send(formData);
    }
}">
    <x-file-upload 
        multiple
        @files-selected="uploadFiles($event.detail.files)"
    />
    
    <div x-show="uploading" class="mt-4">
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div 
                class="bg-blue-600 h-2 rounded-full transition-all"
                :style="`width: ${progress}%`"
            ></div>
        </div>
        <p class="text-sm text-gray-600 mt-1" x-text="`${progress}% uploaded`"></p>
    </div>
</div>
```

### With Image Preview

```blade
<div x-data="{ 
    previews: [],
    handleFiles(files) {
        this.previews = [];
        files.forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.previews.push(e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    }
}">
    <x-file-upload 
        accept="image/*"
        multiple
        @files-selected="handleFiles($event.detail.files)"
    />
    
    <div x-show="previews.length > 0" class="mt-4 grid grid-cols-3 gap-4">
        <template x-for="(preview, index) in previews" :key="index">
            <img :src="preview" class="w-full h-32 object-cover rounded-lg" />
        </template>
    </div>
</div>
```

## Validation

```blade
<form>
    <x-field 
        label="Upload Files"
        :invalid="$errors->has('files')"
        :error-text="$errors->first('files')"
    >
        <x-file-upload 
            multiple
            max-size="5MB"
            :max-files="3"
        />
    </x-field>
    
    <x-button type="submit" class="mt-4">Submit</x-button>
</form>
```

## Accessibility

The FileUpload component:
- Uses semantic HTML with proper file input
- Supports keyboard navigation (Tab, Enter, Space)
- Provides clear visual feedback for drag and drop
- Shows file information (name, size)
- Supports screen readers
- Maintains focus management
- Announces file selection to screen readers
- Supports proper ARIA attributes for file upload

