<div class="z-10 flex">
    <div id="load_content1" class="flex">
        @foreach ( $pettemperature as $petstatus )
        <p class="text-7xl">
            {{ $petstatus -> temp }}
        </p>
        @endforeach
        <div>
            <span>°C</span>
        </div>
    </div>

</div>

