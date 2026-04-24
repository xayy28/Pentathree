@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-200 bg-white text-gray-900 focus:border-primary-500 focus:ring-2 focus:ring-primary-500/10 rounded-xl shadow-sm text-sm transition duration-200 placeholder:text-gray-400']) }}>
