<form method="POST" action="{{ route('admin.login') }}" class="space-y-4">
    @csrf
    <div class="space-y-2">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email') }}"
            required
            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
            placeholder="admin@soccer.com"
        >
    </div>
    <div class="space-y-2">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
            id="password"
            name="password"
            type="password"
            required
            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
            placeholder="Enter your password"
        >
    </div>
    @include('admin.auth.partials.button')
</form> 