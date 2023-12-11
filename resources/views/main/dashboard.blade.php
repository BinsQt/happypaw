<x-app-layout>
    <x-slot name="header">
        <x-pet-names />
    </x-slot>

    <div class="px-5">
        @include('main.partials.petDetails')
    </div>
        


    <x-slot name="bottom_nav">
        @include('layouts.bottom-nav')
    </x-slot>

</x-app-layout>
