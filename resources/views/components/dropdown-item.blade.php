@props(['active' => false])

@php
    $attr = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';

    if ($active) $attr .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $attr]) }}>
    {{ $slot }}
</a>