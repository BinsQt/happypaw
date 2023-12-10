@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-serif font-normal text-3xl text-gray-100 mb-5 border-b border-gray-400']) }}>
    {{ $value ?? $slot }}
</label>
