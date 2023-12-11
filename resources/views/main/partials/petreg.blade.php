<x-app-layout>
    <x-slot name="header">
        <div class="border px-3 py-1 w-full bg-gray-300">
            <button class="w-1/2 font-serif" onclick="history.back()">⌫ <span>Return</span></button>
        </div>
    </x-slot>

    <div class="p-4">
        <form action="/addpet" method="post" class="w-full">
            @csrf
            <div class="flex flex-col">
                <label for="name">Pet Name</label>
                <input type="text" name="petname">
            </div>

            <div class="flex flex-col">
                <label for="name">Gender</label>
                <select name="gender" id="gender">
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="name">Breed</label>
                <input type="text" name="breed">
            </div>

            <div class="flex flex-col">
                <label for="name">Dominant Color</label>
                <input type="text" name="color">
            </div>

            <div class="flex flex-col">
                <label for="name">Birthday</label>
                <input type="date" name="birthday">
            </div>
            <div class="my-5 w-full text-center">
             <button type="submit" class="bg-green-300 w-1/2 py-1">Add Pet</button>
            </div>
        </form>
    </div>
    
</x-app-layout>
    