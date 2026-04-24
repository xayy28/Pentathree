<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-primary-500 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-600 active:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500/20 transition-all duration-200 shadow-sm shadow-primary-500/20 hover:shadow-md hover:shadow-primary-500/25']) }}>
    {{ $slot }}
</button>
