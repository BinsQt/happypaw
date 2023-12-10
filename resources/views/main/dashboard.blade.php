<x-app-layout>
    <x-slot name="header">
        <x-pet-names />
    </x-slot>


    <x-slot name="bottom_nav">
        @include('layouts.bottom-nav')
    </x-slot>

</x-app-layout>
