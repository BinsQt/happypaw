    <div class="z-10 h-20 w-32 flex justify-evenly items-center">
        <div id="load_content" >
            @foreach ($petActive as $noFinger)
                @foreach ( $petbpm as $petheartrate )
                
                    @if ($noFinger -> ifActive < 1)
                    <p class="text-7xl">
                        {{ $petheartrate -> bpm }}
                    </p>
                       
                    @else
                    <p>No Heartbeat detected</p>
                    @endif
                @endforeach

             @endforeach
        </div>


   </div>

