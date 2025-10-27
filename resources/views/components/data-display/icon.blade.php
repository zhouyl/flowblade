<span 
    {{ $attributes->merge(['class' => $classes()]) }}
    data-icon="{{ $name }}"
    style="width: {{ $size }}; height: {{ $size }};"
></span>

@once
    @push('scripts')
        <script src="{{ \Flowblade\Support\ComponentHelper::getIconifyCdn() }}"></script>
    @endpush
@endonce

