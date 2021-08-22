$locations_lu = array(<br>
@foreach ($locations as $stop1)array("id" => {{$loop->iteration}}, "stop_org" => "{{$stop1['name']}}", "stop" => "{{$stop1['name']}}")@if (!$loop->last),@endif<br>
@endforeach
);
