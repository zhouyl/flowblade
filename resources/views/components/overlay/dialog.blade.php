@php
$dialogId = $attributes->get('id') ?? 'dialog-' . uniqid();

$sizeConfig = [
    'sm' => 'max-w-sm',
    'md' => 'max-w-md',
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
];

$maxWidth = $sizeConfig[$size] ?? $sizeConfig['md'];

$iconConfig = $this->getIconConfig();
$buttonColor = $this->getButtonColor();
@endphp

<div
    id="{{ $dialogId }}"
    tabindex="-1"
    aria-hidden="true"
    data-modal-backdrop="static"
    {{ $attributes->except(['id'])->merge([
        'class' => 'hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full'
    ]) }}
>
    <div class="relative p-4 w-full {{ $maxWidth }} max-h-full">
        {{-- Dialog content --}}
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            {{-- Close button --}}
            @if($closable)
            <button 
                type="button" 
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                data-modal-hide="{{ $dialogId }}"
            >
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close dialog</span>
            </button>
            @endif

            {{-- Dialog body --}}
            <div class="p-4 md:p-5 text-center">
                {{-- Icon --}}
                <div class="mx-auto mb-4 {{ $iconConfig['bgColor'] }} rounded-full w-16 h-16 flex items-center justify-center">
                    <div class="{{ $iconConfig['color'] }}">
                        {!! $iconConfig['icon'] !!}
                    </div>
                </div>

                {{-- Title --}}
                @if($title)
                <h3 class="mb-5 text-lg font-normal text-gray-900 dark:text-white">
                    {{ $title }}
                </h3>
                @endif

                {{-- Message --}}
                @if($message)
                <p class="mb-5 text-base text-gray-500 dark:text-gray-400">
                    {{ $message }}
                </p>
                @endif

                {{-- Custom content slot --}}
                @if($slot->isNotEmpty())
                <div class="mb-5">
                    {{ $slot }}
                </div>
                @endif

                {{-- Buttons --}}
                <div class="flex justify-center gap-4">
                    @if($type === 'confirm')
                        {{-- Confirm type: show both confirm and cancel buttons --}}
                        <button 
                            data-modal-hide="{{ $dialogId }}" 
                            type="button" 
                            class="py-2.5 px-5 text-sm font-medium focus:outline-none rounded-lg border focus:z-10 focus:ring-4 {{ $buttonColor }}"
                        >
                            {{ $confirmText }}
                        </button>
                        <button 
                            data-modal-hide="{{ $dialogId }}" 
                            type="button" 
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        >
                            {{ $cancelText }}
                        </button>
                    @else
                        {{-- Other types: show only confirm button --}}
                        <button 
                            data-modal-hide="{{ $dialogId }}" 
                            type="button" 
                            class="py-2.5 px-5 text-sm font-medium focus:outline-none rounded-lg border focus:z-10 focus:ring-4 {{ $buttonColor }}"
                        >
                            {{ $confirmText }}
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@once
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
@endpush
@endonce

