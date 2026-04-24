<x-guest-layout>
    {{-- Header --}}
    <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-900">Buat Akun Baru</h1>
        <p class="mt-1 text-sm text-gray-500">Daftar untuk mulai menggunakan Natasha Homestay</p>
    </div>

    <form method="POST" action="{{ route('register') }}" id="register-form">
        @csrf

        {{-- Name --}}
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                placeholder="Masukkan nama lengkap"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('name') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            @error('name')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                placeholder="nama@email.com"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('email') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            @error('email')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                placeholder="Minimal 8 karakter"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('password') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            <p class="mt-1 text-xs text-gray-400">Gunakan minimal 8 karakter</p>
            @error('password')
                <p class="mt-0.5 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                placeholder="Ulangi kata sandi"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('password_confirmation') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            @error('password_confirmation')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Role Selection --}}
        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Daftar Sebagai</label>
            <div class="grid grid-cols-2 gap-3">
                <label class="cursor-pointer">
                    <input type="radio" name="role" value="user" {{ old('role', 'user') === 'user' ? 'checked' : '' }} class="peer sr-only">
                    <div class="text-center px-4 py-3 rounded-lg border-2 border-gray-200 bg-white peer-checked:border-primary-500 peer-checked:bg-primary-50 transition-all duration-200">
                        <svg class="w-6 h-6 mx-auto mb-1.5 text-gray-400 peer-checked:text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <p class="text-sm font-semibold text-gray-800">User</p>
                        <p class="text-[11px] text-gray-400">Pengguna biasa</p>
                    </div>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="role" value="admin" {{ old('role') === 'admin' ? 'checked' : '' }} class="peer sr-only">
                    <div class="text-center px-4 py-3 rounded-lg border-2 border-gray-200 bg-white peer-checked:border-primary-500 peer-checked:bg-primary-50 transition-all duration-200">
                        <svg class="w-6 h-6 mx-auto mb-1.5 text-gray-400 peer-checked:text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2zm10-10V7a4 4 0 0 0-8 0v4h8z"/></svg>
                        <p class="text-sm font-semibold text-gray-800">Admin</p>
                        <p class="text-[11px] text-gray-400">Kelola sistem</p>
                    </div>
                </label>
            </div>
            @error('role')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit --}}
        <button type="submit" id="register-button"
            class="w-full py-2.5 px-4 text-sm font-semibold text-white bg-primary-500 rounded-lg hover:bg-primary-600 active:bg-primary-700 transition-all duration-200 shadow-sm hover:shadow-md">
            Daftar Sekarang
        </button>
    </form>

    {{-- Divider --}}
    <div class="flex items-center gap-3 my-5">
        <div class="flex-1 h-px bg-gray-200"></div>
        <span class="text-xs text-gray-400">sudah punya akun?</span>
        <div class="flex-1 h-px bg-gray-200"></div>
    </div>

    {{-- Login Link --}}
    <a href="{{ route('login') }}"
        class="block w-full text-center py-2.5 px-4 text-sm font-semibold text-primary-600 bg-primary-50 border border-primary-200 rounded-lg hover:bg-primary-100 transition-colors duration-200">
        Masuk ke Akun
    </a>
</x-guest-layout>
