# QRCode

Display QR codes with consistent styling and sizing. QRCode provides a flexible way to display QR codes. Works with simple-qrcode package or custom QR code generation.

## Installation

The QRCode component works best with the `simple-qrcode` package:

```bash
composer require simplesoftwareio/simple-qrcode
```

However, you can also use it with any QR code generation method or even static images.

## Basic Usage

### With simple-qrcode Package

```blade
{{-- Simple URL --}}
<x-qrcode data="https://example.com" />

{{-- With label --}}
<x-qrcode
    data="https://example.com"
    label="Scan to visit our website"
/>
```

### With Custom Content (Slot)

```blade
<x-qrcode>
    <img src="/path/to/qrcode.png" alt="QR Code" class="w-full h-full object-contain">
</x-qrcode>
```

### With JavaScript Library

```blade
<x-qrcode id="my-qrcode">
    <div id="qr-container"></div>
</x-qrcode>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
<script>
    new QRCode(document.getElementById("qr-container"), {
        text: "https://example.com",
        width: 256,
        height: 256
    });
</script>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `data` | `string\|null` | `null` | Data to encode (requires simple-qrcode) |
| `size` | `string\|null` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl`, `2xl` |

### Style Props

QRCode supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).
| `format` | `string\|null` | `'svg'` | Format: `svg`, `png` (for simple-qrcode) |
| `errorCorrection` | `string\|null` | `'M'` | Error correction: `L`, `M`, `Q`, `H` |
| `label` | `string\|null` | `null` | Optional label below QR code |
| `rounded` | `bool` | `true` | Whether to use rounded corners |
| `border` | `bool` | `true` | Whether to show border |

## Sizes

```blade
<x-qrcode data="https://example.com" size="xs" />
<x-qrcode data="https://example.com" size="sm" />
<x-qrcode data="https://example.com" size="md" />
<x-qrcode data="https://example.com" size="lg" />
<x-qrcode data="https://example.com" size="xl" />
<x-qrcode data="https://example.com" size="2xl" />
```

## Error Correction Levels

Higher error correction allows the QR code to be read even if partially damaged:

```blade
{{-- Low (7% recovery) --}}
<x-qrcode data="https://example.com" errorCorrection="L" />

{{-- Medium (15% recovery) - Default --}}
<x-qrcode data="https://example.com" errorCorrection="M" />

{{-- Quartile (25% recovery) --}}
<x-qrcode data="https://example.com" errorCorrection="Q" />

{{-- High (30% recovery) --}}
<x-qrcode data="https://example.com" errorCorrection="H" />
```

## Format

```blade
{{-- SVG format (default, scalable) --}}
<x-qrcode data="https://example.com" format="svg" />

{{-- PNG format (raster image) --}}
<x-qrcode data="https://example.com" format="png" />
```

## With Label

```blade
<x-qrcode 
    data="https://example.com" 
    label="Scan to visit" 
/>

<x-qrcode 
    data="https://example.com" 
    label="Download our app" 
    size="lg"
/>
```

## Without Border

```blade
<x-qrcode data="https://example.com" :border="false" />
```

## Without Rounded Corners

```blade
<x-qrcode data="https://example.com" :rounded="false" />
```

## Common Patterns

### Website URL

```blade
<x-qrcode 
    data="https://example.com" 
    label="Visit our website"
    size="lg"
/>
```

### Contact Information (vCard)

```blade
@php
$vcard = "BEGIN:VCARD\n";
$vcard .= "VERSION:3.0\n";
$vcard .= "FN:John Doe\n";
$vcard .= "TEL:+1234567890\n";
$vcard .= "EMAIL:john@example.com\n";
$vcard .= "END:VCARD";
@endphp

<x-qrcode 
    :data="$vcard" 
    label="Save contact"
    errorCorrection="H"
/>
```

### WiFi Connection

```blade
@php
$wifi = "WIFI:T:WPA;S:NetworkName;P:Password123;;";
@endphp

<x-qrcode 
    :data="$wifi" 
    label="Connect to WiFi"
    size="lg"
/>
```

### Email

