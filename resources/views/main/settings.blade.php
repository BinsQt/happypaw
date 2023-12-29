<x-app-layout>
    <div class="w-auto flex flex-col gap-5 md:m-20 py-3 mx-3 my-10">

        <div class="p-3 m-auto bg-blue-600 drop-shadow-md rounded-xl w-full md:w-1/2 shadow-2xl">
            <p class="text-3xl text-center border-b border-gray-700 py-3">Settings</p>
            <div class="p-3 relative text-blue-100">
                <ul>
                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-300 w-full h-10 text-center my-3 text-gray-900 text-xl">Account Settings</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl z-50" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-300 w-full h-10 text-center my-3 text-gray-900 text-xl">Help And Support</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-300 w-full h-10 text-center my-3 text-gray-900 text-xl">Terms and agreement</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-300 w-full h-10 text-center my-3 text-gray-900 text-xl">About</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <li >
                        <form action="/logout" method="POST">
                            @csrf
                        <button class="text-center bg-red-500 border h-10 w-full m-auto my-3  text-xl text-gray-200 font-extrabold">Sign Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
