<div class="bg-{{ $bgColor ?? '[#cda792]' }} text-white overflow-hidden rounded-lg">
    <div class="p-6">
        <h4 class="text-xl font-semibold mb-4">{{ $name }}</h4>
        <img src="{{ asset($image ?? 'images/placeholder.jpg') }}"
             alt="{{ $name }}"
             class="rounded-lg mb-4 w-30 h-30">
        <p class="text-sm mb-4">{{ $discount }}</p>
        <svg class="w-6 h-6 ml-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </div>
</div>
