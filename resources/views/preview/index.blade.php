@extends('flowblade::preview.layout')

@section('title', 'Flowblade Component Preview')

@section('content')
    <div class="max-w-6xl">
        {{-- Header --}}
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                Welcome to Flowblade
            </h1>
            <p class="text-xl text-gray-600 mb-4">
                A comprehensive Laravel Blade component library built with Tailwind CSS and Flowbite.
            </p>
            <p class="text-gray-600">
                Explore our 98+ components organized into 9 categories. Each component is fully documented with examples and code snippets.
            </p>
        </div>

        {{-- Quick Links --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <a href="{{ route('flowblade.preview.components') }}" class="component-card group">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                            📚 Browse All Components
                        </h3>
                        <p class="text-gray-600 mt-2">
                            View all 98+ components in one place with descriptions and links.
                        </p>
                    </div>
                    <span class="text-2xl">→</span>
                </div>
            </a>

            <div class="component-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    🔍 Quick Search
                </h3>
                <form action="{{ route('flowblade.preview.search') }}" method="GET" class="flex gap-2">
                    <input 
                        type="text" 
                        name="q" 
                        placeholder="Search components..." 
                        class="flex-1 px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:border-blue-500"
                    >
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                        Search
                    </button>
                </form>
            </div>
        </div>

        {{-- Categories Grid --}}
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Browse by Category
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($categories as $key => $category)
                    <a href="{{ route('flowblade.preview.category', $key) }}" class="component-card group">
                        <div class="text-3xl mb-3">{{ $category['icon'] }}</div>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                            {{ $category['name'] }}
                        </h3>
                        <p class="text-sm text-gray-600 mt-2">
                            {{ $category['description'] }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Features --}}
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Key Features
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="component-card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        ✨ Style Props Support
                    </h3>
                    <p class="text-gray-600">
                        All components support comprehensive style props for colors, sizes, spacing, and more.
                    </p>
                </div>

                <div class="component-card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        🎨 Flowbite Integration
                    </h3>
                    <p class="text-gray-600">
                        Built with Flowbite design system for consistent, professional styling.
                    </p>
                </div>

                <div class="component-card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        ⚡ Livewire Support
                    </h3>
                    <p class="text-gray-600">
                        Full support for Livewire reactive components with wire: attributes.
                    </p>
                </div>

                <div class="component-card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        🏔️ Alpine.js Ready
                    </h3>
                    <p class="text-gray-600">
                        Components work seamlessly with Alpine.js for lightweight interactivity.
                    </p>
                </div>

                <div class="component-card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        📱 Responsive Design
                    </h3>
                    <p class="text-gray-600">
                        All components are fully responsive and mobile-friendly out of the box.
                    </p>
                </div>

                <div class="component-card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        📚 Well Documented
                    </h3>
                    <p class="text-gray-600">
                        Comprehensive documentation with examples for every component.
                    </p>
                </div>
            </div>
        </div>

        {{-- Getting Started --}}
        <div class="component-card bg-blue-50 border-blue-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                🚀 Getting Started
            </h2>
            <p class="text-gray-700 mb-4">
                To use Flowblade components in your Laravel application:
            </p>
            <div class="code-block">
composer require mellivora/flowblade
            </div>
            <p class="text-gray-700 mt-4">
                Then include the component preview routes in your <code class="bg-gray-100 px-2 py-1 rounded">routes/web.php</code>:
            </p>
            <div class="code-block">
require base_path('vendor/mellivora/flowblade/routes/preview.php');
            </div>
            <p class="text-gray-700 mt-4">
                Visit <code class="bg-gray-100 px-2 py-1 rounded">/preview</code> to see all components!
            </p>
        </div>
    </div>
@endsection

