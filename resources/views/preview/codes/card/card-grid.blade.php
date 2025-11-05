<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @for ($i = 1; $i <= 3; $i++)
        <x-card>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Card {{ $i }}</h3>
            <p class="text-gray-600 text-sm">This is card number {{ $i }} in the grid layout.</p>
        </x-card>
    @endfor
</div>

