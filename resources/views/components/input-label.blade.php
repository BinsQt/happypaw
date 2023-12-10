@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-sansserif font-medium text-sm text-gray-200']) }}>
    {{ $value ?? $slot }}
</label>
