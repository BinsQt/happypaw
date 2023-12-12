    <div id="load_content3" class="z-10">
        @foreach ( $petmovement as $petstatus )

            <p class="text-xl">

                @if ($petstatus->movement < 1)
                    Your dog is <span class="underline font-bold"> Resting </span>
                @elseif ($petstatus->movement = 1)
                    Your dog is active
                @endif
            </p>
        @endforeach
   </div>

