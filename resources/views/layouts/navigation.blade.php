<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-40 shadow-sm">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-16">

            {{-- Left: Logo + Nav Links --}}
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 flex-shrink-0">
                    <img src="{{ asset('images/Logo-Natasha.jpg') }}" alt="Logo"
                        class="w-9 h-9 rounded-xl object-cover">
                    <span class="font-bold text-gray-900 tracking-tight hidden sm:block">Natasha Homestay</span>
                </a>

                <div class="hidden sm:flex items-center gap-1">
                    <a href="{{ route('dashboard') }}"
                        class="px-3 py-2 text-sm font-medium rounded-lg transition-colors duration-150 {{ request()->routeIs('dashboard') || request()->routeIs('*.dashboard') ? 'text-primary-700 bg-primary-50' : 'text-gray-500 hover:text-gray-800 hover:bg-gray-50' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="px-3 py-2 text-sm font-medium rounded-lg transition-colors duration-150 {{ request()->routeIs('profile.edit') ? 'text-primary-700 bg-primary-50' : 'text-gray-500 hover:text-gray-800 hover:bg-gray-50' }}">
                        Profil
                    </a>
                </div>
            </div>

            {{-- Right: User + Logout --}}
            <div class="hidden sm:flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-primary-50 rounded-lg flex items-center justify-center text-xs font-bold text-primary-700">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-800 leading-tight">{{ Auth::user()->name }}</p>
                        <p class="text-[11px] text-gray-400 capitalize leading-tight">{{ Auth::user()->role }}</p>
                    </div>
                </div>
                <div class="w-px h-6 bg-gray-200"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="px-3 py-2 text-sm font-medium text-gray-500 rounded-lg hover:text-red-600 hover:bg-red-50 transition-colors duration-150">
                        Keluar
                    </button>
                </form>
            </div>

            {{-- Mobile Toggle --}}
            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                    class="p-2 text-gray-500 hover:text-gray-800 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden border-t border-gray-100">
        <div class="px-4 py-3 space-y-1">
            <a href="{{ route('dashboard') }}"
                class="block px-3 py-2.5 text-sm font-medium rounded-lg {{ request()->routeIs('dashboard') || request()->routeIs('*.dashboard') ? 'text-primary-700 bg-primary-50' : 'text-gray-700 hover:bg-gray-50' }}">
                Dashboard
            </a>
            <a href="{{ route('profile.edit') }}"
                class="block px-3 py-2.5 text-sm font-medium rounded-lg {{ request()->routeIs('profile.edit') ? 'text-primary-700 bg-primary-50' : 'text-gray-700 hover:bg-gray-50' }}">
                Profil
            </a>
        </div>
        <div class="px-4 py-3 border-t border-gray-100">
            <div class="flex items-center gap-3 px-3 py-2">
                <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center text-sm font-bold text-primary-700">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit"
                    class="w-full text-left px-3 py-2.5 text-sm font-medium text-red-500 rounded-lg hover:bg-red-50 transition-colors">
                    Keluar dari Akun
                </button>
            </form>
        </div>
    </div>
</nav>
