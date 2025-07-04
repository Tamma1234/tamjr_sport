@extends('admin.auth.partials.layout')

@section('content')
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="text-center p-6 border-b">
                <div class="flex justify-center mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-primary-foreground text-xl">
                        ⚽
                    </div>
                </div>
                <h2 class="text-2xl font-bold">Soccer Store Admin</h2>
                <p class="text-gray-500">Sign in to your admin account</p>
            </div>
            <div class="p-6">
                @include('admin.auth.partials.alert')
                @include('admin.auth.partials.form')
                <div class="mt-4 text-center text-sm text-gray-400">
                    Demo credentials: admin@soccer.com / admin123
                </div>
            </div>
        </div>
    </div>
@endsection
