<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-xl font-bold text-gray-900">Admin Dashboard</h1>
            <p class="text-sm text-gray-500 mt-0.5">Selamat datang, {{ Auth::user()->name }}. Kelola platform dari sini.</p>
        </div>
    </x-slot>

    {{-- Stats --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Total Users</p>
            <p class="text-2xl font-bold text-gray-900">-</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Total Booking</p>
            <p class="text-2xl font-bold text-gray-900">-</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Pendapatan</p>
            <p class="text-2xl font-bold text-gray-900">-</p>
        </div>
    </div>

    {{-- Placeholder --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-10 text-center">
        <div class="w-14 h-14 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-3">
            <svg class="w-7 h-7 text-primary-300" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.5">
                <rect x="3" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="3" width="7" height="7" rx="1" />
                <rect x="3" y="14" width="7" height="7" rx="1" />
                <rect x="14" y="14" width="7" height="7" rx="1" />
            </svg>
        </div>
        <h3 class="text-base font-semibold text-gray-900 mb-1">Fitur Dalam Pengembangan</h3>
        <p class="text-sm text-gray-400 max-w-sm mx-auto">Area ini akan digunakan untuk manajemen pengguna,
            analitik, dan laporan.</p>
    </div>
</x-app-layout>
