    <div class="z-10">
        @foreach ( $petmovement as $petstatus )

            <p class="text-xl">

                @if ($petstatus->movement < 1)
                    Your dog is Resting
                @elseif ($petstatus->movement = 1)
                    Your dog is active
                @endif
            </p>
        @endforeach
   </div>

