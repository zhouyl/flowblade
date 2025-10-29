@php
    $attributes = $attributes->merge([
        'method' => $getFormMethod(),
        'action' => $action,
        'class' => $classes(),
    ]);

    if ($novalidate) {
        $attributes = $attributes->merge(['novalidate' => true]);
    }

    if ($enctype) {
        $attributes = $attributes->merge(['enctype' => $enctype]);
    }
@endphp

<form {{ $attributes }}>
    @if ($needsMethodSpoofing())
        @method($method)
    @endif

    @csrf

    {{ $slot }}
</form>

