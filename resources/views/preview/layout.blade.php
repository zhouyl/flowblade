<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Flowblade Component Preview')</title>
    
    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Flowbite CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    {{-- Alpine.js CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Flowbite JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: #f9fafb;
            border-right: 1px solid #e5e7eb;
            overflow-y: auto;
            z-index: 40;
        }

        .sidebar.dark {
            background: #111827;
            border-right-color: #374151;
        }

        .main-content {
            margin-left: 280px;
            min-height: 100vh;
        }

        .category-link {
            display: block;
            padding: 0.75rem 1rem;
            color: #6b7280;
            text-decoration: none;
            border-left: 3px solid transparent;
            transition: all 0.2s;
        }

        .category-link:hover {
            background: #f3f4f6;
            color: #1f2937;
        }

        .category-link.active {
            background: #eff6ff;
            border-left-color: #3b82f6;
            color: #1e40af;
            font-weight: 600;
        }

        .sidebar.dark .category-link {
            color: #9ca3af;
        }

        .sidebar.dark .category-link:hover {
            background: #1f2937;
            color: #f3f4f6;
        }

        .sidebar.dark .category-link.active {
            background: #1e3a8a;
            border-left-color: #60a5fa;
            color: #93c5fd;
        }

        .component-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 1.5rem;
            transition: all 0.2s;
        }

        .component-card:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-color: #d1d5db;
        }

        .component-card.dark {
            background: #1f2937;
            border-color: #374151;
            color: #f3f4f6;
        }

        .component-card.dark:hover {
            border-color: #4b5563;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .code-block {
            background: #1f2937;
            color: #f3f4f6;
            border-radius: 0.375rem;
            padding: 1rem;
            font-family: 'Courier New', monospace;
            font-size: 0.875rem;
            overflow-x: auto;
            margin-top: 0.5rem;
        }

        .search-input {
            width: 100%;
            padding: 0.5rem 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            font-size: 0.875rem;
        }

        .search-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .search-input.dark {
            background: #374151;
            border-color: #4b5563;
            color: #f3f4f6;
        }

        .search-input.dark:focus {
            border-color: #60a5fa;
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.1);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                border-right: none;
                border-bottom: 1px solid #e5e7eb;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-white">
    <div class="flex">
        {{-- Sidebar Navigation --}}
        <aside class="sidebar">
            <div class="p-6 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-900">🌊 Flowblade</h1>
                <p class="text-sm text-gray-600 mt-1">Component Preview</p>
            </div>
            
            {{-- Search --}}
            <div class="p-4 border-b border-gray-200">
                <form action="{{ route('flowblade.preview.search') }}" method="GET">
                    <input 
                        type="text" 
                        name="q" 
                        placeholder="Search components..." 
                        class="search-input"
                        value="{{ request('q') }}"
                    >
                </form>
            </div>
            
            {{-- Navigation Links --}}
            <nav class="p-4">
                <a 
                    href="{{ route('flowblade.preview.index') }}" 
                    class="category-link {{ request()->routeIs('flowblade.preview.index') ? 'active' : '' }}"
                >
                    🏠 Home
                </a>
                
                <a 
                    href="{{ route('flowblade.preview.components') }}" 
                    class="category-link {{ request()->routeIs('flowblade.preview.components') ? 'active' : '' }}"
                >
                    📚 All Components
                </a>
                
                <div class="mt-6 mb-4">
                    <h3 class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        Categories
                    </h3>
                </div>
                
                @foreach($categories as $key => $category)
                    <a 
                        href="{{ route('flowblade.preview.category', $key) }}" 
                        class="category-link {{ request()->routeIs('flowblade.preview.category') && request('category') === $key ? 'active' : '' }}"
                    >
                        {{ $category['icon'] }} {{ $category['name'] }}
                    </a>
                @endforeach
            </nav>
        </aside>
        
        {{-- Main Content --}}
        <main class="main-content">
            <div class="p-8">
                @yield('content')
            </div>
        </main>
    </div>
    
    @stack('scripts')
</body>
</html>

