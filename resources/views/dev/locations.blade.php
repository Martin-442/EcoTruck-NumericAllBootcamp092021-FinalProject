@foreach ($locations as $stop1)@foreach ($locations as $stop2)@if($stop1['name']<>$stop2['name'])"{{$stop1['name']}}","{{$stop2['name']}}"<br>
@endif
@endforeach
@endforeach
