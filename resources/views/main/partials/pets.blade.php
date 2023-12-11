<div class="w-full border text-center">
    @foreach ($petlist as $pets)
    <div class="my-5 overflow-y-auto w-full border py-1 bg-slate-700"> 
        <button type="button" class="btn btn-info btn-lg text-white" data-toggle="modal" data-target="#myModal" data-id="{{ $pets->pid }}">{{ $pets -> name }}</button>

    </div>
    @endforeach

    <div class="m-3">
        <a href="petreg" class="w-1/2 border px-3 py-1 bg-green-600">Add Pet</a>
    </div>

    

</div>