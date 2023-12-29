<div class="w-full border text-center">
    @foreach ($petlist as $pets)
    <div class="my-5 overflow-y-auto w-full border py-1 bg-slate-700">
        <a href="pet/{{ $pets -> pid }}"><button type="button" class="btn btn-info w-full btn-lg text-white capitalize py-2">{{ $pets -> name }}</button></a>

    </div>
    @endforeach

    <div class="m-3">
        <a href="petreg" class="w-full border px-3 py-2 bg-green-600">Add Pet</a>
    </div>

</div>
