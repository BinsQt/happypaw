@foreach ($slider as $value)
<input type="range" min="1" max="100" value="{{$value -> temp}}" class="slider" id="myRange" disabled>
@endforeach
