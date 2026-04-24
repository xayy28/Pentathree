<x-guest-layout>
    {{-- Session Status --}}
    @if (session('status'))
        <div class="mb-5 px-4 py-3 rounded-lg bg-green-50 border border-green-200 text-sm text-green-700">
            {{ session('status') }}
        </div>
    @endif

    {{-- Header --}}
    <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-900">Selamat Datang Kembali</h1>
        <p class="mt-1 text-sm text-gray-500">Masuk ke akun Anda untuk melanjutkan</p>
    </div>

    <form method="POST" action="{{ route('login') }}" id="login-form">
        @csrf

        {{-- Email --}}
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="username" placeholder="nama@email.com"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('email') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            @error('email')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                placeholder="Masukkan kata sandi"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('password') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            @error('password')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Remember & Forgot --}}
        <div class="flex items-center justify-between mb-5">
            <label for="remember_me" class="inline-flex items-center gap-2 cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember"
                    class="w-4 h-4 rounded border-gray-300 text-primary-500 focus:ring-primary-500/20">
                <span class="text-sm text-gray-600">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                    class="text-sm text-primary-600 hover:text-primary-800 font-medium transition-colors">
                    Lupa kata sandi?
                </a>
            @endif
        </div>

        {{-- Submit --}}
        <button type="submit" id="login-button"
            class="w-full py-2.5 px-4 text-sm font-semibold text-white bg-primary-500 rounded-lg hover:bg-primary-600 active:bg-primary-700 transition-all duration-200 shadow-sm hover:shadow-md">
            Masuk
        </button>
    </form>

    {{-- Divider --}}
    <div class="flex items-center gap-3 my-5">
        <div class="flex-1 h-px bg-gray-200"></div>
        <span class="text-xs text-gray-400">atau</span>
        <div class="flex-1 h-px bg-gray-200"></div>
    </div>

    {{-- Register Link --}}
    @if (Route::has('register'))
        <a href="{{ route('register') }}"
            class="block w-full text-center py-2.5 px-4 text-sm font-semibold text-primary-600 bg-primary-50 border border-primary-200 rounded-lg hover:bg-primary-100 transition-colors duration-200">
            Buat Akun Baru
        </a>
    @endif
</x-guest-layout>
