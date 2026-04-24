<x-guest-layout>
    {{-- Header --}}
    <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-900">Lupa Kata Sandi?</h1>
        <p class="mt-1 text-sm text-gray-500">Masukkan email Anda, kami akan kirim link reset</p>
    </div>

    @if (session('status'))
        <div class="mb-5 px-4 py-3 rounded-lg bg-green-50 border border-green-200 text-sm text-green-700">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" id="forgot-password-form">
        @csrf
        <div class="mb-5">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                placeholder="nama@email.com"
                class="w-full px-4 py-2.5 text-sm text-gray-900 bg-white border {{ $errors->has('email') ? 'border-red-400' : 'border-gray-300' }} rounded-lg outline-none transition duration-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/15 placeholder:text-gray-400">
            @error('email')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" id="forgot-password-button"
            class="w-full py-2.5 px-4 text-sm font-semibold text-white bg-primary-500 rounded-lg hover:bg-primary-600 active:bg-primary-700 transition-all duration-200 shadow-sm hover:shadow-md">
            Kirim Link Reset
        </button>
    </form>

    {{-- Back to login --}}
    <div class="text-center mt-5">
        <a href="{{ route('login') }}"
            class="inline-flex items-center gap-1.5 text-sm text-primary-600 hover:text-primary-800 font-medium transition-colors">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            Kembali ke halaman login
        </a>
    </div>
</x-guest-layout>
