    <div class="z-10 h-20 w-32 flex justify-evenly items-center">
        <div>
            @foreach ( $petbpm as $petheartrate )
            <p class="text-5xl">
                {{ $petheartrate -> bpm }}
            </p>
             @endforeach
        </div>

        <div>
          <span class="text-sm">BPM</span>  
        </div>
        
        
   </div>

