@extends('flowblade::preview.layout')

@section('title', 'All Components - Flowblade Preview')

@section('content')
    <div class="max-w-6xl">
        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">
                All Components
            </h1>
            <p class="text-gray-600">
                Browse all {{ count($components) }} Flowblade components
            </p>
        </div>

        {{-- Components Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse($components as $name => $component)
                <a href="{{ route('flowblade.preview.show', $name) }}" class="component-card group">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                            {{ $component['name'] }}
                        </h3>
                        <span class="text-gray-400 group-hover:text-blue-600">→</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">
                        {{ $component['description'] }}
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="inline-block px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">
                            {{ $categories[$component['category']]['name'] ?? $component['category'] }}
                        </span>
                        <span class="text-2xl">{{ $categories[$component['category']]['icon'] ?? '📦' }}</span>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-600">No components found</p>
                </div>
            @endforelse
        </div>

        {{-- Component Count by Category --}}
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Components by Category
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($categories as $key => $category)
                    @php
                        $count = count(array_filter($components, fn($c) => $c['category'] === $key));
                    @endphp
                    <a href="{{ route('flowblade.preview.category', $key) }}" class="component-card group">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                                    {{ $category['name'] }}
                                </h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    {{ $count }} component{{ $count !== 1 ? 's' : '' }}
                                </p>
                            </div>
                            <span class="text-3xl">{{ $category['icon'] }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

