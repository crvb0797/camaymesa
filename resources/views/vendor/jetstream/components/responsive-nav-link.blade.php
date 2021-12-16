@props(['active'])

@php
$classes = $active ?? false ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-500 text-base font-medium text-white bg-secondary focus:outline-none focus:text-white focus:bg-secondary focus:border-secondary transition' : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-text hover:text-gray-800 hover:bg-secondary hover:border-secondary focus:outline-none focus:text-white focus:bg-secondary focus:border-gray-500 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
