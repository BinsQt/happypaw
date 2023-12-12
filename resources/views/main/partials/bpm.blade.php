    <div class="z-10 h-20 w-32 flex justify-evenly items-center">
        <div id="load_content" >
            @foreach ( $petbpm as $petheartrate )
            <p class="text-7xl">
                {{ $petheartrate -> bpm }}
            </p>
             @endforeach
        </div>


   </div>