```blade
<x-qrcode 
    data="mailto:contact@example.com?subject=Hello&body=Message" 
    label="Send us an email"
/>
```

### Phone Number

```blade
<x-qrcode 
    data="tel:+1234567890" 
    label="Call us"
/>
```

### SMS

```blade
<x-qrcode 
    data="sms:+1234567890?body=Hello" 
    label="Send SMS"
/>
```

### App Download

```blade
<div class="flex gap-4">
    <x-qrcode 
        data="https://apps.apple.com/app/your-app" 
        label="Download on App Store"
        size="lg"
    />
    <x-qrcode 
        data="https://play.google.com/store/apps/details?id=your.app" 
        label="Get it on Google Play"
        size="lg"
    />
</div>
```

### Event Ticket

```blade
<x-card class="max-w-sm">
    <x-card-body class="text-center">
        <x-heading size="lg" class="mb-2">Concert Ticket</x-heading>
        <x-text class="mb-4">John Doe</x-text>
        
        <x-qrcode 
            data="TICKET-{{ $ticketId }}" 
            size="lg"
            errorCorrection="H"
            class="mx-auto mb-4"
        />
        
        <x-text size="sm" class="text-gray-500">
            Ticket ID: {{ $ticketId }}
        </x-text>
    </x-card-body>
</x-card>
```

### Payment QR Code

```blade
<x-qrcode 
    data="bitcoin:1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa?amount=0.001" 
    label="Bitcoin Payment"
    size="xl"
    errorCorrection="H"
/>
```

### Product Information

```blade
<x-qrcode 
    data="https://example.com/products/{{ $product->id }}" 
    label="Product Details"
/>
```

### Location (Google Maps)

```blade
<x-qrcode 
    data="https://maps.google.com/?q=40.7128,-74.0060" 
    label="View on map"
/>
```

## Advanced Usage with simple-qrcode

### Custom Styling

```blade
@php
use SimpleSoftwareIO\QrCode\Facades\QrCode;

$qrCode = QrCode::size(300)
    ->style('round')
    ->eye('circle')
    ->gradient(0, 0, 255, 255, 0, 0, 'diagonal')
    ->generate('https://example.com');
@endphp

<x-qrcode size="lg">
    {!! $qrCode !!}
</x-qrcode>
```

### With Logo

```blade
@php
use SimpleSoftwareIO\QrCode\Facades\QrCode;

$qrCode = QrCode::size(300)
    ->format('png')
    ->merge('/path/to/logo.png', 0.3, true)
    ->errorCorrection('H')
    ->generate('https://example.com');
@endphp

<x-qrcode size="lg">
    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
</x-qrcode>
```

### With Color

```blade
@php
use SimpleSoftwareIO\QrCode\Facades\QrCode;

$qrCode = QrCode::size(300)
    ->color(40, 40, 40)
    ->backgroundColor(255, 255, 255)
    ->generate('https://example.com');
@endphp

<x-qrcode size="lg">
    {!! $qrCode !!}
</x-qrcode>
```

## Livewire Integration

```blade
<div>
    <x-input 
        wire:model.live="url" 
        placeholder="Enter URL"
        class="mb-4"
    />
    
    @if($url)
        <x-qrcode 
            :data="$url" 
            label="Scan this QR code"
            size="lg"
        />
    @endif
</div>
```

## Accessibility

The QRCode component:
- Provides a visual container with proper contrast
- Supports labels for context
- Works with screen readers when label is provided
- Maintains aspect ratio for proper scanning
- Uses semantic HTML structure

## Notes

- Requires `simplesoftwareio/simple-qrcode` package for automatic QR code generation
- Falls back to slot content if package is not installed
- SVG format is recommended for scalability
- Higher error correction levels create denser QR codes
- Test QR codes with multiple scanning apps
- Consider size and scanning distance when choosing size
- Use high error correction (H) when adding logos
- QR codes work best with high contrast (black on white)
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported for the container

## Browser Support

- All modern browsers
- No JavaScript required (unless using JS QR code libraries)
- Responsive by default
- Print-friendly

