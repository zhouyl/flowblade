@extends('flowblade::preview.layout')

@section('title', $categoryInfo['name'] . ' Components - Flowblade Preview')

@section('content')
    <div class="max-w-6xl">
        {{-- Header --}}
        <div class="mb-8">
            <div class="flex items-center gap-4 mb-4">
                <span class="text-5xl">{{ $categoryInfo['icon'] }}</span>
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">
                        {{ $categoryInfo['name'] }} Components
                    </h1>
                    <p class="text-gray-600 mt-2">
                        {{ $categoryInfo['description'] }}
                    </p>
                </div>
            </div>
            <p class="text-gray-600">
                {{ count($components) }} component{{ count($components) !== 1 ? 's' : '' }} in this category
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
                    <p class="text-sm text-gray-600">
                        {{ $component['description'] }}
                    </p>
                </a>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-600">No components in this category</p>
                </div>
            @endforelse
        </div>

        {{-- Related Categories --}}
        @if(count($categories) > 1)
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    Other Categories
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($categories as $key => $cat)
                        @if($key !== $category)
                            <a href="{{ route('flowblade.preview.category', $key) }}" class="component-card group">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                                            {{ $cat['name'] }}
                                        </h3>
                                        <p class="text-sm text-gray-600 mt-1">
                                            {{ $cat['description'] }}
                                        </p>
                                    </div>
                                    <span class="text-3xl">{{ $cat['icon'] }}</span>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection

