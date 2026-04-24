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
    <div class="min-h-screen flex items-center justify-center px-4 py-8 sm:py-12">
        <div class="w-full max-w-[420px]">

            {{-- Auth Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 px-6 py-7 sm:px-8 sm:py-8">
                {{-- Logo --}}
                <div class="flex flex-col items-center mb-6">
                    <img src="{{ asset('images/Logo-Natasha.jpg') }}" alt="Natasha Homestay"
                        class="w-16 h-16 rounded-2xl object-cover shadow-sm mb-3">
                    <h2 class="text-lg font-bold text-gray-900 tracking-tight">Natasha Homestay</h2>
                </div>
                {{ $slot }}
            </div>

            {{-- Footer --}}
            <p class="text-center mt-6 text-xs text-gray-400">
                &copy; {{ date('Y') }} Natasha Homestay. All rights reserved.
            </p>

        </div>
    </div>
</body>

</html>
