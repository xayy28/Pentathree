<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-bold text-gray-900">Pengaturan Profil</h1>
    </x-slot>

    <div class="space-y-6">

        {{-- Profile Information --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/50">
                <h3 class="text-sm font-semibold text-gray-900">Informasi Profil</h3>
                <p class="text-xs text-gray-500 mt-0.5">Perbarui nama dan email akun Anda</p>
            </div>
            <div class="px-6 py-6">
                <div class="max-w-lg">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>

        {{-- Update Password --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/50">
                <h3 class="text-sm font-semibold text-gray-900">Ubah Kata Sandi</h3>
                <p class="text-xs text-gray-500 mt-0.5">Pastikan menggunakan kata sandi yang kuat</p>
            </div>
            <div class="px-6 py-6">
                <div class="max-w-lg">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>

        {{-- Delete Account --}}
        <div class="bg-white rounded-2xl shadow-sm border border-red-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-red-50 bg-red-50/50">
                <h3 class="text-sm font-semibold text-red-600">Hapus Akun</h3>
                <p class="text-xs text-gray-500 mt-0.5">Tindakan ini tidak dapat dibatalkan</p>
            </div>
            <div class="px-6 py-6">
                <div class="max-w-lg">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
