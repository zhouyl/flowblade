<div class="space-y-3">
    <div class="flex gap-3">
        <x-radio name="plan" value="basic" class="mt-1" />
        <div>
            <x-text weight="medium">Basic Plan</x-text>
            <x-text size="sm" color="secondary">$9/month - Perfect for getting started</x-text>
        </div>
    </div>
    <div class="flex gap-3">
        <x-radio name="plan" value="pro" checked class="mt-1" />
        <div>
            <x-text weight="medium">Pro Plan</x-text>
            <x-text size="sm" color="secondary">$29/month - For growing businesses</x-text>
        </div>
    </div>
    <div class="flex gap-3">
        <x-radio name="plan" value="enterprise" class="mt-1" />
        <div>
            <x-text weight="medium">Enterprise Plan</x-text>
            <x-text size="sm" color="secondary">Custom pricing - For large organizations</x-text>
        </div>
    </div>
</div>
