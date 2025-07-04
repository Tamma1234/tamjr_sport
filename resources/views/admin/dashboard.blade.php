@extends('admin.layouts.app')

@section('content')
<div class="space-y-6 mx-auto">
    <div>
        <h2 class="text-3xl font-bold tracking-tight">Dashboard</h2>
        <p class="text-gray-500">Welcome to your soccer store admin panel</p>
    </div>
    <!-- Stats -->
    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex flex-row items-center justify-between pb-2">
                <span class="text-sm font-medium">Total Products</span>
                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4"/></svg>
            </div>
            <div class="text-2xl font-bold">1,234</div>
            <p class="text-xs text-gray-400">+20.1% from last month</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex flex-row items-center justify-between pb-2">
                <span class="text-sm font-medium">Total Orders</span>
                <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            </div>
            <div class="text-2xl font-bold">856</div>
            <p class="text-xs text-gray-400">+15.3% from last month</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex flex-row items-center justify-between pb-2">
                <span class="text-sm font-medium">Blog Posts</span>
                <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/></svg>
            </div>
            <div class="text-2xl font-bold">42</div>
            <p class="text-xs text-gray-400">+5 new this month</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex flex-row items-center justify-between pb-2">
                <span class="text-sm font-medium">Active Users</span>
                <svg class="h-5 w-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-3-3.87"/><path d="M9 21v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div class="text-2xl font-bold">2,345</div>
            <p class="text-xs text-gray-400">+12.5% from last month</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex flex-row items-center justify-between pb-2">
                <span class="text-sm font-medium">Revenue</span>
                <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8c-4.418 0-8 1.79-8 4v4h16v-4c0-2.21-3.582-4-8-4z"/><path d="M12 8V4m0 0a4 4 0 1 1 0 8V4z"/></svg>
            </div>
            <div class="text-2xl font-bold">$45,231</div>
            <p class="text-xs text-gray-400">+25.2% from last month</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex flex-row items-center justify-between pb-2">
                <span class="text-sm font-medium">Growth Rate</span>
                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="4 17 10 11 14 15 21 8"/></svg>
            </div>
            <div class="text-2xl font-bold">12.5%</div>
            <p class="text-xs text-gray-400">Monthly growth</p>
        </div>
    </div>
    <!-- Recent Orders & Top Products -->
    <div class="grid gap-4 md:grid-cols-2">
        <div class="bg-white shadow rounded-lg p-4">
            <div>
                <h3 class="text-lg font-semibold">Recent Orders</h3>
                <p class="text-sm text-gray-400">Latest orders from your store</p>
            </div>
            <div class="space-y-4 mt-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Order #1001</p>
                        <p class="text-xs text-gray-400">Customer 1</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$120.50</p>
                        <p class="text-xs text-gray-400">Pending</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Order #1002</p>
                        <p class="text-xs text-gray-400">Customer 2</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$89.99</p>
                        <p class="text-xs text-gray-400">Pending</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Order #1003</p>
                        <p class="text-xs text-gray-400">Customer 3</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$150.00</p>
                        <p class="text-xs text-gray-400">Confirmed</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Order #1004</p>
                        <p class="text-xs text-gray-400">Customer 4</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$200.00</p>
                        <p class="text-xs text-gray-400">Confirmed</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Order #1005</p>
                        <p class="text-xs text-gray-400">Customer 5</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$75.00</p>
                        <p class="text-xs text-gray-400">Shipped</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4">
            <div>
                <h3 class="text-lg font-semibold">Top Products</h3>
                <p class="text-sm text-gray-400">Best selling products this month</p>
            </div>
            <div class="space-y-4 mt-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Barcelona Home Jersey</p>
                        <p class="text-xs text-gray-400">50 sold</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$89.99</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Real Madrid Away Kit</p>
                        <p class="text-xs text-gray-400">45 sold</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$99.99</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Manchester United Training Set</p>
                        <p class="text-xs text-gray-400">40 sold</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$109.99</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">Liverpool Third Kit</p>
                        <p class="text-xs text-gray-400">35 sold</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$119.99</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium">PSG Home Jersey</p>
                        <p class="text-xs text-gray-400">30 sold</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium">$129.99</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection