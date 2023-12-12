<div id="load_content2" class=" bg-blue-200 rounded-xl">
    @foreach ( $petbpm as $petheartrate )
    <p class="text-sm">
        @if ($petheartrate -> bpm < 60)
        Your dogs heart rate is below normal. Please Check your dog condition
    @elseif ($petheartrate -> bpm > 140)
        Your dogs heart rate is above normal. Please Check your dog condition
    @else
    Your dogs heart rate is normal.
    @endif
    </p>
     @endforeach
</div>
