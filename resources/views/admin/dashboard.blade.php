<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 bg-gray-700">Dashboard</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Products</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Categories</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Orders</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Customers</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-semibold">Dashboard Overview</h1>
                <div class="flex items-center">
                    <span class="mr-2">Admin User</span>
                    <a href="#" class="text-red-600">Logout</a>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Total Sales</h3>
                    <p class="text-2xl font-bold">$0.00</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Total Orders</h3>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Total Products</h3>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Total Customers</h3>
                    <p class="text-2xl font-bold">0</p>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Recent Orders</h2>
                <table class="w-full">
                    <thead>
                        <tr class="text-left">
                            <th class="pb-4">Order ID</th>
                            <th class="pb-4">Customer</th>
                            <th class="pb-4">Status</th>
                            <th class="pb-4">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="text-center py-4">No orders found</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
