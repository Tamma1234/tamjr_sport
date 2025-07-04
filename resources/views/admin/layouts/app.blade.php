<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Topbar -->
    <header class="bg-white shadow h-16 flex items-center px-6 justify-between">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white shadow-lg">
                <span class="text-lg font-bold">⚽</span>
            </div>
            <div>
                <span class="text-lg font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Soccer Store</span>
                <div class="text-xs text-gray-300 font-medium">Admin Dashboard</div>
            </div>
        </div>
    </div>
        <div class="flex items-center space-x-4">
            <span class="text-gray-600">Admin</span>
            <img src="https://ui-avatars.com/api/?name=Admin" alt="User" class="w-8 h-8 rounded-full border">
        </div>
    </header>
    <div class="flex min-h-screen">
        @include('admin.partials.sidebar')
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html> 