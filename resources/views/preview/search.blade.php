@extends('flowblade::preview.layout')

@section('title', 'Search Components - Flowblade Preview')

@section('content')
    <div class="max-w-6xl">
        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                Search Results
            </h1>
            
            {{-- Search Form --}}
            <form action="{{ route('flowblade.preview.search') }}" method="GET" class="flex gap-2 mb-6">
                <input 
                    type="text" 
                    name="q" 
                    placeholder="Search components..." 
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    value="{{ $query }}"
                >
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700">
                    Search
                </button>
            </form>

            @if($query)
                <p class="text-gray-600">
                    @if(count($results) > 0)
                        Found {{ count($results) }} result{{ count($results) !== 1 ? 's' : '' }} for "<strong>{{ $query }}</strong>"
                    @else
                        No results found for "<strong>{{ $query }}</strong>"
                    @endif
                </p>
            @endif
        </div>

        {{-- Results Grid --}}
        @if(count($results) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($results as $result)
                    <a href="{{ route('flowblade.preview.show', $result['name']) }}" class="component-card group">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                                {{ $result['info']['name'] }}
                            </h3>
                            <span class="text-gray-400 group-hover:text-blue-600">→</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            {{ $result['info']['description'] }}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">
                                {{ $categories[$result['info']['category']]['name'] ?? $result['info']['category'] }}
                            </span>
                            <span class="text-2xl">{{ $categories[$result['info']['category']]['icon'] ?? '📦' }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        @elseif($query)
            <div class="text-center py-12">
                <p class="text-gray-600 mb-4">
                    No components found matching your search.
                </p>
                <p class="text-gray-500 text-sm">
                    Try searching with different keywords or <a href="{{ route('flowblade.preview.components') }}" class="text-blue-600 hover:underline">browse all components</a>.
                </p>
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-600">
                    Enter a search query to find components.
                </p>
            </div>
        @endif

        {{-- Browse by Category --}}
        @if(!$query || count($results) === 0)
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    Browse by Category
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($categories as $key => $category)
                        <a href="{{ route('flowblade.preview.category', $key) }}" class="component-card group">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">
                                        {{ $category['name'] }}
                                    </h3>
                                    <p class="text-sm text-gray-600 mt-1">
                                        {{ $category['description'] }}
                                    </p>
                                </div>
                                <span class="text-3xl">{{ $category['icon'] }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection

