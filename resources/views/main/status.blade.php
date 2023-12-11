<x-app-layout>
    <x-slot name="header">
        <x-pet-names />
    </x-slot>
    <div class="flex flex-col">
        <div class="h-auto m-5 flex gap-5">

            <div class="w-8/12 h-auto bg-blue-200 relative rounded-3xl p-5">
                <x-heartrate />
            </div>

            <div class="w-4/12 h-1/2 bg-blue-200 rounded-3xl p-5">
                <x-movement />
            </div>
        </div>
        <div class="bg-blue-200 h-auto m-5 rounded-3xl">
            <x-temp />
        </div>
    </div>



</x-app-layout>
