    <div class="z-10">
        @foreach ( $petbpm as $petheartrate )
       <p class="text-5xl">
           {{ $petheartrate -> bpm }} <span class="text-sm">BPM</span>
       </p>
        @endforeach
   </div>

