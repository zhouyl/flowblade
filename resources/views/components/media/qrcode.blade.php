@php
// Generate QR code if data is provided and simple-qrcode is available
$qrCode = null;
if ($data && class_exists('\SimpleSoftwareIO\QrCode\Facades\QrCode')) {
    try {
        $qrCode = \SimpleSoftwareIO\QrCode\Facades\QrCode::size(384)
            ->errorCorrection($errorCorrection)
            ->format($format)
            ->generate($data);
    } catch (\Exception $e) {
        // Silently fail if QR code generation fails
    }
}
@endphp

<div
    {{ $attributes->merge([
        'class' => $classes()
    ]) }}
>
    <div class="flex items-center justify-center w-full h-full">
        @if($qrCode)
            {{-- Generated QR code from simple-qrcode --}}
            <div class="w-full h-full flex items-center justify-center">
                {!! $qrCode !!}
            </div>
        @elseif($slot->isNotEmpty())
            {{-- Custom QR code content via slot --}}
            <div class="w-full h-full flex items-center justify-center">
                {{ $slot }}
            </div>
        @else
            {{-- Placeholder when no data or slot provided --}}
            <div class="w-full h-full flex items-center justify-center bg-gray-100 dark:bg-gray-700 {{ $roundedClass }}">
                <svg class="w-12 h-12 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h3m0 0h3m-3 0v3m0-3v3m0-3H3m3 0h3m9-3h3m0 0h3m-3 0v3m0-3v3m0-3h-3m3 0h3M3 15h3m0 0h3m-3 0v3m0-3v3m0-3H3m3 0h3m9 0h3m0 0h3m-3 0v3m0-3v3m0-3h-3m3 0h3"/>
                </svg>
            </div>
        @endif
    </div>
    
    @if($label)
        <span class="text-sm text-gray-600 dark:text-gray-400 text-center">{{ $label }}</span>
    @endif
</div>

