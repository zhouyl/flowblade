# Installation Guide

## Requirements

- PHP >= 8.3
- Laravel >= 11.0
- Tailwind CSS >= 3.0
- Node.js >= 18.0

## Installation Steps

### 1. Install via Composer

```bash
composer require mellivora/flowblade
```

The package will be automatically discovered by Laravel.

### 2. Configure Tailwind CSS

Update your `tailwind.config.js`:

```javascript
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/mellivora/flowblade/resources/views/**/*.blade.php", // Add this line
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

### 3. Include Tailwind in your CSS

In your `resources/css/app.css`:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### 4. Compile Assets

```bash
npm run dev
```

Or for production:

```bash
npm run build
```

### 5. Include Assets in Your Layout

In your main layout file (e.g., `resources/views/layouts/app.blade.php`):

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Alpine.js (optional) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    @yield('content')
    
    {{-- Iconify scripts --}}
    @stack('scripts')
</body>
</html>
```

## Configuration (Optional)

### Publish Configuration File

```bash
php artisan vendor:publish --tag=flowblade-config
```

This creates `config/flowblade.php` where you can customize:

- Component prefix
- Default colors
- Default sizes
- Color mappings
- Size mappings

### Publish Views (Optional)

```bash
php artisan vendor:publish --tag=flowblade-views
```

This copies all component views to `resources/views/vendor/flowblade/`.

## Alpine.js Setup (Optional)

For interactive components, install Alpine.js:

### Via CDN

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### Via NPM

```bash
npm install alpinejs
```

In your `resources/js/app.js`:

```javascript
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
```

## Livewire Setup (Optional)

```bash
composer require livewire/livewire
```

Then use wire: attributes on any component:

```blade
<x-button wire:click="save">Save</x-button>
<x-input wire:model="name" />
```

## Testing Your Installation

Create a test route:

```php
Route::get('/test', function () {
    return view('test');
});
```

Create `resources/views/test.blade.php`:

```blade
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Flowblade Test</h1>
    
    <x-button color="primary">Primary Button</x-button>
    <x-button color="success" left-icon="heroicons:check">Success</x-button>
    
    <x-box p="6" bg="info" rounded="lg" class="text-white mt-4">
        This is a box component!
    </x-box>
</div>
@endsection
```

Visit `/test` in your browser.

## Troubleshooting

### Components Not Rendering

1. Check Tailwind configuration includes vendor path
2. Run `npm run build`
3. Clear cache: `php artisan view:clear` and `php artisan config:clear`

### Styles Not Applying

1. Verify Tailwind CSS is loaded
2. Check content paths in `tailwind.config.js`
3. Rebuild assets: `npm run build`

### Icons Not Showing

1. Ensure `@stack('scripts')` is in your layout
2. Check browser console for errors
3. Verify icon name format: `collection:icon-name`

