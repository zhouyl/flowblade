<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowblade Component Demo</title>
    
    {{-- Tailwind CSS CDN (for demo purposes) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Alpine.js CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
        }
        .demo-section {
            margin-bottom: 3rem;
            padding: 2rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .demo-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #1f2937;
        }
        .demo-subtitle {
            font-size: 1rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            color: #4b5563;
        }
        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 1rem;
        }
        .code-block {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            padding: 1rem;
            margin-top: 0.5rem;
            font-family: 'Courier New', monospace;
            font-size: 0.875rem;
            overflow-x: auto;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">
                🌊 Flowblade
            </h1>
            <p class="text-xl text-gray-600 mb-2">
                Laravel Blade Component Library
            </p>
            <p class="text-gray-500">
                Inspired by Chakra UI • Built with Tailwind CSS & Flowbite
            </p>
        </div>

        {{-- Button Components --}}
        <div class="demo-section">
            <h2 class="demo-title">🔘 Button Component</h2>
            
            <h3 class="demo-subtitle">Colors</h3>
            <div class="demo-grid">
                <x-button color="primary">Primary</x-button>
                <x-button color="secondary">Secondary</x-button>
                <x-button color="success">Success</x-button>
                <x-button color="warning">Warning</x-button>
                <x-button color="danger">Danger</x-button>
                <x-button color="info">Info</x-button>
            </div>
            <div class="code-block">
                &lt;x-button color="primary"&gt;Primary&lt;/x-button&gt;
            </div>

            <h3 class="demo-subtitle">Sizes</h3>
            <div class="flex items-center gap-4 flex-wrap">
                <x-button size="xs">Extra Small</x-button>
                <x-button size="sm">Small</x-button>
                <x-button size="md">Medium</x-button>
                <x-button size="lg">Large</x-button>
                <x-button size="xl">Extra Large</x-button>
            </div>
            <div class="code-block">
                &lt;x-button size="lg"&gt;Large&lt;/x-button&gt;
            </div>

            <h3 class="demo-subtitle">Variants</h3>
            <div class="demo-grid">
                <x-button variant="solid">Solid</x-button>
                <x-button variant="outline">Outline</x-button>
                <x-button variant="ghost">Ghost</x-button>
                <x-button variant="link">Link</x-button>
                <x-button variant="subtle">Subtle</x-button>
            </div>
            <div class="code-block">
                &lt;x-button variant="outline"&gt;Outline&lt;/x-button&gt;
            </div>

            <h3 class="demo-subtitle">With Icons</h3>
            <div class="demo-grid">
                <x-button left-icon="heroicons:home">Home</x-button>
                <x-button right-icon="heroicons:arrow-right">Next</x-button>
                <x-button left-icon="heroicons:check" color="success">Confirm</x-button>
                <x-button left-icon="heroicons:trash" color="danger" variant="outline">Delete</x-button>
            </div>
            <div class="code-block">
                &lt;x-button left-icon="heroicons:home"&gt;Home&lt;/x-button&gt;
            </div>

            <h3 class="demo-subtitle">States</h3>
            <div class="demo-grid">
                <x-button :loading="true">Loading</x-button>
                <x-button :disabled="true">Disabled</x-button>
                <x-button color="success" :loading="true">Processing</x-button>
            </div>
            <div class="code-block">
                &lt;x-button :loading="true"&gt;Loading&lt;/x-button&gt;
            </div>
        </div>

        {{-- Icon Component --}}
        <div class="demo-section">
            <h2 class="demo-title">🎨 Icon Component</h2>
            
            <h3 class="demo-subtitle">Basic Icons</h3>
            <div class="flex items-center gap-6 flex-wrap">
                <x-icon name="heroicons:home" size="24px" />
                <x-icon name="heroicons:user" size="24px" />
                <x-icon name="heroicons:heart" size="24px" />
                <x-icon name="heroicons:star" size="24px" />
                <x-icon name="heroicons:bell" size="24px" />
                <x-icon name="mdi:account" size="24px" />
                <x-icon name="fa:github" size="24px" />
            </div>
            <div class="code-block">
                &lt;x-icon name="heroicons:home" size="24px" /&gt;
            </div>

            <h3 class="demo-subtitle">Colored Icons</h3>
            <div class="flex items-center gap-6 flex-wrap">
                <x-icon name="heroicons:heart" size="32px" color="danger" />
                <x-icon name="heroicons:check-circle" size="32px" color="success" />
                <x-icon name="heroicons:information-circle" size="32px" color="info" />
                <x-icon name="heroicons:exclamation-triangle" size="32px" color="warning" />
            </div>
            <div class="code-block">
                &lt;x-icon name="heroicons:heart" color="danger" /&gt;
            </div>

            <h3 class="demo-subtitle">Different Sizes</h3>
            <div class="flex items-center gap-6 flex-wrap">
                <x-icon name="heroicons:star" size="16px" />
                <x-icon name="heroicons:star" size="24px" />
                <x-icon name="heroicons:star" size="32px" />
                <x-icon name="heroicons:star" size="48px" />
                <x-icon name="heroicons:star" size="64px" />
            </div>
            <div class="code-block">
                &lt;x-icon name="heroicons:star" size="48px" /&gt;
            </div>
        </div>

        {{-- Box Component --}}
        <div class="demo-section">
            <h2 class="demo-title">📦 Box Component</h2>
            
            <h3 class="demo-subtitle">Basic Box</h3>
            <x-box p="6" bg="primary" rounded="lg" class="text-white mb-4">
                This is a box with primary background, padding, and rounded corners.
            </x-box>
            <div class="code-block">
                &lt;x-box p="6" bg="primary" rounded="lg"&gt;Content&lt;/x-box&gt;
            </div>

            <h3 class="demo-subtitle">Box with Shadow</h3>
            <x-box p="6" shadow="lg" rounded="md" class="mb-4">
                This box has a large shadow effect.
            </x-box>
            <div class="code-block">
                &lt;x-box p="6" shadow="lg" rounded="md"&gt;Content&lt;/x-box&gt;
            </div>

            <h3 class="demo-subtitle">Box with Border</h3>
            <x-box p="6" border="primary" rounded="lg" class="mb-4">
                This box has a primary colored border.
            </x-box>
            <div class="code-block">
                &lt;x-box p="6" border="primary" rounded="lg"&gt;Content&lt;/x-box&gt;
            </div>

            <h3 class="demo-subtitle">Colored Boxes</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <x-box p="4" bg="success" rounded="md" class="text-white">
                    Success Box
                </x-box>
                <x-box p="4" bg="warning" rounded="md" class="text-white">
                    Warning Box
                </x-box>
                <x-box p="4" bg="danger" rounded="md" class="text-white">
                    Danger Box
                </x-box>
            </div>
            <div class="code-block">
                &lt;x-box p="4" bg="success" rounded="md"&gt;Success Box&lt;/x-box&gt;
            </div>
        </div>

        {{-- Livewire Example --}}
        <div class="demo-section">
            <h2 class="demo-title">⚡ Livewire Integration</h2>
            <p class="text-gray-600 mb-4">
                All components support Livewire wire: attributes out of the box.
            </p>
            <div class="code-block">
                &lt;x-button wire:click="save" color="primary"&gt;Save&lt;/x-button&gt;<br>
                &lt;x-input wire:model="name" placeholder="Enter name" /&gt;<br>
                &lt;x-checkbox wire:model="agreed" label="I agree" /&gt;
            </div>
        </div>

        {{-- Alpine.js Example --}}
        <div class="demo-section">
            <h2 class="demo-title">🏔️ Alpine.js Integration</h2>
            <p class="text-gray-600 mb-4">
                Components work seamlessly with Alpine.js for interactivity.
            </p>
            
            <div x-data="{ count: 0 }" class="space-y-4">
                <div class="text-2xl font-bold">Count: <span x-text="count"></span></div>
                <div class="flex gap-2">
                    <x-button @click="count++" color="primary">Increment</x-button>
                    <x-button @click="count--" color="secondary">Decrement</x-button>
                    <x-button @click="count = 0" variant="outline">Reset</x-button>
                </div>
            </div>
            
            <div class="code-block mt-4">
                &lt;div x-data="{ count: 0 }"&gt;<br>
                &nbsp;&nbsp;&lt;x-button @click="count++"&gt;Increment&lt;/x-button&gt;<br>
                &lt;/div&gt;
            </div>
        </div>

        {{-- Footer --}}
        <div class="text-center mt-12 pt-8 border-t border-gray-200">
            <p class="text-gray-600">
                Made with ❤️ by the Flowblade Team
            </p>
            <p class="text-sm text-gray-500 mt-2">
                Inspired by Chakra UI • Built with Tailwind CSS & Flowbite
            </p>
        </div>
    </div>

    @stack('scripts')
</body>
</html>

