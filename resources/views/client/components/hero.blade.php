<div class="bg-[#cda792] rounded-lg overflow-hidden relative">
    <div class="flex">
        <div class="flex-1 p-8">
            <div class="max-w-md">
                <h1 class="text-4xl font-light text-[#8eb226] mb-2">{{ $title ?? 'Discover' }}</h1>
                <h2 class="text-3xl font-light text-white mb-6">{{ $subtitle ?? 'Our New Products For You' }}</h2>
                <button class="bg-[#8eb226] hover:bg-[#73a336] text-white px-6 py-2 rounded-md flex items-center">
                    {{ $buttonText ?? 'Shop Now' }}
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
            <div class="mt-8 flex space-x-4">
                <img src="{{ asset($product1Image ?? 'images/placeholder.jpg') }}" alt="Product" class="rounded-lg w-20 h-20 object-cover">
                <img src="{{ asset($product2Image ?? 'images/placeholder.jpg') }}" alt="Product" class="rounded-lg w-20 h-20 object-cover">
            </div>
        </div>
        <div class="flex-1 relative">
            <img src="{{ asset($mainImage ?? 'images/placeholder.jpg') }}" alt="Model" class="w-full h-full object-cover">
            <div class="absolute top-8 right-8 bg-white rounded-full w-24 h-24 flex flex-col items-center justify-center shadow-lg">
                <span class="text-2xl font-bold text-[#8eb226]">{{ $discount ?? '80%' }}</span>
                <span class="text-sm text-gray-600">Off</span>
            </div>
        </div>
    </div>
</div>
