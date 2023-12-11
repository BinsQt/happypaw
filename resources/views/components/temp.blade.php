<section>
    <div class="flex items-center justify-evenly px-5">
        <div class="z-10 p-5">
            @include('main.partials.temperature')
       </div>

       <div>
        <div>Body Temperature</div>
            <div class="w-full bg-gray-400 rounded-full h-10 flex items-center">

                <input type="range" min="1" max="100" value="50" class="slider" id="myRange" disabled>

            </div>
       </div>
    </div>
</section>
