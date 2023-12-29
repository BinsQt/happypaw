<x-app-layout>
    <x-slot name="header">
        <x-$detail-names />
    </x-slot>

    <div class="px-5 text-gray-200">
        <div class="bg-blue-600 w-full h-96 my-10 mx-auto px-3 py-6 rounded-3xl flex flex-col m-auto">

            <div class="flex w-full justify-evenly items-center">
                <div class="rounded-full w-24 h-24 bg-white flex items-center overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="auto" viewBox="0 -960 960 960" width="auto"><path d="M194-80v-395h80v315h280v-193l105-105q29-29 45-65t16-77q0-40-16.5-76T659-741l-25-26-127 127H347l-43 43-57-56 67-67h160l160-160 82 82q40 40 62 90.5T800-600q0 57-22 107.5T716-402l-82 82v240H194Zm197-187L183-475q-11-11-17-26t-6-31q0-16 6-30.5t17-25.5l84-85 124 123q28 28 43.5 64.5T450-409q0 40-15 76.5T391-267Z"/></svg>
                </div>
                @foreach ($detail as $details)
                <div class="flex flex-col items-center gap-3">
                    <div>
                        <p class="underline uppercase text-4xl font-sans">{{$details -> name}}</p>
                    </div>
                    <div>
                        <p class="text-2xl capitalize font-sans">{{$details -> breed}}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5 my-5">
                <div class="flex justify-evenly  border-b-2 border-gray-400">
                    <div>
                        <label for="gender" class="text-black">Gender</label>
                        <p class=" uppercase text-2xl font-sans">{{$details -> gender}}</p>

                    </div>
                    <div>
                        <label for="gender" class="text-black">Dominant Color</label>
                        <p class="uppercase text-2xl font-sans">{{$details -> color}}</p>

                    </div>
                </div>
                <div class="flex justify-evenly border-b-2 border-gray-400">
                    <div>
                        <label for="gender" class="text-black">Birthday</label>
                        <p class="uppercase text-2xl font-sans">{{$details -> birthday}}</p>

                    </div>
                    <div>
                        <label for="gender" class="text-black">Age</label>
                        <p class="uppercase text-2xl font-sans">{{$details -> age}} <span class="text-sm text-center">M/O</span></p>

                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>



    <x-slot name="bottom_nav">
        @include('layouts.bottom-nav')
    </x-slot>

</x-app-layout>
