<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Natasha Homestay') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#FCF9EA] text-gray-800 overflow-y-scroll">
    <div class="min-h-screen flex flex-col">

        {{-- Navbar --}}
        @include('layouts.navigation')

        {{-- Page Header --}}
        @isset($header)
            <div class="bg-white border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-6 py-5">
                    {{ $header }}
                </div>
            </div>
        @endisset

        {{-- Main Content --}}
        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-6 py-6">
                {{ $slot }}
            </div>
        </main>

        {{-- Footer --}}
        <footer class="border-t border-gray-100 bg-white/50">
            <div class="max-w-7xl mx-auto px-6 py-4 text-center text-xs text-gray-400">
                &copy; {{ date('Y') }} Natasha Homestay. All rights reserved.
            </div>
        </footer>

    </div>
</body>

</html>
