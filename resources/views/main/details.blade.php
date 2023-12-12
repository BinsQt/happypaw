<x-app-layout>
    <x-slot name="header">
        <x-$detail-names />
    </x-slot>

    <div class="px-5 text-gray-200">
        <div class="bg-blue-600 w-full h-96 my-10 mx-auto px-3 py-6 rounded-3xl flex flex-col m-auto">

            <div class="flex w-full justify-evenly items-center">
                <div class="rounded-full w-24 h-24 bg-white flex items-center">
                    <img src="public/dog.png" alt="doggie">
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
                <div class="flex justify-evenly">
                    <div>
                        <p class=" uppercase text-2xl font-sans">{{$details -> gender}}</p>

                    </div>
                    <div>
                        <p class="uppercase text-2xl font-sans">{{$details -> color}}</p>

                    </div>
                </div>
                <div class="flex justify-evenly">
                    <div>
                        <p class="uppercase text-2xl font-sans">{{$details -> birthday}}</p>

                    </div>
                    <div>
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
