<section class="space-y-4">
    <p class="text-sm text-gray-600">
        Setelah akun dihapus, semua data akan hilang secara permanen. Pastikan Anda sudah mengunduh data yang diperlukan.
    </p>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Hapus Akun Saya</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-semibold text-gray-900">
                Yakin ingin menghapus akun?
            </h2>

            <p class="mt-2 text-sm text-gray-600">
                Semua data dan informasi akun Anda akan dihapus permanen. Masukkan kata sandi untuk konfirmasi.
            </p>

            <div class="mt-5">
                <x-input-label for="password" value="Kata Sandi" class="sr-only" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4" placeholder="Masukkan kata sandi" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-1" />
            </div>

            <div class="mt-5 flex justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Batal
                </x-secondary-button>
                <x-danger-button>
                    Ya, Hapus Akun
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
