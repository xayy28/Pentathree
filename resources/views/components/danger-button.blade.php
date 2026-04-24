<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-danger-500 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-danger-600 active:bg-danger-700 focus:outline-none focus:ring-2 focus:ring-danger-500/20 transition-all duration-200']) }}>
    {{ $slot }}
</button>
