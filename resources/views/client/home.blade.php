@extends('client.layouts.app')

@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Hero Section -->
            @include('client.components.hero', [
                'title' => 'Discover',
                'subtitle' => 'Our New Products For You',
                'buttonText' => 'Shop Now',
                'mainImage' => 'images/placeholder.jpg',
                'product1Image' => 'images/placeholder.jpg',
                'product2Image' => 'images/placeholder.jpg',
                'discount' => '80%'
            ])

            <!-- Best Selling Products -->
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Best Selling Products</h3>
                    <a href="#" class="text-[#8eb226] hover:underline">View All Products</a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach([
                        [
                            'name' => 'The Ordinary Peeling Solution - Exfoliation',
                            'price' => '$19.90',
                            'image' => 'images/placeholder.jpg'
                        ],
                        [
                            'name' => 'The Body Shop Body Butter - 200 Gram',
                            'price' => '$7.90',
                            'image' => 'images/placeholder.jpg'
                        ],
                        [
                            'name' => 'The Body Shop Shower Gel - 250ml',
                            'price' => '$12.90',
                            'image' => 'images/placeholder.jpg'
                        ],
                        [
                            'name' => 'Bath & Body Works Hand Soap - 259ml',
                            'price' => '$9.90',
                            'image' => 'images/placeholder.jpg'
                        ]
                    ] as $product)
                        @include('client.components.product-card', $product)
                    @endforeach
                </div>
            </div>

            <!-- Top Brands -->
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Top Brands</h3>
                    <a href="#" class="text-[#8eb226] hover:underline">View All Brands</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @include('client.components.brand-card', [
                        'name' => 'The Ordinary',
                        'image' => 'images/placeholder.jpg',
                        'discount' => 'Upto 50 % Off',
                        'bgColor' => '[#cda792]'
                    ])
                    @include('client.components.brand-card', [
                        'name' => 'The Body Shop',
                        'image' => 'images/placeholder.jpg',
                        'discount' => 'All Items 50 % Off',
                        'bgColor' => '[#98c644]'
                    ])
                    @include('client.components.brand-card', [
                        'name' => 'Bath & Body Works',
                        'image' => 'images/placeholder.jpg',
                        'discount' => 'Upto 50 % Off',
                        'bgColor' => '[#cda792]'
                    ])
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="space-y-6">
            <!-- The Ordinary Section -->
            <div class="bg-[#e4e5d7] overflow-hidden rounded-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">The Ordinary.</h3>
                            <p class="text-sm text-gray-600 mb-4">
                                The Ordinary Is Your Destination For Skincare, Makeup, Hair, And Body Solutions. Discover Clinical
                                Formulations With Integrity.
                            </p>
                            <button class="bg-[#8eb226] hover:bg-[#73a336] text-white px-6 py-2 rounded-md">
                                Learn More
                            </button>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4">
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="Product" class="rounded-lg w-20 h-20">
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="Product" class="rounded-lg w-20 h-20">
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="Product" class="rounded-lg w-20 h-20">
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div>
                <div class="flex justify-between items-center mb-4">
                    <div class="flex space-x-4">
                        <select class="text-sm border border-gray-300 rounded px-3 py-1">
                            <option>Filter By</option>
                        </select>
                        <select class="text-sm border border-gray-300 rounded px-3 py-1">
                            <option>Sort By</option>
                        </select>
                    </div>
                    <a href="#" class="text-[#8eb226] text-sm hover:underline">View All Products</a>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    @foreach([
                        ['name' => 'Hyaluronic Acid 2% + B5', 'price' => '$8.90'],
                        ['name' => 'Niacinamide 10% + Zinc 1%', 'price' => '$11.20'],
                        ['name' => 'Retinol 0.2% in Squalane', 'price' => '$10.00'],
                        ['name' => 'Vitamin C Suspension 23%', 'price' => '$9.90'],
                        ['name' => 'AHA 30% + BHA 2% Peeling', 'price' => '$8.90']
                    ] as $product)
                        @include('client.components.product-card', array_merge($product, ['image' => 'images/placeholder.jpg']))
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
