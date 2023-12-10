@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex flex-col justify-center items-center w-full h-full bg-gray-200 '
            : 'flex flex-col justify-center items-center w-full h-full bg-transparent';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>