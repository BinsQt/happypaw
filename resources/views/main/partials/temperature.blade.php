    <div class="z-10">
        @foreach ( $pettemperature as $petstatus )
       <p class="text-7xl">
           {{ $petstatus -> temp }}
       </p>
        @endforeach
   </div>

