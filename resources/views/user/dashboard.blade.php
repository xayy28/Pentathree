<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-primary-50 rounded-2xl flex items-center justify-center text-lg font-bold text-primary-700">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <div>
                <p class="text-sm text-gray-500">
                    Selamat {{ now()->format('H') < 12 ? 'Pagi' : (now()->format('H') < 15 ? 'Siang' : (now()->format('H') < 18 ? 'Sore' : 'Malam')) }},
                </p>
                <h1 class="text-xl font-bold text-gray-900">{{ Auth::user()->name }} 👋</h1>
            </div>
        </div>
    </x-slot>

    {{-- Quick Actions --}}
    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Menu Cepat</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-6">
        <a href="{{ route('profile.edit') }}"
            class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow group">
            <svg class="w-6 h-6 text-primary-400 mb-2 group-hover:text-primary-600 transition-colors"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <p class="text-sm font-semibold text-gray-800">Edit Profil</p>
            <p class="text-xs text-gray-400 mt-0.5">Ubah info akun</p>
        </a>
        <a href="#"
            class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow group">
            <svg class="w-6 h-6 text-primary-400 mb-2 group-hover:text-primary-600 transition-colors"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
                <line x1="3" y1="10" x2="21" y2="10" />
            </svg>
            <p class="text-sm font-semibold text-gray-800">Booking</p>
            <p class="text-xs text-gray-400 mt-0.5">Lihat pesanan</p>
        </a>
        <a href="#"
            class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow group">
            <svg class="w-6 h-6 text-primary-400 mb-2 group-hover:text-primary-600 transition-colors"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
            </svg>
            <p class="text-sm font-semibold text-gray-800">Bantuan</p>
            <p class="text-xs text-gray-400 mt-0.5">Hubungi kami</p>
        </a>
    </div>

    {{-- Placeholder --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-10 text-center">
        <div class="w-14 h-14 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-3">
            <svg class="w-7 h-7 text-primary-300" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.5">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
        </div>
        <h3 class="text-base font-semibold text-gray-900 mb-1">Dashboard Dalam Pengembangan</h3>
        <p class="text-sm text-gray-400 max-w-sm mx-auto">Fitur-fitur baru akan segera tersedia. Terima kasih sudah
            mendaftar!</p>
    </div>
</x-app-layout>
