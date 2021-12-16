@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 border-b-2 border-secondary text-sm font-medium leading-5 text-text focus:outline-none focus:border-secondary transition' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-text hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
