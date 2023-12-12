<x-app-layout>
    <div class="flex flex-col my-5 mx-3">

        <div class="bg-blue-500 z-10 rounded-3xl w-full h-60 flex items-center justify-evenly p-10">
            <div class="flex flex-col gap-5">
                <div class="w-20 h-auto">
                    <x-user-icon />
                </div>
               <div>
                    <button class="bg-gray-300 rounded-full">Edit Profile</button>
               </div>
            </div>
            <div class="p-3 flex flex-col gap-6">
                <p class="text-xl">{{Auth::user()->name}}</p>

                <p>address: <br>Camp Tinio Cabanatuan City</p>
            </div>

        </div>

        <div class="bg-primary-1 flex flex-col p-3 justify-center items-center gap-3 w-full">
            <div class="flex flex-col gap-3">
                <p>Contact Number</p>
                <input type="text" value="09568170926" disabled>
                <hr class="w-full h-px my-1 bg-blue-950 border-0 dark:bg-gray">
            </div>
            <div class="flex flex-col gap-3">
                <p>Email Address</p>
                <div>
                    <input type="text" class="input" value="vince@gmail.com" id="txt" disabled>
                </div>
                <hr class="w-full h-px my-1 bg-blue-950 border-0 dark:bg-gray">
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-1 justify-evenly a">
                    <div>
                        <p>Birthday</p>
                        <input type="date">
                    </div>
                    <div>
                        <p>Age</p>
                        <input type="number" class="w-12" value="21" disabled>
                    </div>
                </div>
                <hr class="w-full h-px my-1 bg-blue-950 border-0 dark:bg-gray">
            </div>

        </div>
    </div>


</x-app-layout>
