<div x-data="{ open: false }" class="w-full border bg-gray-300 relative">
    <button @click="open = ! open" class="w-full font-serif">PETS</button>
    <div x-show="open" @click.outside="open = false"
    class="absolute">
        content..
    </div>

</div>