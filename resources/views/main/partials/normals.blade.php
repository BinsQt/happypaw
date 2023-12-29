<div id="load_content4" class="z-10">
    @foreach ( $petnormal as $petheartrate )
        <p class="text-sm">
        @if ($petheartrate -> bpm <= 60)
            Your dogs heart rate is <span class="text-blue-600 font-bold capitalize text-xl"> below normal.</span> Please Check your dog condition
        @elseif ($petheartrate -> bpm >= 140)
            Your dogs heart rate is <span class="text-red-600 font-bold capitalize text-xl"> above normal.</span> Please Check your dog condition
        @else
        Your dogs heart rate is <span class="text-green-600 font-bold capitalize text-xl">normal.</span>
        @endif
        </p>
     @endforeach
</div>
