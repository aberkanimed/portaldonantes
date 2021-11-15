@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-cyan-800 text-white'
            : 'text-cyan-100 hover:text-white hover:bg-cyan-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
