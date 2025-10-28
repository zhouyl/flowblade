<div 
    id="{{ $id }}" 
    inline-datepicker 
    @if($date) data-date="{{ $date }}" @endif
    {{ $attributes }}
>
    {{ $slot }}
</div>

