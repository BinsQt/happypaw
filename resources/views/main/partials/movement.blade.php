    <div class="z-10">
        @foreach ( $petmovement as $petstatus )
       <p class="text-7xl">
           {{ $petstatus -> movement }}
       </p>
        @endforeach
   </div>

