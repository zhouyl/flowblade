@extends('flowblade::preview.layout')

@section('title', $info['name'] . ' Component - Flowblade Preview')

@section('content')
    <div class="max-w-4xl">
        {{-- Header --}}
        <div class="mb-8">
            <div class="flex items-center gap-4 mb-4">
                <span class="text-5xl">{{ $categories[$info['category']]['icon'] ?? '📦' }}</span>
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">
                        {{ $info['name'] }} Component
                    </h1>
                    <p class="text-gray-600 mt-2">
                        {{ $info['description'] }}
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full font-medium">
                    {{ $categories[$info['category']]['name'] ?? $info['category'] }}
                </span>
                <a href="{{ route('flowblade.preview.category', $info['category']) }}" class="text-blue-600 hover:underline text-sm">
                    View all in category →
                </a>
            </div>
        </div>

        {{-- Component Preview Section --}}
        <div class="component-card mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Preview
            </h2>
            <div class="p-6 bg-gray-50 rounded-lg border border-gray-200 min-h-[200px] flex items-center justify-center">
                @php
                    $componentName = 'flowblade::' . str_replace('-', '.', $component);
                @endphp
                @if (view()->exists($componentName))
                    <x-dynamic-component :component="$componentName" />
                @else
                    <p class="text-gray-600 text-center">
                        Component preview not available. Please check the component documentation.
                    </p>
                @endif
            </div>
        </div>

        {{-- Usage Section --}}
        <div class="component-card mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Basic Usage
            </h2>
            <p class="text-gray-600 mb-4">
                To use this component in your Blade template:
            </p>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto font-mono text-sm">
                <code>&lt;x-{{ $component }} /&gt;</code>
            </div>
        </div>

        {{-- Properties Section --}}
        <div class="component-card mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Properties
            </h2>
            <p class="text-gray-600 mb-4">
                This component supports the following properties:
            </p>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-3 px-4 font-semibold text-gray-900">Property</th>
                            <th class="text-left py-3 px-4 font-semibold text-gray-900">Type</th>
                            <th class="text-left py-3 px-4 font-semibold text-gray-900">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 px-4 text-gray-700">color</td>
                            <td class="py-3 px-4 text-gray-600">string</td>
                            <td class="py-3 px-4 text-gray-600">Component color (primary, secondary, success, warning, danger, info)</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 px-4 text-gray-700">size</td>
                            <td class="py-3 px-4 text-gray-600">string</td>
                            <td class="py-3 px-4 text-gray-600">Component size (xs, sm, md, lg, xl)</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 px-4 text-gray-700">variant</td>
                            <td class="py-3 px-4 text-gray-600">string</td>
                            <td class="py-3 px-4 text-gray-600">Component variant (solid, outline, ghost, link, subtle)</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">disabled</td>
                            <td class="py-3 px-4 text-gray-600">boolean</td>
                            <td class="py-3 px-4 text-gray-600">Whether the component is disabled</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Examples Section --}}
        <div class="component-card mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Code Examples
            </h2>

            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Basic Example
                    </h3>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto font-mono text-sm">
                        <code>&lt;x-{{ $component }} /&gt;</code>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        With Attributes
                    </h3>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto font-mono text-sm">
                        <code>&lt;x-{{ $component }}<br/>
                        &nbsp;&nbsp;color="primary"<br/>
                        &nbsp;&nbsp;size="lg"<br/>
                        /&gt;</code>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        With Slot Content
                    </h3>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto font-mono text-sm">
                        <code>&lt;x-{{ $component }}&gt;<br/>
                        &nbsp;&nbsp;Your content here<br/>
                        &lt;/x-{{ $component }}&gt;</code>
                    </div>
                </div>
            </div>
        </div>

        {{-- Related Components --}}
        <div class="component-card">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Related Components
            </h2>
            <p class="text-gray-600 mb-4">
                You might also be interested in these components:
            </p>
            <div class="flex gap-2 flex-wrap">
                <a href="{{ route('flowblade.preview.category', $info['category']) }}" class="inline-block px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                    View all {{ $categories[$info['category']]['name'] ?? $info['category'] }} components
                </a>
                <a href="{{ route('flowblade.preview.components') }}" class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-md hover:bg-blue-200">
                    Browse all components
                </a>
            </div>
        </div>
    </div>
@endsection

