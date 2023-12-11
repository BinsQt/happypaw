<div x-data="{ open: false }" class="border px-5 py-1 w-full bg-gray-300">
    <button @click="open = ! open" class="border w-full font-serif">Pets</button>
    <div x-show="open" @click.outside="open = false"
    class="">
        @include('main.partials.pets')
    </div>

</div>