<div class="bg-white hover:shadow-lg transition-shadow rounded-lg">
    <div class="p-4">
        <img src="{{ asset($image ?? 'images/placeholder.jpg') }}"
             alt="{{ $name }}"
             class="w-full h-40 object-cover rounded-lg mb-3">
        <h4 class="text-sm font-medium text-gray-800 mb-2 line-clamp-2">{{ $name }}</h4>
        <div class="flex justify-between items-center">
            <span class="text-[#8eb226] font-bold">{{ $price }}</span>
            <div class="w-8 h-8 bg-[#8eb226] rounded-full flex items-center justify-center cursor-pointer">
                <span class="text-white text-lg">+</span>
            </div>
        </div>
    </div>
</div>
